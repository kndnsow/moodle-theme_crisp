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

require_once($CFG->dirroot.'/calendar/lib.php');
$html = theme_crisp_get_html_for_settings($OUTPUT, $PAGE);
global $DB, $USER;
if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
?>
<?php require('header.php'); ?>    

<div id="show-admin">
	<a class="admin-sets" href="#">
		<span></span>
	</a>
	<div class="adminset">  
	<?php if ($hassidepre) { ?>
		<?php echo $OUTPUT->blocks_for_region('side-pre') ?>
	<?php 
}
?>
	</div>
</div>
	
<div id="page-content" class="row-fluid">
	<div class="row-fluid">
		<section id="region-main" class="span12 pull-right">
			<!-- Necessary HTML -->
			<div class="row-fluid">
				<div class="span12">
					<div id="lemmon-slider">
						<div id="slider3" class="slider">
							<ul>
								<li><div>
								<?php 
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
				</div> 
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
			<div class="bodydetails">
				<div class="row-fluid">
					<div class="span8">
						<div class="shortnote">
							<?php
$pluginname = 'theme_crisp';
$fieldname = 'picture1';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name= ?', array($name, $fieldname));
if (!empty($body->value)) {
?>
              <div class="welcomemsg"><img src="<?php echo $body->value; ?>"/></div>
              <?php
} else {
?>
              <div class="welcomemsg"><img src="<?php echo $CFG->wwwroot. '/theme/'. $CFG->theme. '/pix/titled.png';?>"/></div>
              <?php
}
?>
								<div class="bodytexts">
									<div class="forsupport">
										<div class="icons">
											<?php  // For the icon.
$pluginname = 'theme_crisp';
$fieldname = 'pic1';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
											<a href="<?php echo $CFG->wwwroot.'/blog/index.php?userid='.$USER->id;?>">
											<img class="pics" src="<?php echo $body->value; ?>"/></a>
											<?php
} else {
?>
											<a href="<?php echo $CFG->wwwroot.'/blog/index.php?userid='.$USER->id;?>">
											<img class="pics" src="<?php echo $CFG->wwwroot. '/theme/'. $CFG->theme. '/pix/attach.png'; ?>"/></a>
											<?php
}
?>
										</div>
										<div class="heads">
<?php
$pluginname = 'theme_crisp';// For the heading.
$fieldname = 'supportpara';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name= ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
											<p style="color: #088a4a; padding-top: 6px; font-size: 17px;"><b><?php echo $body->value; ?></b></p>
											<?php
} else {
?>
											<p style="color: #088a4a; padding-top: 6px; font-size: 17px;"><b><?php echo 'Support'; ?></b></p>
											<?php
}
?>
										</div>
										<div class="texts">
<?php
$pluginname = 'theme_crisp';// For the text.
$fieldname = 'supportparatext';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name= ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
    $str = $body->value;
} else {
    $str = get_string('separateandconnectedinfo');
}
$sstr = substr($str, 0, 165) . '...';
?>
											<p><?php echo $sstr; ?></p>
										</div>
									</div> <!-- end of forsupport -->
									<div class="forcourses">
										<div class="icons">
<?php
$pluginname = 'theme_crisp';// For the icon.
$fieldname = 'pic2';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
											<a href="<?php echo $CFG->wwwroot.'/course/index.php';?>"><img class="pics" src="<?php echo $body->value; ?>"/></a>
											<?php
} else {
?>
											<a href="<?php echo $CFG->wwwroot.'/course/index.php';?>">
											<img class="pics" src="<?php echo $CFG->wwwroot. '/theme/'. $CFG->theme. '/pix/course.png'; ?>"/></a>
											<?php
}
?>
										</div>
									<div class="heads">
										<?php  // For the heading.
$pluginname = 'theme_crisp';
$fieldname = 'coursespara';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
										<p style="color: #088a4a; padding-top: 6px; font-size: 17px;"><b><?php echo $body->value; ?></b></p>
										<?php
} else {
?>
                    <p style="color: #088a4a; padding-top: 6px; font-size: 17px;"><b><?php echo 'Course'; ?></b></p>
                    <?php
}
?>
									</div>
									<div class="texts">
										<?php  // For the text.
$pluginname = 'theme_crisp';
$fieldname = 'coursesparatext';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
    $str = $body->value;
} else {
    $str = get_string('separateandconnectedinfo');
}
$sstr = substr($str, 0, 165) . '...';
?>
										<p><?php echo $sstr; ?></p>
									</div>
								</div>  <!-- end of forcourses -->
								<div class="forforum">
									<div class="icons">
<?php
$pluginname = 'theme_crisp';// For icon.
$fieldname = 'pic3';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
										<a href="<?php echo $CFG->wwwroot.'/mod/forum/user.php?id='.$USER->id;?>">
										<img class="pics" src="<?php echo $body->value; ?>"/></a>
										<?php
} else {
?>
                    <a href="<?php echo $CFG->wwwroot.'/mod/forum/user.php?id='.$USER->id;?>">
                    <img class="pics" src="<?php echo $CFG->wwwroot. '/theme/'. $CFG->theme. '/pix/forum.png'; ?>"/></a>
                    <?php
}
?>
									</div>
									<div class="heads">
<?php
// For the heading.
$pluginname = 'theme_crisp';
$fieldname = 'forumpara';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
										<p style="color: #088a4a; padding-top: 6px; font-size: 17px;"><b><?php echo $body->value; ?></b></p>
<?php
} else {
?>
                    <p style="color: #088a4a; padding-top: 6px; font-size: 17px;"><b><?php echo 'Forum'; ?></b></p>
<?php
}
?>
									</div>
									<div class="texts">
