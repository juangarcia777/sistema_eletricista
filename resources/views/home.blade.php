@include('layouts.head')

@section('sub1','HOME')
@section('sub2','APRESENTAÇÃO')

@include('layouts.menu')

@include('layouts.body')


    <!-- Start Page Content -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
              <div class="col-sm-12">
                <div class="col-sm-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="50" height="50"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g id="original-icon" fill="#3498db"><path d="M130.72,37.195l-3.1175,13.0075l-6.5575,-11.7175v5.9125c9.97063,7.91469 16.94469,19.91438 17.63,33.325c2.40531,-0.68531 4.47469,-0.645 6.88,-0.645c4.73,0 9.17781,1.02125 13.115,3.01l-3.5475,-2.0425l13.115,-3.01l-13.115,-3.1175l11.7175,-6.5575h-13.115l9.675,-9.245l-12.685,3.7625l6.88,-11.395l-11.395,6.88l3.7625,-12.685l-9.245,9.5675l0.3225,-13.33l-6.88,11.2875zM92.88,37.84c-17.2,0 -32.38437,10.29313 -38.915,26.1225c-2.40531,-1.37062 -5.805,-2.365 -9.245,-2.365c-11.00531,0 -20.3175,8.96281 -20.3175,20.3175v1.72c-13.41062,1.03469 -24.4025,12.65813 -24.4025,26.7675c0,2.75469 0.38969,5.22719 1.075,7.6325c0.34938,1.37063 1.72,2.365 3.44,2.365h161.68c1.37063,0 2.32469,-0.67187 3.01,-2.0425c1.72,-3.78937 2.795,-7.59219 2.795,-11.7175c0,-14.44531 -11.99969,-26.1225 -26.445,-26.1225c-2.75469,0 -5.20031,0.28219 -7.955,0.9675l16.8775,22.79l-18.92,-15.48l-59.8775,13.0075l51.9225,-16.8775l-29.5625,-10.965l36.765,6.235v-0.43c0,-23.04531 -18.87969,-41.925 -41.925,-41.925zM160.9275,81.3775c1.49156,0.94063 2.9025,2.01563 4.1925,3.225h1.72z"></path></g></g></svg>
                </div>
                <div class="col-sm-6">
                    <h6><span id="city" style="text-transform:uppercase"></span> AGORA :  <span id="agora"></span>&nbsp;C°</h6>
                </div>
              </div>
          </div>


          <div class="carousel-item">

            <div class="col-sm-12">
                <div class="col-sm-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="50" height="50"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M27.52,-0.5375l-2.795,3.655c-1.00781,1.34375 -24.725,33.09656 -24.725,51.9225c0,15.42625 12.09375,27.52 27.52,27.52c15.42625,0 27.52,-12.09375 27.52,-27.52c0,-18.82594 -23.71719,-50.57875 -24.725,-51.9225zM144.48,30.745l-2.6875,3.655c-1.00781,1.33031 -24.8325,32.76063 -24.8325,51.6c0,15.42625 12.09375,27.52 27.52,27.52c15.42625,0 27.52,-12.09375 27.52,-27.52c0,-18.83937 -23.82469,-50.26969 -24.8325,-51.6zM75.68,88.9025l-2.795,3.655c-1.00781,1.34375 -24.725,33.09656 -24.725,51.9225c0,15.42625 12.09375,27.52 27.52,27.52c15.42625,0 27.52,-12.09375 27.52,-27.52c0,-18.82594 -23.71719,-50.57875 -24.725,-51.9225z"></path></g></g></svg>
                </div>
                <div class="col-sm-6">
                    <h6>UMIDADE DO AR :  <span id="hum"></span>&nbsp;HR</h6>
                </div>
              </div>
          </div>
         
          <div class="carousel-item">

            <div class="col-sm-12">
                <div class="col-sm-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M49.88,13.76c-10.39078,0 -19.58004,5.48924 -24.74516,13.69953c-1.33276,2.08173 -1.44649,4.71838 -0.29795,6.90714c1.14855,2.18876 3.38287,3.59327 5.85319,3.67934c2.47031,0.08607 4.79697,-1.15952 6.09507,-3.26304c2.74689,-4.36635 7.52402,-7.26297 13.09485,-7.26297c8.76894,0 15.69995,7.04925 15.47328,15.89656c-0.21546,8.37001 -7.74331,15.06344 -16.50797,15.06344h-31.64531c-2.48118,-0.03509 -4.78904,1.2685 -6.03987,3.41161c-1.25083,2.1431 -1.25083,4.79369 0,6.93679c1.25083,2.1431 3.55869,3.4467 6.03987,3.41161h31.64531c15.83134,0 29.85047,-12.25495 30.26797,-28.47406c0.42005,-16.39541 -12.91086,-30.00594 -29.23328,-30.00594zM127.28,24.08c-12.9065,0 -24.23493,7.16458 -30.1,17.75094c-1.84234,3.32475 -0.64061,7.51352 2.68414,9.35586c3.32475,1.84234 7.51352,0.64061 9.35586,-2.68414c3.51925,-6.3522 10.23018,-10.66265 18.06,-10.66265c11.90616,0 21.32829,9.80081 20.59969,21.92328c-0.65556,10.90727 -10.40018,19.35672 -21.67469,19.35672h-109.005c-2.48118,-0.03509 -4.78904,1.2685 -6.03987,3.41161c-1.25083,2.1431 -1.25083,4.79369 0,6.93679c1.25083,2.1431 3.55869,3.4467 6.03987,3.41161h109.005c18.19253,0 34.29521,-13.7787 35.40781,-32.29031c1.19092,-19.81449 -14.71481,-36.50969 -34.33281,-36.50969zM17.2,99.76c-2.48118,-0.03509 -4.78904,1.2685 -6.03987,3.41161c-1.25083,2.1431 -1.25083,4.79369 0,6.93679c1.25083,2.1431 3.55869,3.4467 6.03987,3.41161h66.04531c8.76466,0 16.29251,6.69343 16.50797,15.06344c0.22667,8.84731 -6.70434,15.89656 -15.47328,15.89656c-5.57082,0 -10.34796,-2.89661 -13.09485,-7.26297c-1.29809,-2.10355 -3.62476,-3.34917 -6.09509,-3.26311c-2.47033,0.08606 -4.70467,1.49058 -5.85322,3.67936c-1.14855,2.18878 -1.03479,4.82545 0.298,6.90718c5.16511,8.21029 14.35438,13.69953 24.74515,13.69953c16.32242,0 29.65333,-13.61053 29.23328,-30.00594c-0.4175,-16.21911 -14.43663,-28.47406 -30.26797,-28.47406z"></path></g></g></svg>
                </div>
                <div class="col-sm-6">
                    <h6>VENTO :  <span id="wind"></span>&nbsp;KM/h</h6>
                </div>
              </div>

          </div>

          <div class="carousel-item">

            <div class="col-sm-12">
                <div class="col-sm-6">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="50" height="50"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M144.92344,76.56688c0.02688,-0.65844 0.05375,-1.30344 0.05375,-1.935c0,-24.94 -20.30406,-45.23063 -45.24406,-45.23063c-17.22688,0 -32.96219,9.95719 -40.51406,25.22219c-3.91031,-2.58 -8.47906,-3.9775 -13.27625,-3.9775c-12.73875,0 -23.20656,9.93031 -24.05313,22.4675c-13.0075,4.73 -21.88969,17.21344 -21.88969,31.22875c0,18.32875 14.92906,33.25781 33.27125,33.25781h108.10469c16.89094,0 30.62406,-13.73312 30.62406,-30.62406c0,-15.68156 -11.85187,-28.64875 -27.07656,-30.40906z"></path></g></g></svg>
                </div>
                <div class="col-sm-6">
                    <h6>TEMPO :  <span id="cloud" style="text-transform:uppercase"></span>&nbsp;</h6>
                </div>
              </div>

          </div>



        </div>
      </div>

    


        <div class="row">
           
        <!-- /# column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-title">
                    <h4>Ganhos por Mês </h4>
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

    $(window).on("load", function(){


  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{alert("O seu navegador não suporta Geolocalização.");}

function showPosition(position)
  {
  
        $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?lat='+position.coords.latitude.toFixed(2)+'&lon='+position.coords.longitude.toFixed(2)+'&units=metric&appid=5fd3cb9c2d14a3a4a7c4b4174e238ef5&lang=pt_br',
        type: 'GET',
        dataType: 'json',
        success:function(e){
            var city=  e['name'];
            var agora= e['main']['temp'];
            var hum= e['main']['humidity'];
            var wind= e['wind']['speed'];
            var cloud= e['weather'][0]['description'];

            $('#agora').html(agora.toFixed(1));
            $('#hum').html(hum);
            $('#wind').html(wind);
            $('#cloud').html(cloud);
            $('#city').html(city);

            console.log(e);
        }     
        });

  }

        });



</script>
