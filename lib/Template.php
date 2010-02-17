<?php

class Template
{
    protected $path;
    
    public function __construct($path)
    {
        $this->path = $path;
    }
    public function render()
    {
        extract(get_object_vars($this));
        ob_start();
        include $this->path;
        return ob_get_clean();
    }
    
    public function display()
    {
        echo $this->render();
    }
    
    public function __toString()
    {
        return $this->render();
    }
    
}
