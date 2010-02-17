<?php 
class T{
    protected $p;
    function T($p){
        $this->p=$p;
    }function __toString(){
        extract(get_object_vars($this));
        ob_start();
        include $this->p;
        return ob_get_clean();
    }
}
