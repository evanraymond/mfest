<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        $this->tag->prependTitle('mFEST | ');
        $this->view->setTemplateAfter('main');
    }
}