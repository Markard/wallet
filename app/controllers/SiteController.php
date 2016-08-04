<?php

declare(strict_types = 1);

namespace app\controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

class SiteController extends Controller
{
    public function indexAction()
    {
        $this->view->render('site', 'index');
    }

    public function aboutAction()
    {
        $this->view->render('site', 'about');
    }
}