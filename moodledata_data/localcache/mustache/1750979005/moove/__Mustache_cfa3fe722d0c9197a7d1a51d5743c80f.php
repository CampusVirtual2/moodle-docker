<?php

class __Mustache_cfa3fe722d0c9197a7d1a51d5743c80f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span class="tif-container tif-';
        $value = $this->resolveValue($context->find('tifp'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <span class="tife tifc ';
        $value = $this->resolveValue($context->find('tifcc'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"><span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionF0531b2cbd2af9d36697ac817009939e($context, $indent, $value);
        $buffer .= '</span></span>
';
        $buffer .= $indent . '    <span class="tife tifo ';
        $value = $this->resolveValue($context->find('tifoc'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"><span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section49eb36f44ee72a05f98295ccef1a13ef($context, $indent, $value);
        $buffer .= '</span></span>
';
        $buffer .= $indent . '</span>
';

        return $buffer;
    }

    private function sectionF0531b2cbd2af9d36697ac817009939e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'toggleclose, format_topcoll';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'toggleclose, format_topcoll';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49eb36f44ee72a05f98295ccef1a13ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'toggleopen, format_topcoll';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'toggleopen, format_topcoll';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
