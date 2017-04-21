$(document).ready(function () {

    triggers();

    function triggers() {
        /*Funções que necessitam de algum evento no frontend para que sejam chamadas*/

        /*Evento para pegar o id_pessoa na tabela*/
        $('.edit').on('click', function (event) {

            event.preventDefault();

            var id = $(this).data('id');
            $('form').each(function () {

                if ($(this).attr('id') !== "login-nav") {
                    formulario = $(this);
                }
            });

            var nome = $(this).closest('tr').find('td[data-nome]').data('nome');
            var email = $(this).closest('tr').find('td[data-email]').data('email');

            $('input[type="hidden"][name="id"]').val(id);
            $('input[type="text"][name="nome"]').val(nome);
            $('input[type="email"][name="email"]').val(email);

            editar(formulario);
        });
    }
    function editar(formulario) {

        formulario.submit(function () {

            var dados = formulario.serialize();
            
            formulario.submit(function () {
                return false;
            });

            $.ajax({
                type: 'POST',
                url: formulario.attr('id') + "_editar",
                data: dados,
                beforeSend: function (xhr) {
                    var teste = confirm("Deseja editar este registro?");
                    if (teste === true) {
                        return true;
                    } else {
                        xhr.abort();
                    }
                },
                success: function () {
                    alert("Registro editado com sucesso!");
                    // location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            return false;
        });
    }

});
        