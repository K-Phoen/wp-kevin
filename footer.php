        </div>

        <footer id="footer" class="twelve columns">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
                <li><a href="http://www.kevingomez.fr/">A propos</a></li>
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </footer>

        <div id="copyright" class="twelve columns">
            <p>Le code du <a href="https://github.com/K-Phoen/wp-kevin">theme Wordpress est disponible sur Github</a>.</p>
        </div>
    </div>
<?php wp_footer(); ?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2296753-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
