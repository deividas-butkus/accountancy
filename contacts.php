
<div class="contacts">
    
    <section id="contacts">
        <div class="contacts--header container">
            <h2 class="contacts--header__title">
            <i class="fas fa-file-signature"></i>
                Susisiekime
            </h2>
            <p class="contacts--header__paragraph">
                Užpildykite formą, ir mes Jums paskambinsime per 8 darbo valandas
            </p>
        </div>
    </section>

    <form class="contacts--form container" action="contacts.php" method="post">
        <div class="name-surname">
            <div>
                <label for="vardas">Vardas</label><br>
                <input type="text" id="vardas" name="vardas" placeholder="Vardas">
            </div>
            <div>
                <label for="pavarde">Pavardė</label><br>
                <input type="text" id="pavarde" name="pavarde" placeholder="Pavardė">
            </div>
        </div>
        <div class="telefonas-firma-epastas-zinute">
            <div>
                <label for="telefonas">Telefonas</label><br>
                <input type="phone" id="telefonas" name="telefonas" placeholder="Telefonas">
            </div>

            <div>
                <label for="firma">Firma</label><br>
                <input type="text" id="firma" name="firma" placeholder="Firma">
            </div>

            <div>
                <label for="epastas">El.paštas</label><br>
                <input type="email" id="elpastas" name="elpastas" placeholder="El. paštas">
            </div>

            <div>
                <label for="zinute">Jūsų žinutė</label><br>
                <textarea type="text" id="zinute" name="zinute" placeholder="Žinutė"></textarea>
            </div>
        </div>
    </form>

</div>