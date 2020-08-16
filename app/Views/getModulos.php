<?php
if(!empty($curso)):
?>
<a href="#">Adicionar</a>
<h2>Curso: <?=$curso[0]['nomecurso']?></h2>
<h3>Carga Horária: <?=$curso[0]['cargahoraria']?> horas</h3>
<table>
    <thead>
        <th>#</th>
        <th>Módulo</th>
        <th>Carga Horária</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php 
        foreach($curso as $c):
        ?>
        <tr>
            <td><?=$c['idmodulo']?></td>
            <td><?=$c['nomemodulo']?></td>
            <td><?=$c['cargahorariamodulo']?></td>
            <td><a href="#">Editar</a></td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<?php
else:
    echo "O Curso não possui módulos";
endif;
?>