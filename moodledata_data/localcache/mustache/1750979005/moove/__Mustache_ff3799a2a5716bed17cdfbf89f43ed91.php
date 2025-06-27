<?php

class __Mustache_ff3799a2a5716bed17cdfbf89f43ed91 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core_courseformat/local/content/section/cmlist')) {
            $context->pushBlockContext(array(
                'core_courseformat/local/content/section/cmitem' => array($this, 'block297ee427c7ebbfe5e4eb5ecce10ea2fe'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block297ee427c7ebbfe5e4eb5ecce10ea2fe($context)
    {
        $indent = $buffer = '';
        if ($partial = $this->mustache->loadPartial('format_topcoll/local/content/section/cmitem')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
    
        return $buffer;
    }
}
