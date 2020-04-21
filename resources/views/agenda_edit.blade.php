@include('layouts.head')

@section('sub1','AGENDA')
@section('sub2','EDITAR')

@include('layouts.menu')

@include('layouts.body')

<style>
    .container-fluid {
    padding: 0px;
}

</style>

<div class="col-sm-12" id="btn">
<a style="color:white;" href="{{ route('agenda.index') }}" class="btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-arrow-left"></i> Voltar</a>
</div>

<div class="col-sm-12">
    <div class="card">
        <div class="card-title">
            <h4>Edição de Agendamento</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                       @if ($edit)

                       <div class="form-group">
                        <label>Cliente</label>
                       <input type="text" value="{{ $edit->cliente }}" name="cliente" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" name="endereco" value="{{ $edit->endereco }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" value="{{ $edit->telefone }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Horário</label>
                        <input type="time" name="horario" value="{{ $edit->horario }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input type="date" name="data" value="{{ $edit->data }}" class="form-control">
                    </div>
                           
                      @else
                          Não Há registros !!
                      @endif
                      
                                    </form>
                                    <button type="submit" class="btn btn-info">Salvar</button>
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

<script type="text/javascript" src="js/agenda/agenda_edit.js"></script>