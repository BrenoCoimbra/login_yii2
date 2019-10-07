<?php

namespace app\controllers;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends yii\rest\ActiveController
{
    public $modelClass = 'app\models\User';
}
