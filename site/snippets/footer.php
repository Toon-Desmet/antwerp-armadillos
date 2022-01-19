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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </html>