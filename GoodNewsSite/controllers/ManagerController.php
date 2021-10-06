<?php

class ManagerController
{

    /**
     * @return GenesisController
     */
    public static function getGenesisController()
    {
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return $controller;
    }
}