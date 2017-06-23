
<!--
footer
-->
<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="date"></div>
            </div>
            <div class="col-md-2">
                <div id="hours"></div>
            </div>
            <div class="col-md-6">
                <div id="minutes" class="d-inline"></div>
                <div id="seconde" class="d-inline"></div>
                <div id="dixiem" class="d-inline"></div>
            </div>
        </div>
        <div class="social">
            <span class="d-inline">Nous suivre</span>
            <img src="<?php bloginfo("template_directory"); ?>/img/gplus.png" alt="google plus" class="d-inline">
            <img src="<?php bloginfo("template_directory"); ?>/img/twitter.png" alt="twitter" class="d-inline">
            <img src="<?php bloginfo("template_directory"); ?>/img/youtube.png" alt="youtube" class="d-inline">
            <img src="<?php bloginfo("template_directory"); ?>/img/facebook.png" alt="facebook" class="d-inline">
            <img src="<?php bloginfo("template_directory"); ?>/img/facebook.png" alt="facebook" class="d-inline">
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/app.js"></script>


</body>

</html>