<?php

class MyProjectsController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('My Projects');
        parent::initialize();        
    }

    public function indexAction()
    {
        
    }

}

