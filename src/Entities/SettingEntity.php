<?php

namespace App\Entities;

class SettingEntity
{
    private $id;
    private $title;
    private $keywords;
    private $description;
    private $author;
    private $footer;

    public function __construct($array)
    {
        $this->id = $array['id'];
        $this->title = $array['title'];
        $this->keywords = $array['keywords'];
        $this->description = $array['description'];
        $this->author = $array['author'];
        $this->footer = $array['footer'];
    }
    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'keywords' => $this->keywords,
            'description' => $this->description,
            'author' => $this->author,
            'footer' => $this->footer,
        ];
    }
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getFooter()
    {
        return $this->footer;
    }
}
