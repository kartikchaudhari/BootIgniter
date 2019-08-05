<!-- Footer -->
 <footer>
	<nav class="navbar navbar-inverse" style="color:white;padding-top: 15px;">
	  <div class="container-fluid">
	    <p align="center">Designed and Developed by <a href="#">Kartik Chaudhari</p>
	  </div>
	</nav>
 </footer>
<!--./footer -->

<!--  bootstrap javascripts-->
<script type="text/javascript" src="<?php echo base_url(JQUERY); ?>"></script>
<script type="text/javascript" src="<?php echo base_url(BOOTSTRAP_JS); ?>"></script>
<script type="text/javascript">
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>
</body>
</html>
