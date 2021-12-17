    <footer class="footer">
        <div class="footer--element">
            <p>Copyright © 2021 Antwerp Armadillos Lacrosse | Credits</p>
        </div>
        <div class="footer--element footer--link-element">
            <h3>CONTACT US:</h3>
            <p>antwerparmadillos@gmail.com</p>
            <div>
                <a href="<?= $site->facebook()->html() ?>" target="_blank"> <?= asset('assets/images/Facebook.svg')->read() ?></a>
                <a href="<?= $site->instagram()->html() ?>" target="_blank"> <?= asset('assets/images/instagram.svg')->read() ?> </a>
            </div>
        </div>
        <div class="footer--element footer--design-element">
            <p>Webdesign by</p>
            <img src="assets/images/SAM.png" alt="logo of SAM">
        </div>
    </footer>
    </body>

    </html>