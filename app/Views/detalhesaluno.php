<h2>Detalhes</h2>
<?php
//print_r($curso[0]);
?>
<h3><?=$curso[0]['nomealuno']?></h3>
<p>
Código do Aluno: <?=$curso[0]['idaluno']?></br>    
Situação: <?=$curso[0]['status']? "Ativo":"Inativo"?></br>
Data Início: <?=$curso[0]['datainicio']?></br>
</p>
<table>
    <thead>
        <th>Curso</th>
        <th>Carga</th>
        <th>Horário</th>
        <th>Dia</th>
        <th>Ações</th>
    </thead>

<?php foreach($curso as $c):
?>
<tr>
    <td><?=$c['nomecurso']?></td>
    <td><?=$c['cargahoraria']?></td>
    <td><?=$c['inicio']?> ás <?=$c['fim']?></td>
    <td><?=$c['diadasemana']?></td>
    <td><a href="#">Editar</a></td>
</tr>

<?php
endforeach;
?>
</table>