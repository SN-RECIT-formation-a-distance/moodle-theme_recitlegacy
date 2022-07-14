<?php
require_once($CFG->dirroot.'/theme/recit2/lib.php');
/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return mixed
 */
function theme_recitlegacy_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    return theme_recit2_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, $options);
}