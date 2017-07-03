<?php

namespace PMVC\PlugIn\view;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\view_text';

class view_text extends ViewEngine
{
    public function init()
    {
        $this['headers']=[
            'Content-Type: text/plain; charset=utf-8'
        ];
        \PMVC\dev(function(){
            $this['headers'] = null;
        }, 'tohtml');
    }

    private function _load($__f)
    {
        include($__f);
        $this->flush();
    }

    public function process()
    {
        $t = $this->initTemplateHelper();
        $file = $this->getTplFile($this['themePath']);
        $this->_load($file);
    }
}
