<table id="table-list" class = "table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (count($this->view->people) > 0) {
            foreach ($this->view->people as $key => $person) {
                ?>
                <tr>
                    <td class="td_id"><?php echo $person['id_pessoa'] ?></td>
                    <td data-nome="<?php echo $person['nome'] ?>"><?php echo $person['nome'] ?></td>
                    <td data-email="<?= $person['email'] ?>"> <?= $person['email'] ?></td>
                    <td><a  class="edit" data-toggle="modal" data-target="#modal-form" data-id="<?= $person['id_pessoa'] ?>" ><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a class="delete" data-id="<?= $person['id_pessoa'] ?>"> <span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
} else {
    echo '<hr><h4>Não há registros para listagem</h4><br/><hr> ';
}
?>