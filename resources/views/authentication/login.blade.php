<!DOCTYPE html>
<html>
<head>
    <title>Sign-Up/Login Form</title>
    <link href="{{ asset('plugin/css/Titillium.css') }}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('plugin/css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/css/style.css')}}">
    <link href="{{asset('plugin/css/img/BF-favicon.png')}}" rel="icon" type="image/png"  sizes="32x32"> 
</head>
<body>
    <div class="form">  
        <ul class="tab-group">
            <li class="tab"><a href="#signup">Registrasi</a></li>
            <li class="tab active"><a href="#login">Log in</a></li>
        </ul>
        <div class="tab-content">
            <div id="login">   
                <h1>Selamat Datang</h1>
                <form action="/login" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="field-wrap">
                        <label>Email Address<span class="req">*</span></label>
                        <input type="email" required autocomplete="off" name="email"/>
                    </div>
                    <div class="field-wrap">
                        <label>Password<span class="req">*</span></label>
                        <input type="password" required autocomplete="off" name="password"/>
                    </div>
                    <button class="button button-block" value="login">Log In</button>
                </form>
            </div>
          
            <div id="signup">   
                <h1>Registrasi</h1>
                <form action="/register" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>Nama Depan<span class="req">*</span></label>
                            <input type="text" required autocomplete="off" name='first_name' />
                        </div>
                        <div class="field-wrap">
                            <label>Nama Belakang<span class="req">*</span></label>
                            <input type="text" required autocomplete="off" name='last_name' />
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label>Lokasi Anda<span class="req">*</span></label>
                        <input type="text" required autocomplete="off" name='location' />
                    </div>
                    <div class="field-wrap">
                        <label>Alamat Email<span class="req">*</span></label>
                        <input type="email"required autocomplete="off" name='email' />
                    </div>
                    <div class="field-wrap">
                        <label>Password<span class="req">*</span></label>
                        <input type="password"required autocomplete="off" name='password'/>
                    </div>
                    <div class="field-wrap">
                        <label>Konfirmasi Password<span class="req">*</span></label>
                        <input type="password"required autocomplete="off" name='password'/>
                    </div>
                    <button type="submit" class="button button-block" name="register" />Register</button>
                </form>
            </div>  
        </div>
    </div> 
</body>
<script src="{{asset('plugin/js/jquery.min.js')}}"></script>
<script src="{{asset('plugin/js/index.js')}}"></script>
</html>
