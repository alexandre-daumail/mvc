<?php
class ControllerNotFoundException extends Exception
{
    public function __construct($message = "Aucun contrôleur n'a été trouvée")
    {
        parent::__construct($message, "0006");
    }
}
