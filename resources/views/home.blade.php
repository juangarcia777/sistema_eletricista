@include('layouts.head')

@section('sub1','HOME')
@section('sub2','APRESENTAÇÃO')

@include('layouts.menu')

@include('layouts.body')


    <!-- Start Page Content -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <h4>Trabalhos / Orçamentos </h4>

                </div>
                <div class="sales-chart">
                    <canvas id="sales-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <h4>Ganhos no Mês </h4>

                </div>
                <div class="sales-chart">
                    <canvas id="team-chart"></canvas>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>
   
    

    <!-- End PAge Content -->




@include('layouts.footer')

<?php
$horafixa = strtotime("12:00:00");
$horaatual = strtotime("now");
?>
@if ($horaatual > strtotime('18:00:00') && $horaatual < strtotime('23:59:59') )

<script>
        setTimeout("boanoite()", 2000);
</script>
    
@endif

@if ($horaatual > strtotime('01:00:00') && $horaatual < strtotime('12:00:00') )

<script>
        setTimeout("bomdia()", 2000);
</script>
    
@endif

@if ($horaatual > strtotime('12:01:00') && $horaatual < strtotime('17:59:59') )

<script>
        setTimeout("boatarde()", 2000);
</script>
    
@endif


<script>

    function boanoite() {
        toastr.info('Seja bem-vindo !','Boa Noite {{Auth::user()->name}}',{
        "positionClass": "toast-top-right",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    });
    }

    function bomdia() {
        toastr.info('Seja bem-vindo !','Bom Dia {{Auth::user()->name}}',{
        "positionClass": "toast-top-right",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    });
    }

    function boatarde() {
        toastr.info('Seja bem-vindo !','Boa Tarde {{Auth::user()->name}}',{
        "positionClass": "toast-top-right",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    });
    }

    


</script>
