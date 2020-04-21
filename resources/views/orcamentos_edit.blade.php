@include('layouts.head')

@section('sub1','ORÇAMENTOS')
@section('sub2','EDITAR')

@include('layouts.menu')

@include('layouts.body')

<style>
    .container-fluid {
    padding: 0px;
}

</style>

<div class="col-sm-12" id="btn">
<a style="color:white;" href="{{ route('orcamentos.index') }}" class="btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-arrow-left"></i> Voltar</a>
</div>

<div class="col-sm-12">
    <div class="card">
        <div class="card-title">
            <h4>Edição de Orçamento</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    @csrf
                    @if ($call)

                    <div class="form-group">
                        <label>Cliente</label>
                        <select class="form-control" name="cliente">
                        <option value="{{ $call->id_cliente }}">{{ $call->nome }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input type="date" name="data" value="{{ $call->data_orcamento }}" class="form-control"/>
                    </div>
                    <div class="form-group">
                    <label for="">Valor</label>
                    <div class="input-group input-group-default">
                        <span class="input-group-btn"><button class="btn btn-info" type="submit"><i class="">R$</i></button></span>
                        <input type="text" value="{{ $call->valor }}" name="valor" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Material</label>
                        <div class="input-group input-group-default">
                            <span class="input-group-btn"><button class="btn btn-warning" type="submit"><i class="">R$</i></button></span>
                            <input type="text" value="{{ $call->material }}" name="material" class="form-control">
                        </div>
                        <br>
                    </div>
                        
                    @else
                        
                    @endif
                  
                    
                    <button type="submit" class="btn btn-info">Confirmar</button>
                </form>

                
                                </div>
                            </div>
                        </div>
                    </div>
                <!--------------------------------------------------------------->
            </div>
                    
        </form>
    </div>
</div>
</div>
</div>


@include('layouts.footer')

<script type="text/javascript" src="js/orcamentos/orcamentos_edit.js"></script>