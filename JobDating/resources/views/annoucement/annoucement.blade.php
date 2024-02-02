

@extends('layout.nav')
@section('content')
    <div class="p-4">
        <div class="text-center"><h1 class="mb-2">Add a new annoucment</h1></div>
        <form class="text-center" action="{{route('annoucement.create')}}" method="POST">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
            <input class="px-4 py-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="title" placeholder="the company's name here"></div>

            <div class="relative z-0 w-full mb-5 group">
            <input class="px-4 py-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="content" placeholder="the annoucement content here"></div>

            <div class="relative z-0 w-full mb-5 group">
            <select class="px-4 py-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="company_id">
                <option value="">Select Parent Company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $company->parent_company_id == $company->id ? 'selected' : '' }}>
                        {{ $company->company_name }}
                    </option>
                @endforeach
            </select></div>

            <div class="mx-auto">
                <button class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
                    <div class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                    <span class="relative text-black group-hover:text-white">Add</span>
                </button>
            </div>
        </form>
    </div>

    <section class="py-1 bg-blueGray-50">
        <div class="w-full xl:w-8/10 mb-12 xl:mb-0 px-4 mx-auto">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
              <div class="flex flex-wrap items-center">
        
                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <form action="{{ route('annoucements.deleteAll') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" id="deleteAllAnnoucements" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Delete all</button>

                    </form>
                </div>

              </div>
            </div>
        
    <div class="block w-full overflow-x-auto">
        <table class="items-center bg-transparent w-full border-collapse">
            <thead>
                <tr> <!-- Corrected from <th> to <tr> -->
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Title of the annoucment</th >
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Content</th>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Company name</th>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">date de creaction</th>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($annoucements as $annoucement)
                <tr> 
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">{{$annoucement['title']}}</td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">{{$annoucement['content']}}</td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">{{$annoucement->company->company_name}}</td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">{{$annoucement->company->created_at}}</td>
                    <td class="flex border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">

                        {{-- <a href="{{ route('annoucement.edit', ['annoucment' => $annoucement->id]) }}">
                            <button class="mr-4 group relative h-8 w-32 overflow-hidden rounded-lg bg-white text-sm shadow">
                                <div class="absolute inset-0 w-2 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                                <span class="relative text-black group-hover:text-white">Update</span>
                            </button>
                        </a> --}}
                        <a href="{{ route('annoucement.edit', ['annoucment' => $annoucement->id]) }}">
                            <button class="mr-4 group relative h-8 w-32 overflow-hidden rounded-lg text-white text-sm shadow">
                                <div class="absolute inset-0 w-2 bg-green-700 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                                <span class="relative text-black group-hover:text-white">Update</span>
                            </button>
                        </a>

                        <form action="{{ route('annoucement.delete', ['annoucment' => $annoucement->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="mr-4 group relative h-8 w-32 overflow-hidden rounded-lg text-white text-sm shadow">
                                <div class="absolute inset-0 w-2 bg-red-700 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                                <span class="relative text-black group-hover:text-white">Delete</span>
                        </form>     

                        <a href="{{ route('annoucement.singlePage', ['annoucment' => $annoucement->id]) }}"> 
                            <button class="mr-4 group relative h-8 w-32 overflow-hidden rounded-lg text-white text-sm shadow">
                            <div class="absolute inset-0 w-2 bg-pink-700 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                            <span class="relative text-black group-hover:text-white">Show</span>
                        </button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>   
    <script>
        document.getElementById('deleteAllAnnoucements').addEventListener('click', function(event) {
            event.preventDefault();

            if (confirm('Êtes-vous sûr de vouloir supprimer toutes les annonces ?')) {
                fetch("{{ route('annoucements.deleteAll') }}", {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Faire quelque chose après la suppression (mise à jour de l'interface, afficher un message, etc.)
                    console.log(data);

                    // Mettre à jour l'interface utilisateur sans recharger la page
                    // Vous pouvez utiliser des techniques comme mettre à jour une liste d'annonces, etc.
                    // Cela dépend de la structure de votre interface.

                    alert(data.message); // Vous pouvez remplacer cela par une mise à jour plus sophistiquée de l'interface.
                })
                .catch(error => console.error('Erreur lors de la suppression des annonces:', error));
            }
        });
    </script>
@endsection
