<?php

class __Mustache_6149d36dd696cad45d84f5c72dd632b5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style type="text/css" media="screen">
';
        $buffer .= $indent . '    /* <![CDATA[ */
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* -- Toggle -- */
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content.sectionhidden {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('togglebackground'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    /* -- Toggle text -- */
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle .the_toggle,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content.sectionhidden {
';
        $buffer .= $indent . '        color: ';
        $value = $this->resolveValue($context->find('toggleforegroundcolour'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '        text-align: ';
        $value = $this->resolveValue($context->find('togglealignment'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $value = $context->find('toggleiconposition');
        $buffer .= $this->section136ac8856a3a2f5a133125bdd08e9b65($context, $indent, $value);
        $buffer .= $indent . '    /* -- What happens when a toggle is hovered over -- */
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle:hover .the_toggle,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content.sectionhidden .toggle:hover .the_toggle,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle:focus .the_toggle,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content.sectionhidden .toggle:focus .the_toggle {
';
        $buffer .= $indent . '        color: ';
        $value = $this->resolveValue($context->find('toggleforegroundhovercolour'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle:hover,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle:focus {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('togglebackgroundhovercolour'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section.main > .content,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.tcsection > .content {
';
        $buffer .= $indent . '        margin: 0 ';
        $value = $this->resolveValue($context->find('topcollsidewidthval'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $value = $context->find('topcollsidewidthvalicons');
        $buffer .= $this->section4c09579d99a987b34d680d63ba4586ce($context, $indent, $value);
        $value = $context->find('hulhc');
        $buffer .= $this->section5c8a66f1d48326e499ef15a6ec274a2a($context, $indent, $value);
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle,
';
        $buffer .= $indent . '    .course-content ul.ctopics li.section .content.sectionhidden {
';
        $buffer .= $indent . '        border-top-left-radius: ';
        $value = $this->resolveValue($context->find('tcborderradiustl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= 'em;
';
        $buffer .= $indent . '        border-top-right-radius: ';
        $value = $this->resolveValue($context->find('tcborderradiustr'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= 'em;
';
        $buffer .= $indent . '        border-bottom-right-radius: ';
        $value = $this->resolveValue($context->find('tcborderradiusbr'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= 'em;
';
        $buffer .= $indent . '        border-bottom-left-radius: ';
        $value = $this->resolveValue($context->find('tcborderradiusbl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= 'em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* ]]> */
';
        $buffer .= $indent . '</style>
';

        return $buffer;
    }

    private function section136ac8856a3a2f5a133125bdd08e9b65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    /* Toggle icon position. */
    .course-content ul.ctopics li.section .content .toggle .the_toggle,
    #toggle-all .content .toggle-all {
        background-position: {{toggleiconposition}} center;
    }
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    /* Toggle icon position. */
';
                $buffer .= $indent . '    .course-content ul.ctopics li.section .content .toggle .the_toggle,
';
                $buffer .= $indent . '    #toggle-all .content .toggle-all {
';
                $buffer .= $indent . '        background-position: ';
                $value = $this->resolveValue($context->find('toggleiconposition'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' center;
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c09579d99a987b34d680d63ba4586ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    .course-content ul.ctopics li.section.main .side,
    .course-content ul.ctopics li.tcsection .side {
        width: {{topcollsidewidthvalicons}};
    }
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    .course-content ul.ctopics li.section.main .side,
';
                $buffer .= $indent . '    .course-content ul.ctopics li.tcsection .side {
';
                $buffer .= $indent . '        width: ';
                $value = $this->resolveValue($context->find('topcollsidewidthvalicons'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c8a66f1d48326e499ef15a6ec274a2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    .course-content ul.ctopics li.section {
        display: inline-block;
        vertical-align: top;
    }
    .course-content ul.ctopics li.section.hidden {
        display: inline-block !important; /* Only using \'!important\' because of Bootstrap 3. */
    }
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    .course-content ul.ctopics li.section {
';
                $buffer .= $indent . '        display: inline-block;
';
                $buffer .= $indent . '        vertical-align: top;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    .course-content ul.ctopics li.section.hidden {
';
                $buffer .= $indent . '        display: inline-block !important; /* Only using \'!important\' because of Bootstrap 3. */
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
