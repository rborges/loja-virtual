<ul>
    <?php
        foreach ($this->view->contato as $key => $value) {
        ?>
        <li><strong> <?= $key ?>:</strong><?= $value ?></li>
        <?php
    }
    ?>
</ul>