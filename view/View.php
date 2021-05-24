<?php

require_once ('libs/smarty/Smarty.class.php');

class View
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();

        //BASE_URL es asignado aca porque es necesario que url llegue a todos los tamplates
        $this->getSmarty()->assign('url', BASE_URL);
    }

    /**
     * @return Smarty object
     */
    public function getSmarty()
    {
        return $this->smarty;
    }

    public function showHomeView()
    {
        $this->getSmarty()->assign('title', 'home');
        $this->getSmarty()->display('templates/home.tpl');
    }

}