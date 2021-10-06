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

    /**
     * @return BooksController
     */
    public static function getBooksController()
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }

    /**
     * @return ContactController
     */
    public static function getContactController()
    {
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return $controller;
    }
}