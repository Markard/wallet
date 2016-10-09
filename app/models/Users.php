<?php

declare(strict_types = 1);

namespace app\models;

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;

    public $email;

    public $password;
}