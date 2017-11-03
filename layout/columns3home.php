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
global $DB, $USER, $PAGE;

$crispformatoptions = new stdClass();
$crispformatoptions->noclean = true;
$crispformatoptions->overflowdiv = false;

$hasslider1 = $CFG->wwwroot.'/theme/crisp/img/vintage.jpg';
$hasslider2 = $CFG->wwwroot.'/theme/crisp/img/littlevisuals.jpg';
$hasslider3 = $CFG->wwwroot.'/theme/crisp/img/gratisography.jpg';
$hasslider4 = $CFG->wwwroot.'/theme/crisp/img/millionfreepictures.jpg';
$hasslider5 = $CFG->wwwroot.'/theme/crisp/img/pixabay.jpg';
$hasslider6 = $CFG->wwwroot.'/theme/crisp/img/unsplash.jpg';
$haswelcomemsg = $CFG->wwwroot. '/theme/crisp/pix/titled.png';
$haspic1 = $PAGE->theme->setting_file_url("pic1", "pic1");
if (!empty($haspic1)) {
    $haspic1 = $PAGE->theme->setting_file_url("pic1", "pic1");
} else {
    $haspic1 = $CFG->wwwroot. '/theme/crisp/pix/attach.png';
}
$haspic2 = $PAGE->theme->setting_file_url("pic2", "pic2");
if (!empty($haspic2)) {
    $haspic2 = $PAGE->theme->setting_file_url("pic2", "pic2");
} else {
    $haspic2 = $CFG->wwwroot. '/theme/crisp/pix/course.png';
}
$haspic3 = $PAGE->theme->setting_file_url("pic3", "pic3");
if (!empty($haspic3)) {
    $haspic3 = $PAGE->theme->setting_file_url("pic3", "pic3");
} else {
    $haspic3 = $CFG->wwwroot. '/theme/crisp/pix/forum.png';
}

$hascatimg = $PAGE->theme->setting_file_url("img1", "img1");
if (!empty($hascatimg)) {
    $hascatimg = $PAGE->theme->setting_file_url("img1", "img1");
} else {
    $hascatimg = $CFG->wwwroot. '/theme/crisp/img/publicdomainpictures.jpg';
}
if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
?>
<?php require('header.php'); ?>    

