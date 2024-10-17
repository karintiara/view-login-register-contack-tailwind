@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
<div class="relative flex flex-col justify-center h-screen overflow-hidden">
    <div class="w-full p-6 m-auto bg-white rounded-md shadow-md ring-2 ring-gray-800/50 lg:max-w-xl">
        <h1 class="text-3xl font-semibold text-center text-gray-700">Login</h1>
            <form action="/contact" method="GET" class="space-y-4">
                <div>
                    <label class="label">
                        <span class="text-base label-text">Email</span>
                    </label>
                    <input name="email" type="email" placeholder="Email Address" class="w-full input input-bordered" />
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Enter Password" class="w-full input input-bordered" />
                </div>
                <div>
                    <button type="submit" class="btn btn-block">Login</button>
                </div>
                <div>
                    <label class="label cursor-pointer">
                        <span class="label-text">Remember me</span>
                        <input name="remember" type="checkbox" checked="checked" id="customCheck" class="checkbox checkbox-primary" />
                    </label>
                </div>
                </form>
            </form>
    </div>
</div>
@endsection
