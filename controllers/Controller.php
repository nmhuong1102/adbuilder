<?php
/**
 * Created by PhpStorm.
 * User: Huong
 * Date: 8/10/14
 * Time: 12:16 PM
 */

include_once("models/Model.php");

class Controller {
    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke() {
        include "views/application.php";
    }
}