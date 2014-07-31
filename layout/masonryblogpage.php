<?php

// Get the HTML for the settings bits.
$html = theme_crisp_get_html_for_settings($OUTPUT, $PAGE);
global $DB,$CFG;
$left = (!right_to_left()); 
?>
<?php require('header.php');  ?>

<body>
<div id="page-content" class="row-fluid">
  <section id="region-main" class="span12">
    <?php
			echo $OUTPUT->main_content();
    ?>
  </section>
</div>

<?php require('footer.php'); ?>
