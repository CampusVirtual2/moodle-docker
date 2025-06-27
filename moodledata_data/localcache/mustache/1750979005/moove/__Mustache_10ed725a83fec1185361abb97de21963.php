<?php

class __Mustache_10ed725a83fec1185361abb97de21963 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li id="topcoll-display-instructions" class="tcsection main clearfix">
';
        $value = $context->find('spacer');
        $buffer .= $this->section44673fa4089ce115138adc0cc2cc11cb($context, $indent, $value);
        $buffer .= $indent . '    <div class="content">
';
        $buffer .= $indent . '        <div class="sectionbody">
';
        $buffer .= $indent . '            <p>';
        $value = $context->find('str');
        $buffer .= $this->section386a82199dc7c02dc14f2fd8b5781356($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('spacer');
        $buffer .= $this->sectionDbc9ccd7c52f7524ed96f817654c18a2($context, $indent, $value);
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section6f33152a41341e2c397de871a1796b75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44673fa4089ce115138adc0cc2cc11cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="{{^rtl}}left{{/rtl}}{{#rtl}}right{{/rtl}} side">{{{spacer}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="';
                $value = $context->find('rtl');
                if (empty($value)) {
                    
                    $buffer .= 'left';
                }
                $value = $context->find('rtl');
                $buffer .= $this->section6f33152a41341e2c397de871a1796b75($context, $indent, $value);
                $buffer .= ' side">';
                $value = $this->resolveValue($context->find('spacer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section386a82199dc7c02dc14f2fd8b5781356(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'instructions, format_topcoll';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'instructions, format_topcoll';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0aa6fe3b3c41579e49bb7bcc3c6a53a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbc9ccd7c52f7524ed96f817654c18a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="{{^rtl}}right{{/rtl}}{{#rtl}}left{{/rtl}} side">{{{spacer}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="';
                $value = $context->find('rtl');
                if (empty($value)) {
                    
                    $buffer .= 'right';
                }
                $value = $context->find('rtl');
                $buffer .= $this->section0aa6fe3b3c41579e49bb7bcc3c6a53a1($context, $indent, $value);
                $buffer .= ' side">';
                $value = $this->resolveValue($context->find('spacer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