<?php
// For the text.
$pluginname = 'theme_crisp';
$fieldname = 'forumparatext';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
    $str = $body->value;
} else {
    $str = get_string('separateandconnectedinfo');
}
$sstr = substr($str, 0, 165) . '...';
?>
										<p><?php echo $sstr; ?></p>
									</div>
								</div> <!-- end of forforum -->
							</div>
							<div class="quotations">
                <div class="quoteshead">
                <?php 
$pluginname = 'theme_crisp';
$fieldname = 'quoteheading';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
                <?php echo $body->value; ?>
                <?php
} else {
?>
                <?php echo "The Word on the Street"; ?>
                <?php
}
?>
                </div>
                <div class="quote">
                <?php 
$pluginname = 'theme_crisp';
$fieldname = 'quoteheadingtext';
$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
if (!empty($body->value)) {
?>
                <blockquote><p>"<?php echo $body->value; ?></p>"</blockquote>
                <?php
} else {
?>
                <blockquote><p>"<?php echo get_string('separateandconnectedinfo'); ?>"</p></blockquote> 
                <?php
}
?> 
                </div> <!-- end of quote -->
							</div> <!-- end of quotations -->
						</div> <!-- end of shortnote -->
					</div> <!-- end of span8 cust -->
							<!-- FOR UPCOMING EVENTS & CALENDAR -->	
					<div class="span4" style="margin-left: 0;">
						<div class="dateandevents">
							<div class="row-fluid">
								<div class="span12">
									<div class="upcomingevents">
										<div class="event"><b><?php echo "UPCOMING EVENTS"; ?></b></div>
										<?php
$array = array();
$course = $DB->get_records_sql('select id from {course}');
foreach ($course as $key => $courses) {
    $array[] = $courses->id;
}
$defaultlookahead = CALENDAR_DEFAULT_UPCOMING_LOOKAHEAD;
if (isset($CFG->calendar_lookahead)) {
    $defaultlookahead = intval($CFG->calendar_lookahead);
}
$lookahead = get_user_preferences('calendar_lookahead', $defaultlookahead);
$defaultmaxevents = CALENDAR_DEFAULT_UPCOMING_MAXEVENTS;
if (isset($CFG->calendar_maxevents)) {
    $defaultmaxevents = intval($CFG->calendar_maxevents);
}
$maxevents = get_user_preferences('calendar_maxevents', $defaultmaxevents);
$events = calendar_get_upcoming($array, '', $USER->id, $lookahead, $maxevents);
foreach ($events as $upcomingevents) {
    $date = date("F j", (int)$upcomingevents->timestart).'-'.
    date("j,Y", (int)$upcomingevents->timestart + (int)$upcomingevents->timeduration);
?>
										<p><?php echo $upcomingevents->name;?><br><?php echo $upcomingevents->description;?><br><?php echo $date;?></p>
										<?php
}
?>
									</div> <!-- end of upcomingevents -->
								</div> <!-- end of span12 --> 
								<div class="span12">
									<div class="calendar">
										<?php
$calm = optional_param( 'cal_m', 0, PARAM_INT );
$caly = optional_param( 'cal_y', 0, PARAM_INT );
$calendar = calendar_get_mini(array(), '', $USER->id, $calm, $caly, 'frontpage', 1);
echo $calendar;
?>
									</div> <!-- end of calendar -->
								</div> <!-- end of span12 --> 
							</div> <!-- end of row-fluid -->
						</div> <!-- end of dateandevents -->
					</div> <!-- end of span4 -->
				<div>  <!-- end of row-fluid div cust -->
			</div> <!-- end of bodydetails -->
			<!-- FOR GROUPS -->
			<div class="row-fluid" style="margin: 0 auto;">
				<div class="span12" style="width: 100%;">
					<div class="forgroups">
						<div class="row-fluid"><div class="span12"><div class="group">Course Category</div></div></div>  <!-- HEADING -->
						<div id="eachgroup-content2" class="row-fluid">
              <?php
$groups = $DB->get_records_sql('select mcat.id,mcat.name,mcat.description from {course_categories} mcat');
if (isset($groups) && !empty($groups)) {
    foreach ($groups as $groupscat) {
?>
                  <div id="<?php echo $groupscat->id; ?>" class="span3 forgroup">
                    <div class="images">
<?php
        // For the icon.
        $pluginname = 'theme_crisp';
        $fieldname = 'img1';
        $body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
            where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
        if (!empty($body->value)) {
?>
               <img class="pics" src="<?php echo $body->value; ?>"/>
<?php
        } else {
?>
               <img class="pics" src="<?php echo $CFG->wwwroot. '/theme/'. $CFG->theme. '/img/publicdomainpictures.jpg'; ?>"/>
<?php
        }
?>
                    </div>
                    <div class="headings">
                      <p><b><?php echo $groupscat->name; ?></b></p>
                    </div>
                    <div class="textings">
                      <p><?php echo $groupscat->description; ?></p>
                    </div>
                    <a class="viewbtn" href="<?php echo $CFG->wwwroot.'/course/index.php?categoryid='.$groupscat->id;?>">view</a>
                  </div>
                <?php
    }
    // End of foreach().
}
    // End of if().
?>
						<div> <!-- end of for eachgroup-content2 -->
					</div> <!-- end of forgroups -->
				</div> <!-- end of span12 -->
			</div>  <!-- end of row-fluid -->
			<div id="bodymaincontent" class="row-fluid">
			<?php
echo $OUTPUT->main_content();
?>
			</div>
		</section>
	</div>
</div>
<?php require('footer.php');
