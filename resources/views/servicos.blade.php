@include('layouts.head')

@section('sub1','HOME')
@section('sub2','SERVIÇOS')

@include('layouts.menu')

@include('layouts.body')

<style>
    .container-fluid {
    padding: 0px;
}
</style>

<div class="col-sm-12" id="btn">
    <a style="color:white;" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-plus"></i> Novo Serviço</a>
</div>
<div class="col-sm-12" id="area1">
    <div class="card">
        <div class="card-title">
            <h4>Serviços</h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th style="text-align:center">Data Início</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($cli as $item)

                        <tr>
                            <td>{{ $item->nome }}</td>
                        <td style="text-align:center">{{ implode("/",array_reverse(explode("-",$item->data_inicio))) }}</td>
                            <td>
                            <a style="color:#fff" href="{{ route('servicos.edit', ['id' => $item->id]) }}" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5 "><i class="ti-settings"></i></a>
                            <a style="color:#fff" onclick="done('{{$item->id}}')" class="btn btn-danger btn-sm btn-addon m-b-10 m-l-5"><i class="ti-check"></i></a>
                            </td>
                        </tr>
                            
                        @empty
                            
                        @endforelse

                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>

<!-----  NOVO SERVIÇO --------------------------------------------------------------->


<div class="col-sm-12" id="area2" style="display:none">
    <div class="card">
        <div class="card-title">
            <h4>Novo Serviço</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Cliente</label>
                        <select class="form-control" name="cliente">

                            @forelse ($list as $item )
                            <option value="{{ $item->id_cliente }}">{{ $item->nome }}</option>
                            @empty
                                
                            @endforelse

                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Data Início</label>
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
                    <!----- AREA DE MATERIAIS UTILIZADOS-------------------->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Materiais Utilizados</h4>
                                        <div class="form-group">
                                            <textarea class="form-control" name="material" placeholder="Digite aqui a lista de materiais..." id="1" style="height:450px">
                                            </textarea>
                                        </div>
                                    <button type="submit" class="btn btn-info">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------- FINAL MATERIAIS -------------->
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>



@include('layouts.footer')

<script type="text/javascript" src="js/servicos/servicos.js"></script>