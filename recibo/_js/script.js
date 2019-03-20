$('#valor_restante').blur(function (e) {
    var restante            = $('#valor_restante').val(),
        entrada             = $('#valor_entrada').val(),
        parcelas            = $('#parcelas').val(),
        total_parcela       = (parseFloat(restante) / parseFloat(parcelas)).toFixed(2),
        valor_total         = (parseFloat(entrada) + parseFloat(restante)).toFixed(2);
    
        $(".parcela").val(total_parcela);   
        $("#valor_total").val(valor_total).toFixed(2);   
    
    
    });

$('#banco').blur(function (e) {
    var banco            = $('#banco').val();
    
        $(".banco").val(banco);   
         
    
    
    });

