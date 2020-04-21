@include('layouts.head')

@section('sub1','BALANÇOS')
@section('sub2','FINANCEIRO')

@include('layouts.menu')

@include('layouts.body')

<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="val-skill">Ano <span class="text-danger">*</span></label>
    <div class="col-lg-6">
        <select class="form-control" id="ano" name="val-skill">
            <option value="">--Selecione--</option>
            
            @for ($i = 2020; $i < date('Y')+3 ; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor

        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="val-skill">Mês <span class="text-warning">*</span></label>
    <div class="col-lg-6">
        <select class="form-control" id="mes" onchange="buscaBalanco()" name="val-skill">
            <option value="">--Selecione--</option>
            
            @for ($i = 01; $i < 12; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor

        </select>
    </div>
</div>

<a onclick="window.print()" class="btn btn-info text-light"><span class="fa fa-wpforms"></span> Imprimir</a>


<div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Balanço</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Dia/Mês</th>
                                        <th>Entrada</th>
                                        <th>Saída</th>
                                        <th>Valor Total</th>
                                    </tr>
                                </thead>
                                <tbody id="result">

                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@include('layouts.footer')

<script>

    function buscaBalanco() {
        var mes= '0'+$("#mes").val();
        var ano= $("#ano").val();

        $('#result').html("");

        $.ajax({
            url: '/financeiro_balanco/'+mes+'/'+ano+'',
            type: 'POST',
            data: { mes: mes, ano: ano },
            dataType: 'json',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(e){
                var html= "<tr><td>"+e['data']+"</td><td class='color-success'>R$ <span>"+e['total']+"</span></td><td class='color-danger'>R$ <span>"+e['saidas']+"</span></td><td class='color-warning'>R$ <span>"+e['final']+"</span></td></tr>";
                console.log(html);

                $('#result').append(html);

        }
    });
}


</script>