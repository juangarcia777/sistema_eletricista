function done() {
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
                swal("Ok !!", "Serviço excluido com sucesso !!", "success");
            }
            else {
                swal("Cancelado !!", "Nenhuma ação foi realizada !!", "error");
            }
        });
};
