@include('layouts.head')

@section('sub1','HOME')
@section('sub2','AGENDA')

@include('layouts.menu')

@include('layouts.body')

<style>
    .container-fluid {
    padding: 0px;
}
</style>


<div class="col-sm-12" >
    <a id="btn" style="color:white;" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-plus"></i>   Novo</a>
    </div>
<div class="col-sm-12" id="area1">
    
    <div class="card">
        <div class="card-title">
            <h4>Agendados </h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Horário</th>
                            <th>Data</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($list as $item)

                        <tr>
                            <td>{{$item->cliente}}</td>
                            <td><span class="">{{$item->horario}}</span></td>
                            <td>{{$item->data}}</td>
                            <td class="color-primary">
                            <a style="color:#fff" href="{{ route('agenda_edit.index', ['id'=> $item->id]) }}" class="btn sweet-success btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5 "><i class="ti-eye"></i></a>
                            <a style="color:#fff" onclick="done('{{$item->id}}')" class="btn sweet-success btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5 "><i class="ti-check"></i></a>
                            <a style="color:#fff" onclick="del('{{$item->id}}')" class="btn btn-danger btn-sm btn-addon m-b-10 m-l-5"><i class="ti-trash"></i></a>

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

<!-- PARTE 2 ---------------------------------------------------------------------------------->


<div class="col-sm-12" style="display:none;margin:0px 0px 0px" id="area2">
    <div class="card">
        <div class="card-title">
            <h4>Novo Agendamento</h4>

        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Cliente</label>
                        <input type="text" name="cliente" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" name="endereco" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Horário</label>
                        <input type="time" name="horario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input type="date" name="data" class="form-control" required>
                    </div>
                    <button type="submit" onclick="registrar()" class="btn btn-info ">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

<script type="text/javascript" src="js/agenda/agenda.js"></script>


