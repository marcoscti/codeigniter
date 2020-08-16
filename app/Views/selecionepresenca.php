<h2>Presenças</h2>
<?= form_open('Presenca/buscar') ?>
<select name="iddiadasemana">
    <?php foreach ($dia as $d) : ?>
        <option value="<?= $d['iddiadasemana'] ?>"><?= $d['diadasemana'] ?></option>
    <?php endforeach; ?>
</select>
<select name="idhorario">
    <?php foreach ($horario as $h) : ?>
        <option value="<?= $h['idhorario'] ?>"><?= $h['inicio'] ?> ás <?= $h['fim'] ?></option>
    <?php endforeach; ?>
</select>
<select name="idcurso">
    <?php foreach ($curso as $c) : ?>
        <option value="<?= $c['idcurso'] ?>"><?= $c['nomecurso'] ?></option>
    <?php endforeach; ?>
</select>
<button>Buscar</button>
</form>