<?php

declare(strict_types = 1);

namespace app\controllers;

use app\models\Users;
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Message;

class SignupController extends Controller
{
    public function indexAction()
    {
        $this->view->render('signup', 'index');
    }

    public function registerAction()
    {
        $user = new Users();

        $result = $user->save($this->request->getPost(), ['email', 'password']);

        if ($result) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems was generated.";
            /** @var Message $message */
            foreach ($user->getMessages() as $message) {
                echo "{$message->getMessage()}<br />";
            }
        }
    }
}