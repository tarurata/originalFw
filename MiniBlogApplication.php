<?php

class MiniBlogApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    public function registerRoutes()
    {
        return array(
        );
    }

    protected function configure()
    {
        $this->db_manager->connect('master', array(

        ));
    }
}
