<?php 

namespace KirbyCasts\Kirby\View;

use \Page as KirbyPage;

class ViewPage extends KirbyPage
{
    /**
     * View file extension
     *
     * @var string
     */
    protected $extension = '';

    /**
     * Overrides Kirby's Page::template() method
     * to use different file extensions for templates.
     *
     * @return string template name
     */
    public function template() 
    {
        // check for a cached template name
        if(isset($this->cache['template'])) return $this->cache['template'];
        // get the template name
        $templateName = $this->intendedTemplate();

        // check if the file exists and return the appropriate template name
        $filename = $this->kirby->roots()->templates() . DS . $templateName;

        return $this->cache['template'] =
          file_exists($filename . $this->extension) || file_exists($filename . '.php') ?
            $templateName : 'default';
    }

    /**
     * Override Kirby's Page::templateFile() method
     * to return the filename with a different extension
     *
     * @return string
     */
    public function templateFile() {
        return $this->kirby->roots()->templates() . DS . $this->template() . $this->extension;
    }
}