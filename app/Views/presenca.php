<?php
if (!empty($curso)) :
    echo form_open('Presenca/setPresenca');
?>
    <input type="hidden" name="curso_idcurso" value="<?= $curso[0]['idcurso'] ?>">
    <input type="hidden" name="instrutor_idinstrutor" value="1">
    <input type="hidden" name="diadasemana_iddiadasemana" value="<?= $curso[0]['diadasemana_iddiadasemana'] ?>">
    <input type="hidden" name="horario_idhorario" value="<?= $curso[0]['horario_idhorario'] ?>">
    <h2>Chamada</h2>
    <table>
        <thead>
            <th>Aluno</th>
            <th>Presença</th>
        </thead>
        <tbody>
            <?php
            foreach ($curso as $c) :
            ?>
                <tr>
                    <td>
                        <?=$c['nomealuno']?>
                        <input type="hidden" name="aluno_idaluno[]" value="<?= $c['idaluno'] ?>">
                    </td>
                    <td>
                        <input type="checkbox" value="P" name="situacao[]">P
                        <input type="checkbox" value="F" name="situacao[]" checked>F
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button>Confirmar</button>
    </form>
<?php
else :
?>
    <script>
        alert('Não foram encontrados alunos nos parâmetros selecionados!');
        window.history.back();
    </script>
<?php
endif;
?>