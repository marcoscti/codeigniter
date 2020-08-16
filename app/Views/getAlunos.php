<h2>Alunos</h2>
<a href="<?=base_url('Aluno/novo')?>">Novo</a>
<?php
if(count($aluno)>0):
?>
<table>
    <thead>
        <th>#</th>
        <th>Nome</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($aluno as $a):?>
        <tr>
            <td><?=$a['idaluno']?></td>
            <td><?=$a['nomealuno']?></td>
            <td>
                <a href="<?=base_url('Aluno/curso/'.$a['idaluno'])?>">&#128218;</a>
                <a href="<?=base_url('Aluno/editar/'.$a['idaluno'])?>">&#128221;</a>
                <a href="<?=base_url('Aluno/status/'.$a['idaluno'])?>"><?= $a['status'] ? "&#128077;":"&#9940;";?></a>
                <a href="<?=base_url('Aluno/detalhes/'.$a['idaluno'])?>">&#128270;</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php
else:
    echo "Nenhum Aluno encontrado";
endif;
?>