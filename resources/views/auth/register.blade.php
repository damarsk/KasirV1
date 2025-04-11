@extends('auth.template.master')
@section('content')

    <body class="hold-transition register-page" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="register-box" style="width: 450px;">
            <div class="card" style="border-radius: 15px; box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2); border: none; overflow: hidden;">
                <div class="card-header text-center" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); padding: 25px 0; border: none;">
                    <a href="#" class="h1" style="color: white; font-weight: 600; letter-spacing: 1px;"><b>Kasir</b>Laravel</a>
                </div>
                <div class="card-body" style="padding: 30px;">
                    <p class="login-box-msg" style="font-size: 18px; font-weight: 500; color: #555; margin-bottom: 25px;">Daftar Sebagai Petugas</p>
                    @if ($errors->any())
                        <div class="alert alert-danger" style="border-radius: 10px; border-left: 4px solid #dc3545;">
                            <ul style="margin-bottom: 0; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" style="border-radius: 10px; padding: 12px; height: auto; border: 1px solid #ddd;">
                            <div class="input-group-append" style="margin-left: -45px; z-index: 10;">
                                <div class="input-group-text" style="background: transparent; border: none;">
                                    <span class="fas fa-user" style="color: #6a11cb;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" style="border-radius: 10px; padding: 12px; height: auto; border: 1px solid #ddd;">
                            <div class="input-group-append" style="margin-left: -45px; z-index: 10;">
                                <div class="input-group-text" style="background: transparent; border: none;">
                                    <span class="fas fa-envelope" style="color: #6a11cb;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" placeholder="Password" name="password" style="border-radius: 10px; padding: 12px; height: auto; border: 1px solid #ddd;">
                            <div class="input-group-append" style="margin-left: -45px; z-index: 10;">
                                <div class="input-group-text" style="background: transparent; border: none;">
                                    <span class="fas fa-lock" style="color: #6a11cb;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" placeholder="Konfirmasi Password"
                                name="password_confirmation" style="border-radius: 10px; padding: 12px; height: auto; border: 1px solid #ddd;">
                            <div class="input-group-append" style="margin-left: -45px; z-index: 10;">
                                <div class="input-group-text" style="background: transparent; border: none;">
                                    <span class="fas fa-lock" style="color: #6a11cb;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms" style="color: #555; font-weight: normal;">
                                        Saya setuju dengan <a href="#" style="color: #6a11cb;">ketentuan</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-block" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); color: white; border-radius: 10px; padding: 10px; font-weight: 600; border: none; box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11);">Daftar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-center" style="color: #6a11cb; font-weight: 500;">Saya sudah memiliki akun</a>
                    </div>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    @endsection
