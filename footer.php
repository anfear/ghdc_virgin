<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo esc_url(site_url()); ?>"><strong>George</strong> Hannan <span style="font-size: 1.0rem;"> - Home</span></a></h1>
          <!-- <p><a class="site-footer__link" href="#">555.555.5555</a></p> -->
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <!-- <h3 class="headline headline--small">Explore</h3> -->
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo esc_url(site_url('/blog')); ?>">Blog</a></li>
                <li><a href="<?php echo esc_url(site_url('/about')); ?>">About</a></li>
                <!-- <li><a href="#">Programs</a></li> -->
                <!-- <li><a href="#">Events</a></li> -->
                <!-- <li><a href="#">Campuses</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <!-- <h3 class="headline headline--small">Learn</h3> -->
            <nav class="nav-list">
              <ul>
                <!-- <li><a href="#">Legal</a></li> -->
                <li><a href="<?php echo esc_url(site_url('/contact-me')); ?>">Contact</a></li>
                <li><a href="<?php echo esc_url(site_url('/privacy')); ?>">Privacy</a></li>
                <!-- <li><a href="#">Careers</a></li> -->
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Me</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="https://www.linkedin.com/in/georgehannan/" class="social-color-linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://www.facebook.com/GeorgesDigitalSpace/" class="social-color-facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/georgehannan" class="social-color-twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <!-- <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> -->
              <!-- <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
            </ul>
          </nav>
        </div>
      </div>

          <!-- my copyright code starts -->
          <div id="legal" class="site-footer__link" style="text-decoration: none; color: #999">
            <br>
            <p>Developed by & Copyright <sup>&copy;</sup>
            <?php
            $startYear = 2019;
            $thisYear = date('Y');
            if ($startYear == $thisYear) {
              echo $startYear;
            } else {
              echo "{$startYear}&#8211;{$thisYear}";
            } 
            ?>
            &nbsp;George Hannan. All rights reserved.</p>
          </div><!-- #legal -->
          <!-- my copyright code finishes -->

    </div>

  </footer>

<?php wp_footer(); ?>
</body>
</htm