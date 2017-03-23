<table id="table-list" class = "table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
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
                    <td class="td_id"><?php echo $key ?></td>
                    <td data-nome="<?php echo $person ?>"><?php echo $person ?></td>
                    <td><a  class="edit" data-toggle="modal" data-target="#modal-form" id="<?= $key ?>" ><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a class="delete" id="<?= $key ?>"> <span class="glyphicon glyphicon-trash"></span></a></td>
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