<div>
    <h1>Formularz rejestracji w systemie zgłaszania urlopów</h1>

    <form action="<?= URL_BASE ?>register/save" method="POST">
        <div><input type="text" name="login" autocomplete="FALSE" placeholder="login" required maxlength="20"></div>
        <div><input type="password" name="passwd" placeholder="hasło" required maxlength="20"></div>
        <div><input type="text" name="forename" placeholder="imię" required maxlength="20"></div>
        <div><input type="text" name="surname" placeholder="nazwisko" required maxlength="20"></div>
        <div>
            kobieta: <input type="radio" name="sex" value="female" required>
            mężczyzna: <input type="radio" name="sex" value="male" required>
        </div>
        <div><button type="submit">Zarejestruj się</button></div>
        <div><a href="<?= URL_BASE ?>login">Formularz logowania</a></div>
    </form>
</div>