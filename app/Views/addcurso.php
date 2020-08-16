<h2>Adicionar Curso</h2>
<h2>Dia</h2>

<?= form_open('Aluno/setCursoAluno');
?>
<input type="hidden" name="aluno_idaluno" value="<?= $idaluno ?>">
<?php foreach ($dia as $d) :
?>
    <input type="radio" name="diadasemana_iddiadasemana" value="<?= $d['iddiadasemana'] ?>"><?= $d['diadasemana'] ?>
<?php
endforeach;
?>
<h2>Horario</h2>
<?php
foreach ($horario as $h) :
?>
    <input type="radio" name="horario_idhorario" value="<?= $h['idhorario'] ?>"><?= $h['inicio'] ?> as <?= $h['fim'] ?>
<?php
endforeach;
?>
<h2>Escolha o Curso</h2>
<select name="curso_idcurso">
    <option disabled selected>Selecione</option>
    <?php
    foreach ($curso as $x) :
    ?>
        <option value="<?= $x['idcurso'] ?>"><?= $x['nomecurso'] ?></option>
    <?php
    endforeach;
    ?>
</select>
<button>Adicionar</button>
</form>