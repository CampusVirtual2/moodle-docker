<?php

class __Mustache_0a1755f9c03d86fbe72c849107919efd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="activity-item';
        $value = $context->find('modstealth');
        $buffer .= $this->section5eafb69b7aa9ac928ed8f1f29a35d6ab($context, $indent, $value);
        $value = $context->find('modhiddenfromstudents');
        $buffer .= $this->section5eafb69b7aa9ac928ed8f1f29a35d6ab($context, $indent, $value);
        $value = $context->find('indent');
        $buffer .= $this->section31d5362210441492211a10671c391419($context, $indent, $value);
        $value = $context->find('modinline');
        $buffer .= $this->sectionAbae27363e5f9cf4839beb1c8bcbd5be($context, $indent, $value);
        $buffer .= '" data-activityname="';
        $value = $this->resolveValue($context->find('activityname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/activity')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $value = $context->find('cmmeta');
        $buffer .= $this->sectionF8922e045cba9dc2fb3670d1bb85bd3b($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5eafb69b7aa9ac928ed8f1f29a35d6ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hiddenactivity';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hiddenactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31d5362210441492211a10671c391419(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' indent-{{indent}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' indent-';
                $value = $this->resolveValue($context->find('indent'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbae27363e5f9cf4839beb1c8bcbd5be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activityinline';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activityinline';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8922e045cba9dc2fb3670d1bb85bd3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ct-activity-meta-container">
            {{{cmmeta}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ct-activity-meta-container">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('cmmeta'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
