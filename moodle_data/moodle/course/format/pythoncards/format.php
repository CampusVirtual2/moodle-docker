<?php
defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot.'/course/format/topics/lib.php');

class format_pythoncards extends format_topics {
    public function get_format_name() {
        return get_string('pluginname', 'format_pythoncards');
    }

    public function course_format_options($foreditform = false) {
        $options = parent::course_format_options($foreditform);
        $options['cardcolor'] = [
            'label' => get_string('cardcolor', 'format_pythoncards'),
            'element_type' => 'color',
            'default' => '#f5f5f5'
        ];
        return $options;
    }

    public function get_course_format_option_names() {
        return array_merge(parent::get_course_format_option_names(), ['cardcolor']);
    }
}
