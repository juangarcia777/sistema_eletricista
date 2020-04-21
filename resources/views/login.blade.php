@include('layouts.head')


<div class="container">
    <div class="row">
        <div class="col-sm-12 text text-center">
            <img src="images/lamp.png" height="80" >
        </div>
        <div class="col-sm-12 text text-center"><h3>SISTEMA GARCIA</h3></div>
    </div>
</div>

<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="login-content card">
                    <div class="login-form">
                        <h4>Login</h4>

                        @if (session('warning'))
                        <div class="alert alert-danger" style="background-color:red">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> ATENÇÃO!</h5>
                            <ul>
                                <li style="color: white;">{{ session('warning') }}</li>
                        </ul>
                        </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger" style="background-color:red">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fa fa-ban"></i> ATENÇÃO!</h5>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color: white;">{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                            @endif


                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="password" placeholder="Senha">
                            </div>
                            <div class="checkbox">
                                <label>
                                        <input type="checkbox" id="remember" name="remember"> Me Lembre
                                    </label>
                                

                            </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Entrar</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

