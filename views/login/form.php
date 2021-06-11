<div>
    <h1>Formularz logowania do systemu zgłaszania urlopów:</h1>

    <form action="<?= URL_BASE ?>login/makelogin" method="POST">
        <div><input type="text" name="login" placeholder="login"></div>
        <div><input type="password" name="passwd" placeholder="haslo"></div>
        <div>
            <button type="submit">Zaloguj się</button>
        </div>
        <div><a href="<?= URL_BASE ?>register">Zarejestruj się</a></div>
    </form>
</div>