@extends('layout.navigation')

@section('content')

        <div class="h-screen md:flex">
            <div
                            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
                <div>
                    <h1 class="text-white font-bold text-4xl font-sans">GoFinance</h1>
                    <p class="text-white mt-1">The most popular peer to peer lending at SEA</p>
                    <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read More</button>
                </div>
                <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            </div>
            <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
                    <form method="POST" action="{{ route('login') }}">
                        <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
			            <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>

                        @csrf

                            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                                <input placeholder="Email Address" class="pl-2 outline-none border-none" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                      
                            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
								fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>

                                <input class="pl-2 outline-none border-none" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        
                        <div class="text-center mt-2">
                            <button class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
                                <div class="absolute inset-0 w-3 bg-purple-400 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                                <span class="relative text-black group-hover:text-white"> {{ __('Login') }}</span>
                            </button>
                        </div>

                        <div class="mt-2">
                            @if (Route::has('password.request'))
                                    <div class="text-center mt-2">
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                @endif
                        </div>
                    </form>
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
</div>
</div>
@endsection
