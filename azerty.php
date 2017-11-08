<?php
class Foo 
{
    public $aMemberVar ='aMemberVar Member Variable';
    public $aFuncName='aMemberFunc';
    
    function aMembreFunc()
    {
        print'Inside`aMemberFunc()`'.$this->aMemberV;
    }
}
$foo = new Foo;
echo $foo->aMemberVar;
$foo->aMemberFunc();