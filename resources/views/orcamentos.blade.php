@include('layouts.head')

@section('sub1','HOME')
@section('sub2','ORÇAMENTOS')

@include('layouts.menu')

@include('layouts.body')
<style>
    .container-fluid {
    padding: 0px;
}
</style>

<div class="col-sm-12" >
    <a id="btn" style="color:white;" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-plus"></i> Novo Orçamento</a>
    </div>

<div class="col-sm-12" id="area1">
    <div class="card">
        <div class="card-title">
            <h4>Orçamentos em Aberto </h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Data</th>
                            <th>Valor</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($list as $item)
                        <tr>
                        <td>{{ $item->nome }}</td>
                            <td>{{ $item->data_orcamento }}</td>
                            <td class="color-success">R$ {{  $item->valor + $item->material }}</td>
                            <td>
                            <a style="color:#fff" href="{{ route('orcamentos_edit.index', ['id'=> $item->id]) }}" class="btn sweet-success btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5 "><i class="ti-eye"></i></a>
                            <a style="color:#fff" onclick="del('{{ $item->id }}')" class="btn btn-danger btn-sm btn-addon m-b-10 m-l-5"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
                        
                            
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-----------------PARTE 2------------------------------>

<div class="col-sm-12" id="area2" style="display:none">
    <div class="card">
        <div class="card-title">
            <h4>Novo Orçamento</h4>
        </div>

        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Cliente</label>
                        <select class="form-control" name="cliente">
                            @forelse ($cli as $item)

                        <option value="{{ $item->id}}">{{ $item->cliente }}</option>

                                
                            @empty
                                
                            @endforelse
                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input type="date" name="data" class="form-control"/>
                    </div>
                    <div class="form-group">
                    <label for="">Valor</label>
                    <div class="input-group input-group-default">
                        <span class="input-group-btn"><button class="btn btn-info" type="submit"><i class="">R$</i></button></span>
                        <input type="text" placeholder="1000" name="valor" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Material</label>
                        <div class="input-group input-group-default">
                            <span class="input-group-btn"><button class="btn btn-warning" type="submit"><i class="">R$</i></button></span>
                            <input type="text" value="0" name="material" class="form-control">
                        </div>
                        <span class="text text-small">Se o material for por conta do cliente mantenha o valor '0'</span>

                        <br>
                    </div>
                    
                    <button type="submit" class="btn btn-info">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')

<script type="text/javascript" src="js/orcamentos/orcamentos.js"></script>