@extends('layout.nav')
@section('content')
    
    <a href="/company">
        <button class="w-8">
            <img src="{{ URL::asset('assets/images/fleche.svg') }}" alt="">
        </button>
    </a>
    
        <form class="text-center px-4" action="{{ route('company.update', [ $company->id]) }}" method="POST">
            <div><h1 class="ml-2 text-center p-4">Update the company informations here</h1></div>
                @csrf
                @method('PATCH')
            <div class="relative z-0 w-full mb-5 group">
                <input class="px-4 py-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="company_name" placeholder="the company name here" value="{{$company['company_name']}}">
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <textarea class="px-4 py-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="company_role" placeholder="tap the company's roles">{{$company['company_role']}}</textarea>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input class="px-4 py-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="address" placeholder="tap the company's address here" value="{{$company['address']}}">
            </div>
            
            <div class="mx-auto">
                <button class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
                    <div class="absolute inset-0 w-3 bg-blue-400 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                    <span class="relative text-black group-hover:text-white">Save changes</span>
                </button>
            </div>
            
        </form>  
    
@endsection