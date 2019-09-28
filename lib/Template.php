<?php

class Template
{
    // Path to Template
    protected $template;
    // vars Passed In
    protected $vars = array();

    // Constructor
    public function __construct($template)
    {
        $this->template = $template;
    }

    public function __get($key)
    {
        // TODO: Implement __get() method.
        return $this->vars[$key];
    }

    public function __set($key, $value)
    {
        // TODO: Implement __set() method.
        $this->vars[$key] = $value;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }

}