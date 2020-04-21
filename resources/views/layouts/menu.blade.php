 <!-- header header  -->
 <div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
<!-- Logo -->
<div class="navbar-header">
<a class="navbar-brand" href="{{ route('home.index') }}">
<!-- Logo icon -->
<b><img src="images/lamp.png" alt="homepage" class="dark-logo" /></b>
<!--End Logo icon -->
<!-- Logo text -->
<span><img src="images/logo-text.png" alt="homepage" class="dark-logo" style="margin-top: 20px"/></span>
</a>
</div>
<!-- End Logo -->
<div class="navbar-collapse">
<!-- toggle and nav items -->
<ul class="navbar-nav mr-auto mt-md-0">
<!-- This is  --> 
<li class="nav-item"> <a class="nav-link toggle-nav hidden-md-up text-muted  " id="enterMenu" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
<li class="nav-item m-l-10"> <a class="nav-link sidebartoggle hidden-sm-down text-muted"  href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
<!-- Messages -->

<!-- End Messages -->
</ul>
<!-- User profile and search -->
<ul class="navbar-nav my-lg-0">
<!-- Comment -->
<li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
       <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
   </a>
   <div class="dropdown-menu dropdown-menu-right mailbox animated slideInRight">
       <ul>
           <li>
               <div class="drop-title">Notifications</div>
           </li>
           <li>
               <div class="header-notify">
                   <!-- Message -->
                   <a href="#">
                       <i class="cc BTC m-r-10 f-s-40" title="BTC"></i>
                       
                       <div class="notification-contnet">
                           <h5>All Transaction BTC</h5> <span class="mail-desc">Just see the my new admin!</span> 
                       </div>
                   </a>
                   <!-- Message -->
                   <a href="#">
                       <i class="cc LTC m-r-10 f-s-40" title="BTC"></i>
                       <div class="notification-contnet">
                           <h5>This is LTC coin</h5> <span class="mail-desc">Just a reminder that you have event</span>
                       </div>
                   </a>
                   <!-- Message -->
                   <a href="#">
                       <i class="cc DASH m-r-10 f-s-40" title="BTC"></i>
                       <div class="notification-contnet">
                           <h5>This is DASH coin</h5> <span class="mail-desc">You can customize this template as you want</span>
                       </div>
                   </a>
                   <!-- Message -->
                   <a href="#">
                       <i class="cc XRP m-r-10 f-s-40" title="BTC"></i>
                       <div class="notification-contnet">
                           <h5>This is LTC coin</h5> <span class="mail-desc">Just see the my admin!</span>
                       </div>
                   </a>
               </div>
           </li>
           <li>
               <a class="nav-link text-center" href="javascript:void(0);"> Check all notifications <i class="fa fa-angle-right"></i> </a>
           </li>
       </ul>
   </div>
</li>
<!-- End Comment -->
<!-- Messages -->
<li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
       <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
   </a>
   <div class="dropdown-menu dropdown-menu-right mailbox animated slideInRight" aria-labelledby="2">
       <ul>
           <li>
               <div class="drop-title">You have 4 new messages</div>
           </li>
           <li>
               <div class="header-notify">
                   <!-- Message -->
                   <a href="#">
                       <div class="notification-contnet">
                           <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span>
                       </div>
                   </a>
                   <!-- Message -->
                   <a href="#">
                       <div class="notification-contnet">
                           <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span>
                       </div>
                   </a>
                   <!-- Message -->
                   <a href="#">
                       <div class="notification-contnet">
                           <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span>
                       </div>
                   </a>
                   <!-- Message -->
                   <a href="#">
                       <div class="notification-contnet">
                           <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span>
                       </div>
                   </a>
               </div>
           </li>
           <li>
               <a class="nav-link text-center" href="javascript:void(0);"> See all e-Mails <i class="fa fa-angle-right"></i> </a>
           </li>
       </ul>
   </div>
</li>
<!-- End Messages -->
<!-- Profile -->
<li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
   <div class="dropdown-menu dropdown-menu-right animated slideInRight">
       <ul class="dropdown-user">
           <li role="separator" class="divider"></li>
           <li><a href="#"> Profile</a></li>
           <li><a href="#"> Balance</a></li>
           <li><a href="#"> Inbox</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="#"> Setting</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="#"> Logout</a></li>
       </ul>
   </div>
</li>
</ul>
</div>
</nav>
</div>
<!-- End header header -->

<!---------------------------------------------------------------------------------------------------->

     <!-- Left Sidebar  -->
     <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebar-menu">
                    <li class="nav-devider"></li>
                <li> <a href="{{ route('agenda.index') }}"><i class="fa fa-tachometer"></i><span class="hide-menu">Agenda</span></a></li>
                <li> <a class="" href="{{ route('orcamentos.index') }}" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Orçamentos</span></a></li>
                <li> <a class="" href="{{ route('servicos.index') }}" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Serviços</span></a></li>
                    <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Relatório Geral</span></a>
                        <ul aria-expanded="false" class="collapse">
                            
                        <li><a href="{{ route('relatorio.orcamento.index') }}">Orçamentos</a></li>
                            <li><a href="{{ route('relatorio.servicos.index') }}">Serviços</a></li>
                           
                        </ul>
                    </li>
                <li><a class="" href="{{ route('relatorio_cliente.index') }}" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Relatório Cliente</span></a></li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Financeiro</span></a>
                        <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('balanco_financeiro.index') }}">Balanços</a></li>
                        <li><a href="{{ route('lancamentos_financeiro.index') }}">Lançamentos</a></li>
                        </ul>
                    </li>
                   
                <li class="nav-label"><a href="{{  route('logout')  }}">Logout</a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </div>
    <!-- End Left Sidebar  -->