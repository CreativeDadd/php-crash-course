<?php
class BaseClass {
    public $publicProperty = "I can be accessed anywhere";

    protected $protectedProperty = 'I can be accessed only in the parent class and the subclass';

    private $privateProperty = 'I can only be access in the baseclass or the parent class';
}