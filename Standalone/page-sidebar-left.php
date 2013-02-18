<?php
/*
Template Name: Sidebar Left
*/
?>

<style type="text/css">
@media (min-width: 768px){
#main.span8, #main.span9 {
    border-left: 1px dotted #CCCCCC;
    border-right: 0 none;
    padding-left: 19px !important;
    padding-right: 0 !important;
}

/* Sidebar Left */
.page-template-page-sidebar-left-php #sidebar, .float-left  { float:left; padding-left: 0px; }
.page-template-page-sidebar-left-php #main,    .float-right { float:right; }

}
</style>


<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>


