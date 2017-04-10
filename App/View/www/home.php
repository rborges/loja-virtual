<section style="margin-top: 50px;">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
</section>
<hr>
<section class = "table-responsive">
    <?php include "home/grid.php"; ?>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="margin-top: 30vh">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Cadastro</h4>
            </div>
            <div class="modal-body">
                <fieldset title="Editar Cadastro">
                    <form method="POST">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="emali" name="email" class="form-control"/>
                            </div>

                        </div>
                    </form>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>

    </div>
</div>
