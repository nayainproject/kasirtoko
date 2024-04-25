@extends('layouts.main', ['title' => 'User'])
@section('title-content')
<i class="fas fa-user-tie mr-2"></i>
User 
@endsection 

@section('content') 
<div class="row">
<div class="col-xl-4 col-lg-6">
    <form method="POST" class="card card-orange card-outline" action="{{ route('user.update',[
        'user' => $user->id
    ]) }}">
    <div class="card-header">
        <h3 class="card-title">Ubah User</h3>
    </div>

    <div class="card-body">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label>Nama Lengkap</label>
            <x-input name="nama" type="text" :value="$user->nama" />
        </div>
        <div class="form-group">
            <label>Username</label>
            <x-input name="username" type="text" :value="$user->username" />
        </div>
        <div class="form-group">
            <label>Role/ Peran</label>
            <x-select name="role" :value="$user->role"
                :options="[['', 'Pilih:'], [ 'petugas', 'Petugas'], ['admin', 'Administrator']]" />
            </div>
                    <div class="form-group">
                        <label>Password Lama</label>
                        <div class="input-group">
                            <x-input name="password" type="password" />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i id="togglePassword" class="fas fa-eye" style="cursor: pointer;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    </script>
        <div class="form-group">
            <label>Password Baru</label>
            <div class="input-group">
                <x-input name="password_baru" type="password" />
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i id="togglePasswordB" class="fas fa-eye" style="cursor: pointer;"></i>
                    </span>
                </div>
            </div>
        </div>
        <script>
        </script>
        <div class="form-group">
            <label>Password Konfirmasi</label>
            <div class="input-group">
                <x-input name="password_acc" type="password" />
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i id="togglePasswordK" class="fas fa-eye" style="cursor: pointer;"></i>
                    </span>
                </div>
            </div>
        </div>

    <div class="card-footer form-inline">
        <button type="submit" class="btn btn-primary">
            Update User
        </button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary ml-auto">
            Batal
        </a>
    </div>
</form>
</div>
</div>
<script>
            document.getElementById('togglePassword').addEventListener('click', function() {
                var passwordInput = document.querySelector('input[name="password"]');
                var icon = document.getElementById('togglePassword');
        
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        </script>

<script>
            document.getElementById('togglePasswordB').addEventListener('click', function() {
                var passwordInput = document.querySelector('input[name="password_baru"]');
                var icon = document.getElementById('togglePasswordB');
        
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        </script>
        <script>
            document.getElementById('togglePasswordK').addEventListener('click', function() {
                var passwordInput = document.querySelector('input[name="password_acc"]');
                var icon = document.getElementById('togglePasswordK');
        
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        </script>
@endsection