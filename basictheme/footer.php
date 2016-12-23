<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p><?php bloginfo(); //default is 'name' ?> &copy; Copyright <?php echo date("F Y") //displays date dynamically?></p>
      </div>
    </div>
  </div>
</footer>
<!--jquery-->
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<?php wp_footer();?><!--adds the top admin menu-->
</body>
</html>
