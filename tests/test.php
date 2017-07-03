<?php
namespace PMVC\PlugIn\view_text;

use PHPUnit_Framework_TestCase;

class View_textTest extends PHPUnit_Framework_TestCase
{
    private $_plug = 'view_text';
    function testPlugin()
    {
        ob_start();
        print_r(\PMVC\plug($this->_plug));
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($this->_plug,$output);
    }

}
