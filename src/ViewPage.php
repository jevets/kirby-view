<?php 

namespace KirbyCasts\Kirby\View;

use \Page as KirbyPage;

abstract class ViewPage extends KirbyPage
{
    /**
     * Overrides Kirby's Page::template() method
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
     * Checks if there's a dedicated template for this page
     * Will return false when the default template is used
     *
     * @return string
     */
    public function templateFile() {
        return $this->kirby->roots()->templates() . DS . $this->template() . $this->extension;
    }
}