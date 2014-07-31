<footer id="page-footer">
	<div class="footermain">
		<div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
    <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
    <?php
    echo $html->footnote;
    echo $OUTPUT->login_info();
    echo $OUTPUT->home_link();
    echo $OUTPUT->standard_footer_html();
    ?>
	</div>   <!-- end of footermain div --> 
</footer>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
