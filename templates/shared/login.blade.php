@section('title')
Login
@endsection

@section('content')
<div class="container">
    <div id="login">
        <div class="title">
            <!-- <img src="{{ \URL::base('img/logo2.png') }}" alt=""> -->
            <img src="{{ \URL::base('vendor/sleek-theme/img/xinix-logo.png') }}" alt="">
            <h3>Bono Sleek Themes</h3>
            <h2>Login Page</h2>
        </div>
        <form method="POST">
            <div class="row">
                <div class="span-12">
                    <input type="email" name="email" value="" placeholder="Email Pengguna" class="">
                </div>
                <div class="span-12">
                    <input type="password" name="password" placeholder="Kata Sandi" class="password">
                </div>
                <div class="span-12">
                    <div class="row nav-login">
                        <label class="placeholder">
                            Lupa password Anda? <a href="{{ \URL::site('/validation/reset') }}" >Klik di sini</a>.
                        </label>
                        <label class="placeholder">
                            Belum memiliki akun? <a href="{{ \URL::site('register') }}" >Daftar di sini</a>.
                        </label>
                    </div>
                </div>
                <div class="span-12">
                    <input type="submit" value="Sign In"></input>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
