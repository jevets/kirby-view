<?php 

namespace KirbyCasts\Kirby\View;

abstract class View implements ViewInterface
{
    /**
     * Instance of the template engine
     *
     * @var mixed
     */
    protected $engine;

    /**
     * Template file extension
     *
     * @var string
     */
    protected static $extension = '.php';

    /**
     * Create an instance of the view
     *
     * @param array $options
     * @return void
     */
    abstract public function __construct($options = array());
    
    /**
     * Get a rendered view as a string
     *
     * @param string $view filename of view
     * @param array $data Data to pass to the view
     * @return string
     */
    public function make($view, $data = []);
}