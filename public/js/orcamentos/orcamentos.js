function reload() {
    window.location.reload();
}

$('#btn').on('click', function(){
$('#area1').fadeOut(1000);
$('#btn').fadeOut(1000);
$('#area2').fadeIn(4000);
});

function del(id){
swal({
        title: "Deseja excluir este agendamento ?",
        text: "Os dados do cliente serão excluidos !!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, Quero excluir !!",
        cancelButtonText: "Não, Cancelar Operação !!",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){

        if (isConfirm) {
            $.ajax({
                url: 'orcamentos/delete/'+id+'',
                type: 'POST',
                data: { id: id},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                success:function(e) {
                    if(e == true) {
                        swal("Deletado !!", "O agendamento foi excluido !!", "success")
                    }
                    setTimeout("reload()", 1500);
                }
            });
        }
        else {
            swal("Cancelado !!", "Nenhuma ação foi realizada !!", "error");
        }

    });
}
