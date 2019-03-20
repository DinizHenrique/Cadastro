$('#cep').blur(function (e) {
    var cep = $('#cep').val();
    var url = "https://viacep.com.br/ws/" + cep + "/json/";
    var validacep = /^[0-9]{5}-?[0-9]{3}$/;

    if (validacep.test(cep)) {
        $('#mensagem').hide();
        var retorno = pesquisarCEP(url);
    } else {
        $('#mensagem').show();
        $('#mensagem p').html("CEP inválido");
    }
});

function pesquisarCEP(endereco) {
    $.ajax({
        type: "GET",
        url: endereco,
        async: false
    }).done(function (data) {
        //console.log(data);
        $('#bairro').val(data.bairro);
        $('#endereco').val(data.logradouro);
        $('#cidade').val(data.localidade);
        $('#estado').val(data.uf);


    }).fail(function () {
        console.log("Erro");
    });

};

