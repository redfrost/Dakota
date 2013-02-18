<?php
/*
Template Name: 3 Column
*/
?>

<style type="text/css">
#threecolumn #main {
    margin-top: 10px;
    margin-left: 230px;
}

@media (max-width: 979px){
	#threecolumn #main { margin-left: 0px; }
}


</style>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
