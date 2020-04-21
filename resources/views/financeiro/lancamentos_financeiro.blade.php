@include('layouts.head')

@section('sub1','LANÇAMENTOS')
@section('sub2','FINANCEIRO')

@include('layouts.menu')

@include('layouts.body')

<style>
    .container-fluid {
        padding: 10px;
    }
</style>

<div class="alert alert-primary alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <strong>Atenção!</strong> Esta area é somente para lançamentos de gastos.
</div>


<div class="col-sm-12">
    <div class="card">
        <div class="card-title">
            <h4>Novo Lançamento</h4>

        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Dia do Lançamento</label>
                        <input type="date" name="data" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input type="number" name="valor" class="form-control">
                    </div>
                   
                    <button type="submit" class="btn btn-info">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>



@include('layouts.footer')

@if (session('confirmed'))

<script>

swal("Lancamento Registrado !!", "O lancamento foi registrado com sucesso !!", "success")

</script>

@endif