<?php 

namespace KirbyCasts\Kirby\View;

interface ViewInterface
{
    /**
     * Create an instance of the view
     *
     * @param array $options
     * @return void
     */
    public function __construct($options = array());

    /**
     * Set the file extension for the View engine
     *
     * @param string $extension
     * @return void
     */
    public static function setFileExtension($extension);

    /**
     * Get a rendered view as a string
     *
     * @param string $view filename of view
     * @param array $data Data to pass to the view
     * @return string
     */
    public function make($view, $data = []);
}