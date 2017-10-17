</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php if(is_front_page()){ ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mainpage.js"></script>


<?php } ?>
<?php if(is_page("music")){ ?>
"<span class='zzz'></span>";
<?php } ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/member.js"></script>

<?php get_footer(); ?>

</body>
</html>