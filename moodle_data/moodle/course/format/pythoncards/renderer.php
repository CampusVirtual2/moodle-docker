<?php
defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot.'/course/format/topics/renderer.php');

class format_pythoncards_renderer extends format_topics_renderer {
    public function render_section($section, $course, $mods, $modnamesused) {
        $format = course_get_format($course);
        $color = $format->get_format_options()['cardcolor'] ?? '#f5f5f5';

        $output = html_writer::start_div('pythoncard-section', ['style' => "background-color: {$color}; padding: 1rem; border-radius: 8px; margin-bottom: 1rem"]);
        $output .= html_writer::tag('h2', get_section_name($course, $section));
        $output .= html_writer::start_tag('ul');
        foreach ($mods as $mod) {
            $output .= html_writer::tag('li', $mod->modname);
        }
        $output .= html_writer::end_tag('ul');
        $output .= html_writer::end_div();
        return $output;
    }
}
