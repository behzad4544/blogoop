<?php

namespace App\Models;

use App\Classes\Database;
use App\Exceptions\DoesNotExistException;

abstract class Model
{
    private $database;
    protected $fileName;
    protected $entityClass;
    public function __construct()
    {
        $this->database = new Database($this->fileName, $this->entityClass);
    }
    public function getAllData()
    {
        return $this->database->getData();
    }
    public function getDataById($id)
    {
        $data = $this->database->getData();
        $array = array_filter($data, function ($item) use ($id) {
            return $item->getId() == $id;
        });
        $array = array_values($array);
        if (count($array)) {
            return $array[0];
        }
        throw new DoesNotExistException("Does not exist any id in {$this->entityClass}");
    }
    public function getLastData()
    {
        $data = $this->database->getData();
        uasort($data, function ($first, $second) {
            if ($first->getId() > $second->getId()) {
                return -1;
            } else {
                return 1;
            }
        });
        $data = array_values($data);
        if (count($data)) {
            return $data[0];
        }
        throw new DoesNotExistException("Does not exist any {$this->entityClass}");
    }
    public function getFirstData()
    {
        $data = $this->database->getData();
        uasort($data, function ($first, $second) {
            if ($first->getId() < $second->getId()) {
                return -1;
            } else {
                return 1;
            }
        });
        $data = array_values($data);
        if (count($data)) {
            return $data[0];
        } else {
            throw new DoesNotExistException("Does not exist first {$this->entityClass} ");
        }
    }
    public function sortData($callback)
    {
        $data = $this->database->getData();
        uasort($data, $callback);
        $data = array_values($data);
        if (count($data)) {
            return $data;
        } else {
            throw new DoesNotExistException("Does not exist first {$this->entityClass} ");
        }
    }
    public function filterData($callback)
    {
        $data = $this->database->getData();
        $data = array_filter($data, $callback);
        $data = array_values($data);
        if (count($data)) {
            return $data;
        } else {
            throw new DoesNotExistException("Does not exist first {$this->entityClass} ");
        }
    }
}
