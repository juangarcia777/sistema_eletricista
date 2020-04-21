@include('layouts.head')

@section('sub1','RELATÓRIOS')
@section('sub2','SERVIÇOS')

@include('layouts.menu')

@include('layouts.body')
<style>

input[type="search"] {
    color: white;
}
</style>

<div class="col-sm-12">
<a style="color:white;" href="{{ route('home.index') }}" class="btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-arrow-left"></i> Voltar</a>

</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Serviços</h4>
                <h6 class="card-subtitle">Atenção vire o celular na horizontal para melhor visualização.</h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Data Inicio</th>
                                <th>Data Final</th>
                                <th>Status</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Cliente</th>
                                <th>Data Inicio</th>
                                <th>Data Final</th>
                                <th>Status</th>
                                <th>Valor</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @forelse ($get as $item)

                            <tr>
                                <td>{{ $item->nome }}</td>
                                <td>{{ implode("/",array_reverse(explode("-",$item->data_inicio))) }}</td> 
                               
                                <td>
                                @if ( $item->data_fim != null)
                                    {{ implode("/",array_reverse(explode("-",$item->data_fim))) }}
                                @else 
                                    Não Finalizado
                                @endif

                            </td>

                            <td>
                                @if ($item->status == 0)
                                   <span class="badge badge-danger">Em Andamento</span> 
                                @else 
                                   <span class="badge badge-info">Finalizado</span> 
                                @endif
                            </td>

                            <td class="text text-success">R$ {{ $item->valor + $item->material }}</td>
                            </tr>
                                
                            @empty
    
                            <tr>
                                <td>Não há dados ha serem mostrados.</td>
                            </tr>
    
                            @endforelse
                            
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


@include('layouts.footer')
