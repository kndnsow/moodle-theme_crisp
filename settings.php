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
    // For slider.
    // Slider image1 setting.
    $name = 'theme_crisp/slidepic1';
    $title = get_string('slidepic1', 'theme_crisp');
    $description = get_string('slidepic1desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Slider image2 setting.
    $name1 = 'theme_crisp/slidepic2';
    $title1 = get_string('slidepic2', 'theme_crisp');
    $description1 = get_string('slidepic2desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name1, $title1, $description1, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Slider image3 setting.
    $name2 = 'theme_crisp/slidepic3';
    $title2 = get_string('slidepic3', 'theme_crisp');
    $description2 = get_string('slidepic3desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name2, $title2, $description2, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Slider image4 setting.
    $name3 = 'theme_crisp/slidepic4';
    $title3 = get_string('slidepic4', 'theme_crisp');
    $description3 = get_string('slidepic4desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name3, $title3, $description3, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Slider image5 setting.
    $name4 = 'theme_crisp/slidepic5';
    $title4 = get_string('slidepic5', 'theme_crisp');
    $description4 = get_string('slidepic5desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name4, $title4, $description4, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Slider image6 setting.
    $name5 = 'theme_crisp/slidepic6';
    $title5 = get_string('slidepic6', 'theme_crisp');
    $description5 = get_string('slidepic6desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name5, $title5, $description5, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // After slider.
    // Welcomemsg.
    $name1 = 'theme_crisp/picture1';
    $title1 = get_string('picture1', 'theme_crisp');
    $description1 = get_string('picture1desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name1, $title1, $description1, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Main body content(support).
    // For the icon.
    $name1 = 'theme_crisp/pic1';
    $title1 = get_string('pic1', 'theme_crisp');
    $description1 = get_string('pic1desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name1, $title1, $description1, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the heading.
    $name1 = 'theme_crisp/supportpara';
    $title1 = get_string('supportpara', 'theme_crisp');
    $description1 = get_string('supportparadesc', 'theme_crisp');
    $default1 = '';
    $setting = new admin_setting_configtextarea($name1, $title1, $description1, $default1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $name1 = 'theme_crisp/supportparatext';
    $title1 = get_string('supportparatext', 'theme_crisp');
    $description1 = get_string('supportparatextdesc', 'theme_crisp');
    $default1 = '';
    $setting = new admin_setting_confightmleditor($name1, $title1, $description1, $default1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Main body content(courses).
    // For the icon.
    $name2 = 'theme_crisp/pic2';
    $title2 = get_string('pic2', 'theme_crisp');
    $description2 = get_string('pic2desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name2, $title2, $description2, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the heading.
    $name2 = 'theme_crisp/coursespara';
    $title2 = get_string('coursespara', 'theme_crisp');
    $description2 = get_string('coursesparadesc', 'theme_crisp');
    $default2 = '';
    $setting = new admin_setting_configtextarea($name2, $title2, $description2, $default2);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $name2 = 'theme_crisp/coursesparatext';
    $title2 = get_string('coursesparatext', 'theme_crisp');
    $description2 = get_string('coursesparatextdesc', 'theme_crisp');
    $default2 = '';
    $setting = new admin_setting_confightmleditor($name2, $title2, $description2, $default2);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Main body content(forum).
    // For the icon.
    $name3 = 'theme_crisp/pic3';
    $title3 = get_string('pic3', 'theme_crisp');
    $description3 = get_string('pic3desc', 'theme_crisp');
    $setting = new admin_setting_configtext($name3, $title3, $description3, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the heading.
    $name3 = 'theme_crisp/forumpara';
    $title3 = get_string('forumpara', 'theme_crisp');
    $description3 = get_string('forumparadesc', 'theme_crisp');
    $default3 = '';
    $setting = new admin_setting_configtextarea($name3, $title3, $description3, $default3);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $name3 = 'theme_crisp/forumparatext';
    $title3 = get_string('forumparatext', 'theme_crisp');
    $description3 = get_string('forumparatextdesc', 'theme_crisp');
    $default3 = '';
    $setting = new admin_setting_confightmleditor($name3, $title3, $description3, $default3);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For Grups image.
    // For the image.
    $names1 = 'theme_crisp/img1';
    $titles1 = get_string('img1', 'theme_crisp');
    $descriptions1 = get_string('img1desc', 'theme_crisp');
    $setting = new admin_setting_configtext($names1, $titles1, $descriptions1, '', PARAM_URL );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the block quote para.
    // For the heading.
    $names4 = 'theme_crisp/quoteheading';
    $titles4 = get_string('quoteheading', 'theme_crisp');
    $descriptions4 = get_string('quoteheadingdesc', 'theme_crisp');
    $defaults4 = '';
    $setting = new admin_setting_configtextarea($names4, $titles4, $descriptions4, $defaults4);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // For the bodytext.
    $names4 = 'theme_crisp/quoteheadingtext';
    $titles4 = get_string('quoteheadingtext', 'theme_crisp');
    $descriptions4 = get_string('quoteheadingtextdesc', 'theme_crisp');
    $defaults4 = '';
    $setting = new admin_setting_confightmleditor($names4, $titles4, $descriptions4, $defaults4);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}

