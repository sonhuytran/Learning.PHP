<?php
/**
 * Created by PhpStorm.
 * User: Huy
 * Date: 18/07/14
 * Time: 15:57
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {

    public function index() {
        echo 'Hello World!';
    }

    public function sayHello() {
        echo 'Hi everybody!';
    }

    public function eat() {
        echo 'Enjoy your meal!';
    }
} 