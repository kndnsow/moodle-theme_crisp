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

// Get the HTML for the settings bits.
$html = theme_crisp_get_html_for_settings($OUTPUT, $PAGE);?>
<?php require('header.php'); ?>

<div id="page" class="container-fluid">
  <div id="page-content" class="row-fluid">
      <section id="region-main" class="span12">
          <?php
          echo $OUTPUT->course_content_header();
          echo $OUTPUT->main_content();
          echo $OUTPUT->course_content_footer();
          ?>
      </section>
  </div>

 <?php require('footer.php'); ?>
  
