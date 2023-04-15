<?php

namespace App\Models;

use App\Entities\SettingEntity;

class Setting extends Model
{
    protected $fileName = 'Setting';
    protected $entityClass = SettingEntity::class;
}
