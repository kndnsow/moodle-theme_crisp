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

$html = theme_crisp_get_html_for_settings($OUTPUT, $PAGE);?>
<?php require('header.php'); ?>
<div id="page" class="container-fluid">
  <div id="page-content" class="row-fluid">
    <section id="region-main" class="span12">
      <div class="row-fluid">
        <div class="span12">
        <div id="lemmon-slider">
<div id="slider3" class="slider">
<ul>
<li><div>
<?php 
global $DB, $USER;
$name = 'theme_crisp';
$fieldname = 'slidepic1';
$image = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
where mcp.plugin = ? and mcp.name = ?', array($name, $fieldname));
if (!empty($image->value)) {
?>
<img src="<?php echo $image->value; ?>" alt=""/>
<?php
} else {
?>
<img src="<?php echo $CFG->wwwroot.'/theme/'.$CFG->theme.'/img/vintage.jpg'; ?>" alt=""/>
<?php
}
?>
</div></li>
<li><div>
<?php 
$name = 'theme_crisp';
$fieldname = 'slidepic2';
$image = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
where mcp.plugin = ? and mcp.name= ?', array($name, $fieldname));
if (!empty($image->value)) {
?>
<img src="<?php echo $image->value; ?>" alt=""/>
<?php
} else {
?>
<img src="<?php echo $CFG->wwwroot.'/theme/'.$CFG->theme.'/img/littlevisuals.jpg'; ?>" alt=""/>
<?php
}
?>
</div></li>
<li><div>
<?php 
$name = 'theme_crisp';
$fieldname = 'slidepic3';
$image = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
where mcp.plugin = ? and mcp.name= ?', array($name, $fieldname));
if (!empty($image->value)) {
?>
<img src="<?php echo $image->value; ?>" alt=""/>
<?php
} else {
?>
<img src="<?php echo $CFG->wwwroot.'/theme/'.$CFG->theme.'/img/gratisography.jpg'; ?>" alt=""/>
<?php
}
?>
</div></li>
<li><div>
<?php 
$name = 'theme_crisp';
$fieldname = 'slidepic4';
$image = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
where mcp.plugin = ? and mcp.name= ?', array($name, $fieldname));
if (!empty($image->value)) {
?>
<img src="<?php echo $image->value; ?>" alt=""/>
<?php
} else {
?>
<img src="<?php echo $CFG->wwwroot.'/theme/'.$CFG->theme.'/img/millionfreepictures.jpg'; ?>" alt=""/>
<?php
}
?>
</div></li>
<li><div>
<?php 
$name = 'theme_crisp';
$fieldname = 'slidepic5';
$image = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
where mcp.plugin = ? and mcp.name= ?', array($name, $fieldname));
if (!empty($image->value)) {
?>
<img src="<?php echo $image->value; ?>" alt=""/>
<?php
} else {
?>
<img src="<?php echo $CFG->wwwroot.'/theme/'.$CFG->theme.'/img/pixabay.jpg'; ?>" alt=""/>
<?php
}
?>
</div></li>
<li><div>
<?php 
$name = 'theme_crisp';
$fieldname = 'slidepic6';
$image = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
where mcp.plugin = ? and mcp.name= ?', array($name, $fieldname));
if (!empty($image->value)) {
?>
<img src="<?php echo $image->value; ?>" alt=""/>
<?php
} else {
?>
<img src="<?php echo $CFG->wwwroot.'/theme/'.$CFG->theme.'/img/unsplash.jpg'; ?>" alt=""/>
<?php
}
?>
</div></li>
</ul>
</div>
<div class="controls">
<a href="#" class="next-page"></a>
<a href="#" class="prev-page"></a>
</div>
</div> <!-- end of lemmon slider -->
        <?php
        echo '<h2 class="short_headline"><span>Login to your account...</span></h2>';?>
        </div> 
      </div> 
      <div class="row-fluid">
        <?php echo '<div class="mainlogin">'; ?>
          <div class="span12"> 
            <?php echo $OUTPUT->main_content();?>
          </div> 
          <?php echo '</div>';
          echo $OUTPUT->course_content_footer();
        ?>
      </div> 
    </section>
  </div>
  <script>
window.onload = function(){
// home page slider 
$( '#slider3' ).lemmonSlider({ infinite: true });
sliderAutoplay();
}
// autoplay
var sliderTimeout = null;
function sliderAutoplay(){
$( '#slider3' ).trigger( 'nextSlide' );
sliderTimeout = setTimeout( 'sliderAutoplay()', 3000 );
}
</script>
<?php require('footer.php');
