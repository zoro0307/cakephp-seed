<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class HomeController extends AppController {

    public function index(){
      $activeMenuButton = 'posts';
      $title = 'home title';
    
      $this->set(compact('activeMenuButton', 'title','querys'));

    }
}
