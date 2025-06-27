<?php

class __Mustache_87e723dcbbadd16d52de9449256984f7 extends Mustache_Template
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
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('sectionno'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="section course-section main clearfix';
        $value = $context->find('sectionstyle');
        $buffer .= $this->section443eba6469f34d153970d022d2b9678f($context, $indent, $value);
        $value = $context->find('columnclass');
        $buffer .= $this->section86765788f95588f82dcd1308ee3ab20e($context, $indent, $value);
        $buffer .= '"';
        $value = $context->find('columnwidth');
        $buffer .= $this->section18a0fd7507cdb644d1daf2eabb57b936($context, $indent, $value);
        $buffer .= ' role="region" aria-labeled-by="sectionid-';
        $value = $this->resolveValue($context->find('sectionid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-title" data-sectionid="';
        $value = $this->resolveValue($context->find('sectionno'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $value = $context->find('sectionreturn');
        $buffer .= $this->section238ac4201914b7fef897bd3b29ea4ac8($context, $indent, $value);
        $buffer .= ' data-for="section" data-id="';
        $value = $this->resolveValue($context->find('sectionid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-number="';
        $value = $this->resolveValue($context->find('sectionno'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('nomtore');
        $buffer .= $this->sectionA7feb46003b72ec9815fa783148f022d($context, $indent, $value);
        $buffer .= $indent . '    <div class="content"';
        $value = $context->find('contentaria');
        $buffer .= $this->sectionBe951ff1ea8482fcacb8773f7688cf58($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('sectionpage');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div id="toggle-';
            $value = $this->resolveValue($context->find('sectionno'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="sectionhead toggle ';
            $value = $context->find('tif');
            if (empty($value)) {
                
                $buffer .= 'toggle-';
                $value = $this->resolveValue($context->find('toggleiconset'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
            $value = $context->find('tif');
            $buffer .= $this->sectionB9f9000970fa1bdfdc221529f90193e5($context, $indent, $value);
            $buffer .= '" tabindex="0">
';
            $buffer .= $indent . '            <span class="the_toggle ';
            $value = $context->find('toggleopen');
            $buffer .= $this->section338eee33e3501cd13706084098ac10f8($context, $indent, $value);
            $value = $context->find('toggleopen');
            if (empty($value)) {
                
                $buffer .= 'toggle_closed';
            }
            $buffer .= ' ';
            $value = $this->resolveValue($context->find('toggleiconsize'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" role="button" aria-expanded="';
            $value = $context->find('toggleopen');
            $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
            $value = $context->find('toggleopen');
            if (empty($value)) {
                
                $buffer .= 'false';
            }
            $buffer .= '" aria-controls="toggledsection-';
            $value = $this->resolveValue($context->find('sectionno'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('heading'), $context);
            $buffer .= ($value === null ? '' : $value);
            $value = $context->find('tif');
            $buffer .= $this->section4475dc597bf275dea8df022a27a0784c($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </span>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        ';
            $value = $context->find('usereditingtitle');
            $buffer .= $this->sectionB59066704dfcdf0dcc73189787c6f130($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        ';
            $value = $context->find('usereditingurl');
            $buffer .= $this->section59c03d2802c01f859583c10ed58e43ae($context, $indent, $value);
            $value = $context->find('sectionvisibility');
            $buffer .= $this->section865890462ab689010afee7f88dea35be($context, $indent, $value);
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('sectionavailability'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $value = $context->find('sectionsummarywhencollapsed');
            $buffer .= $this->sectionC47ab641ca61411fc1630cf3d3e941fa($context, $indent, $value);
            $buffer .= $indent . '        <div id="toggledsection-';
            $value = $this->resolveValue($context->find('sectionno'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="sectionbody toggledsection';
            $value = $context->find('toggleopen');
            $buffer .= $this->sectionAf55852e19b825115f4b36d83f3c7228($context, $indent, $value);
            $buffer .= '">
';
            $value = $context->find('sectionsummarywhencollapsed');
            if (empty($value)) {
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sectionsummary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('cscml'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
        }
        $value = $context->find('sectionpage');
        $buffer .= $this->section5b217f4a68624a72e07fc58320425e4b($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('nomtore');
        $buffer .= $this->sectionB8bfc50c9632141812513826823840d9($context, $indent, $value);
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section443eba6469f34d153970d022d2b9678f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{sectionstyle}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('sectionstyle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86765788f95588f82dcd1308ee3ab20e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{columnclass}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('columnclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18a0fd7507cdb644d1daf2eabb57b936(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="width: {{columnwidth}}%;"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="width: ';
                $value = $this->resolveValue($context->find('columnwidth'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%;"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section238ac4201914b7fef897bd3b29ea4ac8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-sectionreturnid="{{sectionreturn}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-sectionreturnid="';
                $value = $this->resolveValue($context->find('sectionreturn'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42a9ca91f2d722b626c97f46e2ea6000(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="right side">{{{rightcontent}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="right side">';
                $value = $this->resolveValue($context->find('rightcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7feb46003b72ec9815fa783148f022d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^rtl}}
    <div class="left side">{{{leftcontent}}}</div>
    {{/rtl}}
    {{#rtl}}
    <div class="right side">{{{rightcontent}}}</div>
    {{/rtl}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('rtl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <div class="left side">';
                    $value = $this->resolveValue($context->find('leftcontent'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</div>
';
                }
                $value = $context->find('rtl');
                $buffer .= $this->section42a9ca91f2d722b626c97f46e2ea6000($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe951ff1ea8482fcacb8773f7688cf58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-live="polite"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-live="polite"';
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

    private function section338eee33e3501cd13706084098ac10f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'toggle_open';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'toggle_open';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
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

    private function sectionB59066704dfcdf0dcc73189787c6f130(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="hidden" aria-hidden="true">{{usereditingtitle}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="hidden" aria-hidden="true">';
                $value = $this->resolveValue($context->find('usereditingtitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81c739b17f39a2a49bb2676e54888800(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editsection, format_topcoll';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editsection, format_topcoll';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59c03d2802c01f859583c10ed58e43ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{usereditingurl}}}" title="{{#str}}editsection, format_topcoll{{/str}}">{{{usereditingicon}}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('usereditingurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section81c739b17f39a2a49bb2676e54888800($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('usereditingicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section865890462ab689010afee7f88dea35be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
        }}<div data-region="sectionbadges" class="sectionbadges d-inline-block align-items-center">
            {{$ core_courseformat/local/content/section/badges }}
                {{> core_courseformat/local/content/section/badges }}
            {{/ core_courseformat/local/content/section/badges }}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div data-region="sectionbadges" class="sectionbadges d-inline-block align-items-center">
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/badges');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC47ab641ca61411fc1630cf3d3e941fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{sectionsummary}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('sectionsummary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf55852e19b825115f4b36d83f3c7228(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sectionopen';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sectionopen';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b217f4a68624a72e07fc58320425e4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{heading}}}
            {{{sectionavailability}}}
            <div class="summary">
                {{{summary}}}
                {{#usereditingurl}}<a href="{{{usereditingurl}}}" title="{{#str}}editsection, format_topcoll{{/str}}">{{{usereditingicon}}}</a>{{/usereditingurl}}
            </div>
            {{{cscml}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sectionavailability'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            <div class="summary">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $context->find('usereditingurl');
                $buffer .= $this->section59c03d2802c01f859583c10ed58e43ae($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('cscml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c94fb3b311d3756c0fa3ee51f889a1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="left side">{{{leftcontent}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="left side">';
                $value = $this->resolveValue($context->find('leftcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8bfc50c9632141812513826823840d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^rtl}}
    <div class="right side">{{{rightcontent}}}</div>
    {{/rtl}}
    {{#rtl}}
    <div class="left side">{{{leftcontent}}}</div>
    {{/rtl}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('rtl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <div class="right side">';
                    $value = $this->resolveValue($context->find('rightcontent'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</div>
';
                }
                $value = $context->find('rtl');
                $buffer .= $this->section7c94fb3b311d3756c0fa3ee51f889a1d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
