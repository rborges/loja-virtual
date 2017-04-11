$(document).ready(function () {

    triggers();
    
    function triggers() {
        /*Funções que necessitam de algum evento no frontend para que sejam chamadas*/

        /*Evento para pegar o id_pessoa na tabela*/
        $('.edit').on('click', function (event) {
            
            var id = $(this).data('id');

            var nome = $(this).closest('tr').find('td[data-nome]').data('nome');
            var email = $(this).closest('tr').find('td[data-email]').data('email');

            $('input[type="hidden"][name="id"]').val(id);
            $('input[type="text"][name="nome"]').val(nome);
            $('input[type="email"][name="email"]').val(email);
        });
    }

});
        