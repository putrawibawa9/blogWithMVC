<?php
// This is the main controller for being parent for the controllers in controllers folders
class Controller {
    // Displaying the presentation layouts
    public function view($view, $data = []){
        require_once "../app/views/$view.php";
    }

    public function model($model){
          require_once "../app/models/$model.php";
          return new $model;
    }
}