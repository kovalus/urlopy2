<div>
    <h1>Wniosek urlopowy</h1>


    <form action="<?= URL_BASE ?>leave/save" enctype="multipart/form-data">
        <div><label for="leave_type">Typ wniosku: </label>
            <select id="leave_type" name="leave_type" required>
                <option value="">...</option>
                <?php foreach ($this->leaveType as $k => $v) { ?>
                    <option value="<?= $k; ?>"><?= $v; ?></option>
                <?php } ?>

            </select>
        </div>
        <div><label for="date_from">Data rozpoczęcia: </label><input type="text" id="date_from" name="date_from" placeholder="2021-06-11" required></div>
        <div><label for="date_to">Data zakończenia: </label><input type="text" id="date_to" name="date_to" placeholder="2021-06-11" required></div>
        <div><input type="file" name="scan" accept=".pdf, image/jpeg" required></div>
        <div><label for="description">Komentarz: </label><textarea id="description" name="description"></textarea></div>
        <div>
            <button type="submit">Zgłoś wniosek</button>
        </div>
    </form>

</div>