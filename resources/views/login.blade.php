@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
<div class="relative flex flex-col justify-center h-screen overflow-auto">
    <div class="w-full p-6 m-auto bg-gray-800 rounded-md shadow-lg ring-2 ring-white/50 lg:max-w-xl max-h-screen overflow-y-auto">
        <h1 class="text-3xl font-semibold text-center text-white">LOGIN</h1>
            <form action="/contact" method="GET" class="space-y-4">
                <div>
                    <label class="label text-blue-300">
                        <span class="text-base label-text text-white">NIM</span>
                    </label>
                    <input name="nim" type="text" placeholder="Masukkan NIM" class="w-full input input-bordered border-blue-500" />
                </div>
                <div>
                    <label class="label text-blue-300">
                        <span class="text-base label-text  text-white">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Masukkan Password" class="w-full input input-bordered border-blue-500" />
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-block bg-blue-600 hover:bg-blue-700 text-white">Login</button>
                </div>
                <div>
                    <label class="label cursor-pointer">
                        <span class="label-text text-white">Remember me</span>
                        <input name="remember" type="checkbox" checked="checked" id="customCheck" class="checkbox checkbox-primary" />
                    </label>
                </div>
                </form>
            </form>
    </div>
</div>
@endsection
