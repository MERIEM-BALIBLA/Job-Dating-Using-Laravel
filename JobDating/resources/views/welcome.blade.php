
    @extends('layout.navigation')
    @section('content')

    <div class="bg-cover" style="background-image: url('{{ asset('assets/images/background.jpg') }}');
    background-size: cover;
    background-position:center;
    height: 50%;">
        <h1>Find your next tech job.</h1>
        <p>Explore open roles at companies hiring now.</p>
    </div>

    <div class="p-4">
        @if(auth()->check())
            <div class="text-center bg-blue-500 p-4 text-white">
                <h3>{{ Auth::user()->name }} About the new companies</h3>
            </div>
        @else
            <div class="text-center bg-red-500 p-4 text-white">
                <h3>Find out what's new at JobDating</h3>
            </div>
        @endif
    </div>
    
    <div class="flex p-4">
        @foreach($companies as $company)
        <div class="mr-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{URL::asset('assets/images/company.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$company['company_name']}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$company['company_role']}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$company['address']}}</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="p-4">
    <div class="text-center bg-blue-500 p-4 text-white"><h3>About the new annoucement</h3></div>
    </div>
    <div class="flex p-4">
        @foreach($annoucements as $annoucement)
        <div class="mr-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{URL::asset('assets/images/annoucement.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$annoucement['title']}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$annoucement['content']}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$annoucement['company_name']}}</p>
                
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Post here
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    @endsection

</body>
