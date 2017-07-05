<?php

namespace PMVC\PlugIn\view;

use PMVC\PlugIn\view\view_html;

\PMVC\initPlugIn(['view_html'=>null],true);

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\view_text';

class view_text extends view_html
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
}
