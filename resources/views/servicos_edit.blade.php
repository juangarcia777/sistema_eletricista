@include('layouts.head')

@section('sub1','SERVIÇOS')
@section('sub2','EDITAR')

@include('layouts.menu')

@include('layouts.body')

<style>
    .container-fluid {
    padding: 0px;
}

</style>

<div class="col-sm-12" id="btn">
<a style="color:white;" href="{{ route('servicos.index') }}" class="btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-arrow-left"></i> Voltar</a>
        <br>
    
    @if ($get)

<a style="color:white;" onclick="done({{$get->id}})" class="btn btn-danger btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-trash"></i> Excluir Serviço</a>
        
</div>

<div class="col-sm-12">
    <div class="card">
        <div class="card-title">
            <h4>Edição de Serviço</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Cliente</label>
                        <select name="cliente" class="form-control" id="">
                            <option value="{{ $get->id_cliente }}">{{ $get->nome }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Data Início</label>
                    <input type="date" value="{{ $get->data_inicio }}" name="data" class="form-control" />
                    </div>
                    <div class="form-group">
                    <label for="">Valor</label>
                    <div class="input-group input-group-default">
                        <span class="input-group-btn"><button class="btn btn-info" type="submit"><i class="">R$</i></button></span>
                    <input type="text" value="{{ $get->valor }}" name="valor" class="form-control">
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
                                        <ul class="wysihtml5-toolbar" style="display:none"><li class="dropdown"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div">Normal text</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">Heading 1</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2">Heading 2</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3">Heading 3</a></li></ul></li><li><div class="btn-group"><a class="btn" data-wysihtml5-command="bold" title="CTRL+B">Bold</a><a class="btn" data-wysihtml5-command="italic" title="CTRL+I">Italic</a><a class="btn" data-wysihtml5-command="underline" title="CTRL+U">Underline</a></div></li><li><div class="btn-group"><a class="btn" data-wysihtml5-command="insertUnorderedList" title="Unordered list"><i class="fa fa-list"></i></a><a class="btn" data-wysihtml5-command="insertOrderedList" title="Ordered list"><i class="fa fa-th-list"></i></a><a class="btn" data-wysihtml5-command="Outdent" title="Outdent"><i class="fa fa-outdent"></i></a><a class="btn" data-wysihtml5-command="Indent" title="Indent"><i class="fa fa-indent"></i></a></div></li><li><div class="bootstrap-wysihtml5-insert-link-modal modal fade bs-example-modal-lg"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><a class="close" data-dismiss="modal"></a><h3>Insert link</h3></div><div class="modal-body"><div class="form-group"><input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" type="text"></div></div><div class="modal-footer"><a href="#" class="btn btn-inverse" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a></div></div></div></div><a class="btn" data-wysihtml5-command="createLink" title="Insert link"><i class="fa fa-link"></i></a></li><li><div class="bootstrap-wysihtml5-insert-image-modal modal fade bs-example-modal-lg"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><a class="close" data-dismiss="modal"></a><h3>Insert image</h3></div><div class="modal-body"><div class="form-group"><input value="http://" class="bootstrap-wysihtml5-insert-image-url  m-wrap large form-control" type="text"></div></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Cancel</a><a href="#" class="btn  green btn-primary" data-dismiss="modal">Insert image</a></div></div></div></div><a class="btn" data-wysihtml5-command="insertImage" title="Insert image"><i class="fa fa-image "></i></a></li></ul>
                                        <textarea class="textarea_editor form-control" name="material" rows="15" style="height:450px">
                                            {{ $get->materiais }}
                                        </textarea>
                                        </div>
                                    <button type="submit" class="btn btn-info">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--------------------------------------------------------------->
            </div>
                        
                    @else
                        
                    @endif
                  
                    
        </form>
    </div>
</div>
</div>
</div>


@include('layouts.footer')

<script type="text/javascript" src="js/servicos/servicos_edit.js"></script>