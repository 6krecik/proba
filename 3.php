<?php
require('1.php');
class kl3
{
private $objekt;

function __construct($ob)
{
        $this->objekt = $ob;
}


function getobjekt()
{
        return $this->objekt->getname();
}


}

?>
