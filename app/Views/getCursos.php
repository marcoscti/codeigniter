<a href="<?=base_url('Curso/novo')?>">Novo Curso</a>
<h1>Cursos</h1>
<?php
if(count($curso)>0):
?>
<table>
    <thead>
        <th>#</th>
        <th>Curso</th>
        <th>Carga Horária</th>
        <th>Ações</th>
    </thead>
    <?php
    foreach($curso as $c):
    ?>
    <tr>
        <td><?=$c['idcurso']?></td>
        <td><?=$c['nomecurso']?></td>
        <td><?=$c['cargahoraria']?></td>
        <td>
            <a href="#">Editar</a>
            <a href=<?=base_url("Modulo/modulo/".$c['idcurso'])?>">Módulos</a>
            <a href="#">Detalhes</a>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<?php
else:
    echo "Nenhum Curso Encontrado!";
endif;
?>