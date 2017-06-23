<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's crisp theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_crisp
 * @copyright 2014 dualcube {@link http://dualcube.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $name = 'theme_crisp/favicon';
    $title = get_string('favicon', 'theme_crisp');
    $description = get_string('favicondesc', 'theme_crisp');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $name = 'theme_crisp/logo';
    $title = get_string('logo', 'theme_crisp');
    $description = get_string('logodesc', 'theme_crisp');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For slider.
    // Slider image1 setting.
    $name = 'theme_crisp/slidercount';
    $title = get_string('slidercount', 'theme_crisp');
    $description = get_string('slidercountdesc', 'theme_crisp');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            0 => get_string('zero', 'theme_crisp'),
            1 => get_string('one', 'theme_crisp'),
            2 => get_string('two', 'theme_crisp'),
            3 => get_string('three', 'theme_crisp'),
            4 => get_string('four', 'theme_crisp'),
            5 => get_string('five', 'theme_crisp'),
            6 => get_string('six', 'theme_crisp'),
        ));
    $settings->add($setting);

    for ($slidecounts = 1; $slidecounts <= get_config('theme_crisp', 'slidercount'); $slidecounts = $slidecounts + 1) {
        $name = 'theme_crisp/slidepic'.$slidecounts;
        $title = get_string('slidepic'.$slidecounts, 'theme_crisp');
        $description = get_string('slidepic'.$slidecounts.'desc', 'theme_crisp');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'slidepic'.$slidecounts);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    }

    $name = 'theme_crisp/maincolor';
    $title = get_string('maincolor', 'theme_crisp');
    $description = get_string('maincolordesc', 'theme_crisp');
    $default = '#088a4a';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // After slider.
    // Welcomemsg.
    $name = 'theme_crisp/picture1';
    $title = get_string('picture1', 'theme_crisp');
    $description = get_string('picture1desc', 'theme_crisp');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'picture1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Main body content(support).
    // For the icon.
    $name = 'theme_crisp/pic1';
    $title = get_string('pic1', 'theme_crisp');
    $description = get_string('pic1desc', 'theme_crisp');
    $default = "";
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pic1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the heading.
    $name = 'theme_crisp/supportpara';
    $title = get_string('supportpara', 'theme_crisp');
    $description = get_string('supportparadesc', 'theme_crisp');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $name = 'theme_crisp/supportparatext';
    $title = get_string('supportparatext', 'theme_crisp');
    $description = get_string('supportparatextdesc', 'theme_crisp');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Main body content(courses).
    // For the icon.
    $name = 'theme_crisp/pic2';
    $title = get_string('pic2', 'theme_crisp');
    $description = get_string('pic2desc', 'theme_crisp');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pic2' );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the heading.
    $name = 'theme_crisp/coursespara';
    $title = get_string('coursespara', 'theme_crisp');
    $description = get_string('coursesparadesc', 'theme_crisp');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $name = 'theme_crisp/coursesparatext';
    $title = get_string('coursesparatext', 'theme_crisp');
    $description = get_string('coursesparatextdesc', 'theme_crisp');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Main body content(forum).
    // For the icon.
    $name = 'theme_crisp/pic3';
    $title = get_string('pic3', 'theme_crisp');
    $description = get_string('pic3desc', 'theme_crisp');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pic3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the heading.
    $name = 'theme_crisp/forumpara';
    $title = get_string('forumpara', 'theme_crisp');
    $description = get_string('forumparadesc', 'theme_crisp');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $name = 'theme_crisp/forumparatext';
    $title = get_string('forumparatext', 'theme_crisp');
    $description = get_string('forumparatextdesc', 'theme_crisp');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For Grups image.
    // For the image.
    $names = 'theme_crisp/img1';
    $titles = get_string('img1', 'theme_crisp');
    $descriptions = get_string('img1desc', 'theme_crisp');
    $setting = new admin_setting_configstoredfile($names, $titles, $descriptions, 'img1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the block quote para.
    // For the heading.
    $names = 'theme_crisp/quoteheading';
    $titles = get_string('quoteheading', 'theme_crisp');
    $descriptions = get_string('quoteheadingdesc', 'theme_crisp');
    $defaults = '';
    $setting = new admin_setting_configtextarea($names, $titles, $descriptions, $defaults);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $names = 'theme_crisp/quoteheadingtext';
    $titles = get_string('quoteheadingtext', 'theme_crisp');
    $descriptions = get_string('quoteheadingtextdesc', 'theme_crisp');
    $defaults = '';
    $setting = new admin_setting_confightmleditor($names, $titles, $descriptions, $defaults);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For custom CSS

    $names = 'theme_crisp/customcss';
    $titles = get_string('customcss', 'theme_crisp');
    $descriptions = get_string('customcssdesc', 'theme_crisp');
    $defaults = '';
    $setting = new admin_setting_configtextarea($names, $titles, $descriptions, $defaults);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}

