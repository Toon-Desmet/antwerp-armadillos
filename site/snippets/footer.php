    <?php
    $socials = $site->social_links()->toStructure();
    ?>

    <footer class="footer">

        <div class="footer--element">
            <p>Copyright © <?= e(date("Y") === '2022', '2022', '2022-' . date("Y")) ?> Antwerp Armadillos Lacrosse | Credits</p>
        </div>
        <div class="footer--element footer--link-element">
            <h4>CONTACT US:</h4>
            <p>antwerparmadillos@gmail.com</p>

            <div>
                <?php foreach ($socials as $social) : ?>
                    <a href="<?= $social->links() ?>" target="_blank">
                        <i class="fab fa-<?= strtolower($social->social()) ?>"></i>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        <div class="footer--element footer--design-element">
            <p>Webdesign by</p>
            <img src="assets/images/SAM.svg" alt="logo of SAM">
        </div>
    </footer>
    </body>
    <script src="assets/js/index.js" crossorigin="anonymous"></script>

    </html>