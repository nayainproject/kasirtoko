@extends('layouts.main', ['title' => 'User' ])
@section('title-content')
<i class="fas fa-user-tie mr-2"></i>
User 
@endsection 
 
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-6">
        <form method="POST" action="{{ route('user.store') }}" class="card card-orange card-outline">
            <div class="card-header">
                <h3 class="card-title">Buat User Baru</h3>
            </div>

            <div class="card-body">
                @csrf 
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <x-input name="nama" type="text" />
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <x-input name="username" type="text" />
                </div>
                <div class="form-group">
                    <label>Role/ Peran</label>
                    <x-select name="role"
                    :options="[['', 'Pilih:'], ['petugas', 'Petugas'], ['admin', 'Administrator']]" />
                </div>
                <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <x-input name="password_new" type="password" />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i id="togglePasswordN" class="fas fa-eye" style="cursor: pointer;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    </script>
                     <div class="form-group">
                        <label>Password Konfirmasi</label>
                        <div class="input-group">
                            <x-input name="password_komfir" type="password" />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i id="togglePasswordKo" class="fas fa-eye" style="cursor: pointer;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
            <div class="card-footer form-inline">
                <button type="submit" class="btn btn-primary">
                    Simpan User 
                </button>
                <a href="{{ route('user.index') }}" class="btn btn-secondary ml-auto">
                    Batal 
                </a>
            </div>
        </form>
    </div>
</div>
<script>
                        document.getElementById('togglePasswordN').addEventListener('click', function() {
                            var passwordInput = document.querySelector('input[name="password_new"]');
                            var icon = document.getElementById('togglePasswordN');
                    
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
                        document.getElementById('togglePasswordKo').addEventListener('click', function() {
                            var passwordInput = document.querySelector('input[name="password_komfir"]');
                            var icon = document.getElementById('togglePasswordKo');
                    
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
