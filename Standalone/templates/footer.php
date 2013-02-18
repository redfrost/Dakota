<footer id="content-info" role="contentinfo">

<div class="footer-menubar">
<div class="container">	 
  <?php dynamic_sidebar('sidebar-footer'); ?>
</div>
</div>

<div class="footer-info">
<div class="container">	 
  <ul class="site_copyright">
  <li class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
  <li class="creator"><a href="#">Designed by Redfrost</a></li>
  </ul>
    <!-- Scroll to top -->
	<p id="back-top"><a href="#top"><span></span>Back to Top</a></p>
</div>
</div>

</footer>
    
<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>



	