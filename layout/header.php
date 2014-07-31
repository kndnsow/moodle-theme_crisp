<?php
$PAGE->requires->jquery();
$PAGE->requires->jquery_plugin('ui');
$PAGE->requires->jquery_plugin('ui-css');

$PAGE->requires->js('/theme/'.$CFG->theme.'/fancyBox/source/jquery.fancybox.pack.js');
$PAGE->requires->js('/theme/'.$CFG->theme.'/fancyBox/source/jquery.fancybox.js');
$PAGE->requires->js('/theme/'.$CFG->theme.'/lemmon-Lemmon-Slider/lemmon-slider.js');
$PAGE->requires->js('/theme/'.$CFG->theme.'/javascript/crispy.js');

$PAGE->requires->css('/theme/'.$CFG->theme.'/fancyBox/source/jquery.fancybox.css');


global $CFG,$USER;
$html = theme_crisp_get_html_for_settings($OUTPUT, $PAGE);
echo $OUTPUT->doctype()
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
	<title><?php echo $OUTPUT->page_title(); ?></title>
	<link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
	<?php echo $OUTPUT->standard_head_html() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html(); ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
  <nav role="navigation" class="navbar-inner">
    <div class="container-fluid">
    	<?php if (!isloggedin()) { ?>
      <a class="brand" href="<?php echo $CFG->wwwroot. '/login/index.php';?>">Log in</a>
      <?php } ?>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse collapse">
        <?php echo $OUTPUT->custom_menu(); ?>
        <ul class="nav pull-right">
          <li><?php echo $OUTPUT->page_heading_menu();
              include('profileblock.php');?>
          </li>
          <li class="navbar-text"></li>
        </ul>
      </div>
    </div>
  </nav>
</header> 
<div id="page" class="container-fluid">
  <header id="page-header" class="clearfix">
    <div class="head-details">
      <div class="row-fluid" style="margin: 0 auto;">
        <div class="span3">
          <h1>
          	<a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->fullname; ?></a>
          </h1>
        </div> <!-- end of span3 -->
        <div class="span9">
          <div class="shadow" role="navigation">
            <ul id="main-navigation" class="menulist">
              <li id="1" class="list">
                <a id= "children1" class="main" href="<?php echo $CFG->wwwroot;?>">HOME</a>
              </li>
              <li id="2" class="list">
                <a id= "children3" class="main" href="<?php echo $CFG->wwwroot.'/mod/forum/user.php?id='.$USER->id;?>">FORUM</a>
              </li>
              <li id="3" class="list">
                <a id= "children3" class="main" href="#">SUPPORT</a>
                <ul id="vistachild3" class="dropdown">
                  <li><a href="<?php echo $CFG->wwwroot.'/blog/index.php?userid='.$USER->id;?>">BLOG</a></li>
                </ul>
              </li>
              <li id="4" class="list">
                <a id= "children4" class="main" href="<?php echo $CFG->wwwroot.'/course/index.php';?>">COURSES</a>
              </li>
            </ul>
          </div>
        </div> <!-- end of span9 -->
      </div> <!-- end of row-fluid -->
    </div> <!-- end of head-details -->
    <div id="course-header">
        <?php echo $OUTPUT->course_header(); ?>
    </div>
  </header>
</div>


