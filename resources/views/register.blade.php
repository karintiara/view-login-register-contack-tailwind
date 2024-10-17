@extends('layouts.app')

@section('title', 'Register Page')

@section('content')
<div class="relative flex flex-col justify-center h-full overflow-hidden">
    <div class="w-full p-6 m-auto bg-gray-800 rounded-md shadow-lg ring-2 ring-white/50 lg:max-w-xl">
        <h1 class="text-3xl font-semibold text-center text-white">REGISTER</h1>
            <form action="/login" method="GET" class="space-y-4">
                <div>
                    <label class="label text-blue-300">
                        <span class="text-base label-text text-white">NIM</span>
                    </label>
                    <input name="nim" type="text" placeholder="Masukkan NIM" class="w-full input input-bordered border-blue-500" />
                </div>
                <div>
                    <label class="label text-blue-300">
                        <span class="text-base label-text text-white">Nama</span>
                    </label>
                    <input name="nama" type="text" placeholder="Masukkan Nama" class="w-full input input-bordered border-blue-500" />
                </div>
                <div>
                    <label class="label text-blue-300">
                        <span class="text-base label-text text-white">Program Studi</span>
                    </label>
                    <input name="prodi" type="text" placeholder="Masukkan Program Studi" class="w-full input input-bordered border-blue-500" />
                </div>
                <div>
                    <label class="label text-blue-300">
                        <span class="text-base label-text text-white">Email</span>
                    </label>
                    <input name="email" type="email" placeholder="Masukkan Email" class="w-full input input-bordered border-blue-500" />
                </div>
                <div>
                    <label class="label text-blue-300">
                        <span class="text-base label-text text-white">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Masukkan Password" class="w-full input input-bordered border-blue-500" />
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-block bg-blue-600 hover:bg-blue-700 text-white">Register Account</button>
                </div>
            </form>
            <div class="flex items-center w-full my-4">
                <hr class="w-full" />
                <p class="px-3 ">OR</p>
                <hr class="w-full" />
            </div>
            <div class="my-6 space-y-2">
                <button aria-label="Login with Google" type="button" class="flex items-center justify-center w-full p-2 space-x-4 border rounded-md focus:ring-2 focus:ring-offset-1 focus:ring-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
                        <path d="M16.318 13.714v5.484h9.078c-0.37 2.354-2.745 6.901-9.078 6.901-5.458 0-9.917-4.521-9.917-10.099s4.458-10.099 9.917-10.099c3.109 0 5.193 1.318 6.38 2.464l4.339-4.182c-2.786-2.599-6.396-4.182-10.719-4.182-8.844 0-16 7.151-16 16s7.156 16 16 16c9.234 0 15.365-6.49 15.365-15.635 0-1.052-0.115-1.854-0.255-2.651z">
                        </path>
                    </svg>
                    <p>Login with Google</p>
                </button>
            </div>
    </div>
</div>
@endsection
