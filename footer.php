  <?php roots_footer_before(); ?>
    <footer id="content-info" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="contentinfo">
      <?php roots_footer_inside(); ?>
      <div class="container">
        <?php dynamic_sidebar('roots-footer'); ?>
        <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>        
      </div>      
      <div class="js-footer logo letter">JS</div>      
    </footer>
    <?php roots_footer_after(); ?>
  </div><!-- /#wrap -->

<?php wp_footer(); ?>
<?php roots_footer(); ?>

  <!--[if lt IE 7]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  try{
  var pageTracker = _gat._getTracker("UA-1264252-8");
  pageTracker._trackPageview();
} catch(err) {}
</script>
</body>
</html>
