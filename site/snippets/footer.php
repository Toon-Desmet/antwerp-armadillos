    <?php
    $social_links = $site->social_links()->toStructure();
    $facebook = $social_links->findBy('social', 'Facebook');
    $instagram = $social_links->findBy('social', 'Instagram');
    ?>

    <footer class="footer">

        <div class="footer--element">
            <p>Copyright © 2021 Antwerp Armadillos Lacrosse | Credits</p>
        </div>
        <div class="footer--element footer--link-element">
            <h4>CONTACT US:</h4>
            <p>antwerparmadillos@gmail.com</p>
            <div>
                <a href="<?= $facebook->links() ?>" target="_blank"> <?= asset('assets/images/Facebook.svg')->read() ?></a>
                <a href="<?= $instagram->links() ?>" target="_blank"> <?= asset('assets/images/instagram.svg')->read() ?> </a>
            </div>
        </div>
        <div class="footer--element footer--design-element">
            <p>Webdesign by</p>
            <img src="assets/images/SAM.png" alt="logo of SAM">
        </div>
    </footer>
    </body>

    </html>