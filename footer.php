<?php
/**
 * Default Footer Template
 *
 */
?>

    <section class="newsletter" id="form">
        <div class="row">
            <div class="small-6 small-centered large-centered columns">

                <?php
                if($_GET['success'] == 1){
                   echo "<div class=\"form-msg success\">Congratulations!</div>";
               }
                if($_GET['success'] == -1){
                   echo "<div class=\"form-msg error\">Sorry, try it again!</div>";
               }
                ?>
                    <h3>Subscribe to our newsletter</h3>
                    <p>Stay tuned...</p>
                    <hr>
                    <br>
                    <form method="post" action="<?php bloginfo('template_directory')?>/mailer.php">
                        <input type="email" name="email" id="email" placeholder="Enter your email...">
                        <input class="button secondary" type="submit" value="Submit - RedAndWhite">
                        <!--<a class="expanded button" href="#">Submit - RedAndWhite</a>-->
                    </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="row">
            <div class="column small-12 medium-3">
                <p>Copyright &copy; <small><a href="http://crvenazvezdafk.com/en"><span>Red</span></a>AndWhite</small></p>
            </div>
            <div class="column small-12 medium-9">
                <?php h5bs_footer_nav(); ?>
                    <!--<ul class="menu align-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>-->
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

        <?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

            <!-- Google Universal Analytics -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
                ga('create', '<?php echo $analytics_id; ?>', 'auto');
                ga('send', 'pageview');
            </script>
            <?php endif; ?>
                </body>

                </html>
