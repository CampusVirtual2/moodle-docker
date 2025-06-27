<?php

class __Mustache_151993ababce5bed7e8e5d0280693d7e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li id="toggle-all" class="tcsection main clearfix">
';
        $value = $context->find('spacer');
        $buffer .= $this->section44673fa4089ce115138adc0cc2cc11cb($context, $indent, $value);
        $buffer .= $indent . '    <div class="content">
';
        $buffer .= $indent . '        <div class="sectionbody toggle-all-content ';
        $value = $context->find('tif');
        if (empty($value)) {
            
            $buffer .= 'toggle-';
            $value = $this->resolveValue($context->find('toggleiconset'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' ';
            $value = $context->find('toggleallhover');
            $buffer .= $this->section2e0f471d4f4a54452a6a362c223cf48b($context, $indent, $value);
        }
        $value = $context->find('tif');
        $buffer .= $this->sectionB9f9000970fa1bdfdc221529f90193e5($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <span id="toggles-all-opened" class="toggle-all on ';
        $value = $this->resolveValue($context->find('tctoggleiconsize'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="button" title="';
        $value = $this->resolveValue($context->find('sctopenall'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" tabindex="0" aria-controls="';
        $value = $this->resolveValue($context->find('ariacontrols'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <h4>';
        $value = $context->find('str');
        $buffer .= $this->section05553fc389f569d8dc0a1f8371fddae6($context, $indent, $value);
        $buffer .= '</h4>';
        $value = $context->find('tif');
        $buffer .= $this->section4475dc597bf275dea8df022a27a0784c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '            <span id="toggles-all-closed" class="toggle-all off ';
        $value = $this->resolveValue($context->find('tctoggleiconsize'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="button" title="';
        $value = $this->resolveValue($context->find('sctcloseall'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" tabindex="0" aria-controls="';
        $value = $this->resolveValue($context->find('ariacontrols'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <h4>';
        $value = $context->find('str');
        $buffer .= $this->sectionCa59a46da2aff179b22ff0e8c5c5cfa4($context, $indent, $value);
        $buffer .= '</h4>';
        $value = $context->find('tif');
        $buffer .= $this->section4475dc597bf275dea8df022a27a0784c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
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

    private function section2e0f471d4f4a54452a6a362c223cf48b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'toggle-{{toggleiconset}}-hover';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'toggle-';
                $value = $this->resolveValue($context->find('toggleiconset'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-hover';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9f9000970fa1bdfdc221529f90193e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tif';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tif';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05553fc389f569d8dc0a1f8371fddae6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'topcollopened, format_topcoll';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'topcollopened, format_topcoll';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4475dc597bf275dea8df022a27a0784c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{tif}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('tif'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa59a46da2aff179b22ff0e8c5c5cfa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'topcollclosed, format_topcoll';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'topcollclosed, format_topcoll';
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
