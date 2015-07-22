<?php


defined('MOODLE_INTERNAL') || die();


class tinymce_rj_insertcode extends editor_tinymce_plugin {
    /** @var array list of buttons defined by this plugin */
    protected $buttons = array('rj_insertcode');

    protected function update_init_params(array &$params, context $context,
            array $options = null) {
            global $course;
            $this->add_button_after($params,1,'rj_insertcode');
            $this->add_js_plugin($params);
    }
}