<div id="show-admin">
	<a class="admin-sets">
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
							<ul><?php if (get_config('theme_crisp', 'slidercount') > 0) { 
	    						for ($slidecounts = 1; $slidecounts <= get_config('theme_crisp', 'slidercount'); $slidecounts = $slidecounts + 1) {?>
										<li><div>
										<img src="<?php echo $PAGE->theme->setting_file_url("slidepic".$slidecounts, "slidepic".$slidecounts); ?>" alt=""/>
										</div></li>
									<?php
	    						}
								} else { ?>
									<li><div>
										<img src="<?php echo $hasslider1; ?>" alt=""/>
									</div></li>
									<li><div>
										<img src="<?php echo $hasslider2; ?>" alt=""/>
									</div></li>
									<li><div>
										<img src="<?php echo $hasslider3; ?>" alt=""/>
									</div></li>
									<li><div>
										<img src="<?php echo $hasslider4; ?>" alt=""/>
									</div></li>
									<li><div>
										<img src="<?php echo $hasslider5; ?>" alt=""/>
									</div></li>
									<li><div>
										<img src="<?php echo $hasslider6; ?>" alt=""/>
									</div></li>
								<?php 
								} ?>
							</ul>
						</div>
						<div class="controls">
							<a class="next-page"></a>
							<a class="prev-page"></a>
						</div>
					</div> <!-- end of lemmon slider -->
				</div> 
			</div> 
			
			<div class="bodydetails">
				<div class="row-fluid">
					<div class="span7">
						<div class="shortnote">
							<?php $haswelcome = $PAGE->theme->setting_file_url("picture1", "picture1");
								if (!empty($haswelcome)) { ?>
              			<div class="welcomemsg"><img src="<?php echo $PAGE->theme->setting_file_url("picture1", "picture1"); ?>"/></div>
              				<?php
								} else { ?>
              			<div class="welcomemsg"><img src="<?php echo $haswelcomemsg; ?>"/></div>
              				<?php 
								} ?>
              	
								<div class="bodytexts span12">
									<div class="forsupport span4">
										<div class="icons">
											<a href="<?php echo $CFG->wwwroot.'/blog/index.php?userid='.$USER->id;?>">
											<img class="pics" src="<?php echo $haspic1; ?>"/></a>
										</div>
										<div class="heads">
											<?php
											$pluginname = 'theme_crisp';// For the heading.
											$fieldname = 'supportpara';
											$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
											  where mcp.plugin = ? and mcp.name= ?', array($pluginname, $fieldname));
											if (!empty($body->value)) {
													echo format_text($body->value, "", $crispformatoptions);
											} else {
													echo format_text(get_string('supports', 'cache'), "", $crispformatoptions);
											} ?>
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
											<p><?php echo format_text($sstr, "", $crispformatoptions); ?></p>
										</div>
									</div> <!-- end of forsupport -->
									<div class="forcourses span4">
										<div class="icons">
											<a href="<?php echo $CFG->wwwroot.'/course/index.php';?>"><img class="pics" src="<?php echo $haspic2; ?>"/></a>
										</div>
										<div class="heads">
											<?php  // For the heading.
											$pluginname = 'theme_crisp';
											$fieldname = 'coursespara';
											$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
											  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
											if (!empty($body->value)) {
											 		echo format_text($body->value, "", $crispformatoptions); 
											} else {
													echo format_text(get_string('course', 'calendar'), "", $crispformatoptions);
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
											$sstr = substr($str, 0, 165) . '...'; ?>
											<p><?php echo format_text($sstr, "", $crispformatoptions); ?></p>
										</div>
									</div>  <!-- end of forcourses -->
									<div class="forforum span4">
										<div class="icons">
											<a href="<?php echo $CFG->wwwroot.'/mod/forum/user.php?id='.$USER->id;?>">
											<img class="pics" src="<?php echo $haspic3; ?>"/></a>
										</div>
										<div class="heads">
											<?php
											// For the heading.
											$pluginname = 'theme_crisp';
											$fieldname = 'forumpara';
											$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
											  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
											if (!empty($body->value)) {
													echo format_text($body->value, "", $crispformatoptions); ?></b></p>
											<?php
											} else {
												  echo format_text(get_string('modulenameplural', 'forum'), "", $crispformatoptions);
											} ?>
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
											$sstr = substr($str, 0, 165) . '...'; ?>
											<p><?php echo format_text($sstr, "", $crispformatoptions); ?></p>
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
												echo format_text($body->value, "", $crispformatoptions);
										} else {
  											echo "The Word on the Street";
										} ?>
                	</div>
                	<div class="quote">
										<?php 
										$pluginname = 'theme_crisp';
										$fieldname = 'quoteheadingtext';
										$body = $DB->get_record_sql('select mcp.value from {config_plugins} mcp
										  where mcp.plugin = ? and mcp.name = ?', array($pluginname, $fieldname));
										if (!empty($body->value)) { ?>
                				<blockquote><p>"<?php echo format_text($body->value, "", $crispformatoptions); ?></p>"</blockquote>
                		<?php
										} else {
										?>
                				<blockquote><p>"<?php echo format_text(get_string('separateandconnectedinfo'), "", $crispformatoptions); ?>"</p></blockquote> 
                		<?php
										} ?> 
                	</div> <!-- end of quote -->
								</div> <!-- end of quotations -->
						</div> <!-- end of shortnote -->
					</div> <!-- end of span7 cust -->
					<!-- FOR UPCOMING EVENTS & CALENDAR -->	
					<div class="span5" style="margin-left: 0;">
						<div class="dateandevents">
							<div class="row-fluid">
								<div class="span12">
									<div class="upcomingevents">
										<div class="event"><b><?php echo format_string(get_string('upcomingevents', 'calendar')); ?></b></div>
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

											if ($CFG->version >= 2017102500) {
												$calendar = new calendar_information(0, 0, 0, time());
												$course = get_site();
		    									$courses = calendar_get_default_courses();
		    									$calendar->set_sources($course, $courses, $PAGE->category);
		    									$renderer = $PAGE->get_renderer('core_calendar');
												$events = calendar_get_view($calendar, 'upcoming');
												if (!empty($events)) {
													echo "<ul class='upcomingeventul'>";
													foreach ($events as $upcomingevents) {
														if (isset($upcomingevents->events)) {
															foreach ($upcomingevents->events as $upcomingevent) {
																$date = date("F j", (int)$upcomingevent->timestart).'-'.
															    date("j,Y", (int)$upcomingevent->timestart + (int)$upcomingevent->timeduration);
														    echo "<li>";
														    if (isset($upcomingevent->name)) {
														    	echo "<span class='eventname'>".$upcomingevent->name."</span>";
														    }
														    if (isset($upcomingevent->description) && !empty($upcomingevent->description)) {
														    	echo "<span>".$upcomingevent->description."</span>";
														    }
														    if (isset($date)) {
														    	echo "<span>".$date."</span>";
														    }
														    echo "</li><br>";
															}
														}
													}
													echo "</ul>";
												}
											} else {
												$events = calendar_get_upcoming($array, '', $USER->id, $lookahead, $maxevents);
												if (!empty($events)) {
													echo "<ul class='upcomingeventul'>";
													foreach ($events as $upcomingevents) {
													  $date = date("F j", (int)$upcomingevents->timestart).'-'.
													    date("j,Y", (int)$upcomingevents->timestart + (int)$upcomingevents->timeduration);
													  echo "<li>";
													  if (isset($upcomingevents->name)) {
												    	echo "<span class='eventname'>".$upcomingevents->name."</span>";
													  }
													  if (isset($upcomingevents->description) && !empty($upcomingevents->description)) {
													    	echo "<span>".$upcomingevents->description."</span>";
													  }
													  if (isset($date)) {
												    	echo "<span>".$date."</span>";
												    }
													  echo "</li><br>";
													}
													echo "</ul>";
												}
											} ?>
									</div> <!-- end of upcomingevents -->
								</div> <!-- end of span12 --> 
								<div class="span12">
									<div class="calendar frontpage">
										<?php
										if ($CFG->version >= 2017102500) {
	    									list($data, $template) = calendar_get_view($calendar, 'mini');
	    									echo $renderer->render_from_template($template, $data);
	    								} else {
	    									$calm = optional_param( 'cal_m', 0, PARAM_INT );
											$caly = optional_param( 'cal_y', 0, PARAM_INT );
											$calendar = calendar_get_mini(array(), '', $USER->id, $calm, $caly, 'frontpage', 1);
											echo $calendar;
	    								}
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
						<div class="row-fluid"><div class="span12"><div class="group">
						<?php echo format_string(get_string('coursecategory')); ?></div></div></div>  <!-- HEADING -->
						<div id="eachgroup-content2" class="row-fluid">
              			<?php
							$groups = $DB->get_records_sql('select mcat.id,mcat.name,mcat.description, mcat.visible from {course_categories} mcat');
							if (isset($groups) && !empty($groups)) {
							    foreach ($groups as $groupscat) { ?>
	                 		<div id="<?php echo $groupscat->id; ?>" class="span3 forgroup<?php if ($groupscat->visible == 0) { ?> cathide<?php } ?>">
		                    <div class="images">
		               				<img class="pics" src="<?php echo $hascatimg; ?>"/>
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
   								} // End of foreach().
							} // End of if().
							?>
						<div> <!-- end of for eachgroup-content2 -->
					</div> <!-- end of forgroups -->
				</div> <!-- end of span12 -->
			</div>  <!-- end of row-fluid -->
			<div id="bodymaincontent" class="row-fluid">
				<?php echo $OUTPUT->main_content(); ?>
			</div>
		</section>
	</div>
</div>
<script>
	window.onload = function(){
		// home page slider 
  		$( '#slider3' ).lemmonSlider({ infinite: false });
		sliderAutoplay();
  	}
	// autoplay
	var sliderTimeout = null;
	function sliderAutoplay(){
		$( '#slider3' ).trigger( 'nextSlide' );
		sliderTimeout = setTimeout( 'sliderAutoplay()', 4000 );
	}
</script>
<?php require('footer.php');
