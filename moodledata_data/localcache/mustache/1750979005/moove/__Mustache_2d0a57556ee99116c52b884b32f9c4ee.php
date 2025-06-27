<?php

class __Mustache_2d0a57556ee99116c52b884b32f9c4ee extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-course-format">
';
        $buffer .= $indent . '    <h2 class="accesshide">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section89336ebeebe62217b7864f5c678301ba($context, $indent, $value);

        return $buffer;
    }

    private function section89336ebeebe62217b7864f5c678301ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'format_topcoll/local/content\'], function(component) {
        component.init(
            \'{{uniqid}}-course-format\', 
            {
                COLLAPSE: `.ctopics .toggle`,
                TOGGLEALL: `.ctopics .toggle-all`,
                TOGGLEALLCLOSED: `toggles-all-closed`
            },
            {{sectionreturn}}
        );
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'format_topcoll/local/content\'], function(component) {
';
                $buffer .= $indent . '        component.init(
';
                $buffer .= $indent . '            \'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-course-format\', 
';
                $buffer .= $indent . '            {
';
                $buffer .= $indent . '                COLLAPSE: `.ctopics .toggle`,
';
                $buffer .= $indent . '                TOGGLEALL: `.ctopics .toggle-all`,
';
                $buffer .= $indent . '                TOGGLEALLCLOSED: `toggles-all-closed`
';
                $buffer .= $indent . '            },
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sectionreturn'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        );
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
