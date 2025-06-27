<?php

class __Mustache_5ed162a216a820c34ec461264ef55e44 extends Mustache_Template
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
        if ($parent = $this->mustache->loadPartial('core_courseformat/local/content/section/cmitem')) {
            $context->pushBlockContext(array(
                'core_courseformat/local/content/cm' => array($this, 'block9b7c62634d1c268249d4cf31ba80e956'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block9b7c62634d1c268249d4cf31ba80e956($context)
    {
        $indent = $buffer = '';
        if ($partial = $this->mustache->loadPartial('format_topcoll/local/content/cm')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
    
        return $buffer;
    }
}
