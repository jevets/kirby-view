<?php 

namespace KirbyCasts\Kirby\View;

interface ViewInterface
{
    /**
     * Create an instance of the view
     *
     * @param string $viewsDir
     * @param string $cacheDir
     * @return void
     */
    public function __construct($viewsDir, $cacheDir = '');

    /**
     * Get a rendered view as a string
     *
     * @param string $view filename of view
     * @param array $data Data to pass to the view
     * @return string
     */
    public function make($view, $data = []);
}