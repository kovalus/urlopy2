<div>
    <h1>Witaj użytkowniku <?= $this->userData['forename'] . ' ' . $this->userData['surname']; ?> [<?= ($this->userData['sex'] == 'male') ? 'mężczyzna' : 'kobieta'; ?>]</h1>
    <p><a href="<?= URL_BASE ?>logout">Wyloguj się</a><br></p>
    <div>
        <p><a href="<?= URL_BASE ?>leave">Wniosek urlopowy</a><br></p>
    </div>
</div>