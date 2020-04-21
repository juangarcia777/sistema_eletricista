function done(id) {
    swal({
            title: "Deseja Finalizar este serviço ?",
            text: "Este serviço será marcado como finalizado !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, Já Terminamos !!",
            cancelButtonText: "Não, Cancelar Operação !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                $.ajax({
                url: 'servicos/done/'+id+'',
                type: 'POST',
                data: { id: id},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                success:function(e) {
                    if(e == true) {
                        swal("Parabéns !!", "O serviço foi completado com sucesso !!", "success")
                    }
                    setTimeout("reload()", 1500);
                }
                });
            }
            else {
                swal("Cancelado !!", "Nenhuma ação foi realizada !!", "error");
            }
        })
};

function reload(){
    window.location.reload();
}


    $('#btn').on('click', function(){
        $('#area1').fadeOut(1500);
        $('#btn').fadeOut(1500);
        $('#area2').fadeIn(4000);
    });

