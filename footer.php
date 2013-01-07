        </div>

        <footer id="footer" class="twelve columns">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
                <li><a href="http://www.kevingomez.fr/a-propos">A propos</a></li>
                <li><a href="http://www.kevingomez.fr/contact">Contact</a></li>
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </footer>

        <div id="copyright" class="twelve columns">
            <p>Le code du <a href="https://github.com/vjousse/wp-vjousse">template Wordpress est disponible sur Github</a>.</p>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>
