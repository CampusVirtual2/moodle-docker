<?php

class __Mustache_c14cb4cde0eacf08dc54e0c9e26bc552 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<form id="gradetreeform" method="post" action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('notification');
        $buffer .= $this->sectionF3ed6258ad6ffc1f6233ec69a0fbe7c2($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('table'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div id="gradetreesubmit">
';
        $value = $context->find('showsave');
        $buffer .= $this->sectionDdc0b9e05e80ffa96c341d4b8eb0f586($context, $indent, $value);
        $value = $context->find('showbulkmove');
        $buffer .= $this->sectionD9176820a9f2023d52754abefb7ca235($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function sectionF3ed6258ad6ffc1f6233ec69a0fbe7c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>core/notification_info}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc896fb1429559fad42f2607525c3e3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'savechanges';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'savechanges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDdc0b9e05e80ffa96c341d4b8eb0f586(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <input class="advanced btn btn-primary" type="submit" value="{{#cleanstr}}savechanges{{/cleanstr}}">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <input class="advanced btn btn-primary" type="submit" value="';
                $value = $context->find('cleanstr');
                $buffer .= $this->sectionCc896fb1429559fad42f2607525c3e3c($context, $indent, $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfb97d18e3db40984b4bc7dfb28ab6f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moveselectedto, grades';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moveselectedto, grades';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e38603615efcdf88c863a241c9e0c0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <option value="{{value}}">{{{name}}}</option>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9176820a9f2023d52754abefb7ca235(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="form-inline mt-3">
                    <input type="hidden" name="bulkmove" value="0" id="bulkmoveinput">
                    <label for="menumoveafter">{{#str}}moveselectedto, grades{{/str}}</label>
                    <select name="moveafter" id="menumoveafter" class="ignoredirty singleselect custom-select form-control"
                            data-action="toggle" data-toggle="action" data-togglegroup="category" disabled>
                        {{#bulkmoveoptions}}
                            <option value="{{value}}">{{{name}}}</option>
                        {{/bulkmoveoptions}}
                    </select>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="form-inline mt-3">
';
                $buffer .= $indent . '                    <input type="hidden" name="bulkmove" value="0" id="bulkmoveinput">
';
                $buffer .= $indent . '                    <label for="menumoveafter">';
                $value = $context->find('str');
                $buffer .= $this->sectionCfb97d18e3db40984b4bc7dfb28ab6f2($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                    <select name="moveafter" id="menumoveafter" class="ignoredirty singleselect custom-select form-control"
';
                $buffer .= $indent . '                            data-action="toggle" data-toggle="action" data-togglegroup="category" disabled>
';
                $value = $context->find('bulkmoveoptions');
                $buffer .= $this->section2e38603615efcdf88c863a241c9e0c0e($context, $indent, $value);
                $buffer .= $indent . '                    </select>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
