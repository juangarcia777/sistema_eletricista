function done(id) {
    swal({
            title: "Deseja excluir este serviço ?",
            text: "Todas as informações serão excluidas !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, Desejo Excluir !!",
            cancelButtonText: "Não, Cancelar Operação !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                $.ajax({
                url: 'servicos/delete/'+id+'',
                type: 'POST',
                data: { id: id},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                success:function(e) {
                    if(e == true) {
                        swal("Deletado !!", "O serviço foi excluido com sucesso !!", "success")
                    }
                    setTimeout("reload()", 1500);
                }
                });
            }
            else {
                swal("Cancelado !!", "Nenhuma ação foi realizada !!", "error");
            }
        })
}

function reload(){
    window.location.href= "{{ route('servicos.index') }}";
}