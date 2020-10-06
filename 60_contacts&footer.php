<section id="contacts" class="section">

    <!-- CONTACTS--TITLE --------------->

    <div class="section-header container">
        <h2 class="section-header__title">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            Susisiekime
        </h2>
        <p class="section-header__paragraph">
            Užpildykite formą, ir mes Jums atsakysime per 8 darbo valandas
        </p>
    </div>


    <form class="contact-form container" action="contacts&footer.php" method="post">

        <div class="contact-form__flex-upper">
            <div>
                <label for="vardas">Vardas</label><br>
                <input class="contact-form__flex-upper__field" type="text" id="vardas" name="vardas">
            </div>
            <div>
                <label for="pavarde">Pavardė</label><br>
                <input class="contact-form__flex-upper__field" type="text" id="pavarde" name="pavarde">
            </div>
        </div>

        <div>
            <label for="firma">Firma</label><br>
            <input class="contact-form__middle__field" type="text" id="firma" name="firma">
        </div>

        <div class="contact-form__flex-lower">
            <div>
                <label for="telefonas">Telefonas</label><br>
                <input class="contact-form__flex-lower__field" type="phone" id="telefonas" name="telefonas">
            </div>
            <div>
                <label for="epastas">El.paštas</label><br>
                <input class="contact-form__flex-lower__field" type="email" id="elpastas" name="elpastas">
            </div>
        </div>

        <div>
            <label for="zinute">Jūsų žinutė</label><br>
            <textarea class="contact-form__bottom__field" type="text" id="zinute" name="zinute" placeholder="Parašykite, kas Jums svarbu"></textarea>
        </div>


    </form>
</section>

<!-- FOOTER --------------->
<footer>
    <div class="container footer__flex">

        <div>
            <h4>
                Aški forma, UAB &copy;
            </h4>
            <h4>
                <i class="fas fa-map-pin"></i>
                &ensp; Gedimino pr. 1, Vilnius, 0000
                
                <!-- &emsp; | &emsp; -->
                <!-- <a href="https://goo.gl/maps/yWpWp57cdzfoLdo59" target="blank">
                Mus rasite: &emsp;
                <i class="fas fa-map-marked-alt"></i>
            </a>
            &emsp; | &emsp;
            <a href="contacts.php">
                Palikite savo kontaktus: &emsp;
                <i class="fas fa-id-card"></i>
            </a> -->

            </h4>
            <h4>
                <a href="#">
                    <i class="fas fa-phone-volume"> </i>
                    &ensp; +370 5 222 2222
                </a>
            </h4>
            <h4>
                <a href="#">
                    <i class="fas fa-at"> </i>
                    &nbsp; info@aiskiforma.lt
                </a>
            </h4>
        </div>

        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2306.336279212533!2d25.283789815340228!3d54.686109780281576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9410c8fde733%3A0x358886f6f7b5cd49!2sGedimino%20pr.%201%2C%20Vilnius%2001103!5e0!3m2!1slt!2slt!4v1601927832677!5m2!1slt!2slt" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>



</footer>



<script src="functions.js"></script>
</body>

</html>