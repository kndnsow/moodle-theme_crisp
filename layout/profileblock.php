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

function get_content () {
    global $USER, $CFG, $SESSION, $COURSE;
    $wwwroot = '';
    $signup = '';
}

if (empty($CFG->loginhttps)) {
    $wwwroot = $CFG->wwwroot;
} else {
    $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
}
if (!isloggedin() or isguestuser()) {
    echo '<form class="navbar-form pull-left" method="post" action="'.$wwwroot.'/login/index.php?authldap_skipntlmsso=1">';
    echo '<input class="span2" type="text" name="username" placeholder="'.get_string('username').'">';
    echo '<input class="span2" type="password" name="password" placeholder="'.get_string('password').'">';
    echo '<button style="color: white;" class="btn" type="submit"> '.get_string('login').'</button>';
    echo '</form>';
} else {
    echo '<ul class="nav">
		<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#cm_submenu_5">
    <img class="profilepic" src="'.$CFG->wwwroot.'/user/pix.php?file=/'.$USER->id.'/f1.jpg"
    width="30px" height="30px" title="'.$USER->firstname.' '.$USER->lastname.'"
    alt="'.$USER->firstname.' '.$USER->lastname.'"/>'.$USER->firstname;
    echo '<b class="caret"></b></a>
    <ul class = "dropdown-menu profiledrop">
    <li><a href = "'.$CFG->wwwroot.'/my">'.get_string('mycourses').'</a></li>
    <li><a href = "'.$CFG->wwwroot.'/user/profile.php">'.get_string('viewprofile').'</a></li>
    <li><a href = "'.$CFG->wwwroot.'/user/edit.php">'.get_string('editmyprofile').'</a></li>
    <li><a href = "'.$CFG->wwwroot.'/user/files.php">'.get_string('myfiles').'</a></li>
    <li><a href = "'.$CFG->wwwroot.'/calendar/view.php?view=month">'.get_string('calendar', 'calendar').'</a></li>
    <li><a href = "'.$CFG->wwwroot.'/login/logout.php">'.get_string('logout').'</a></li></ul></li></ul>';
}