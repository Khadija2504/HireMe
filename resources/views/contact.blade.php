@extends('layout.master')
@section('main')
<main class="container mx-auto px-4 py-8 bg-gray-100">
    <div id="content" class="content sidenav iedit bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4">Contact us</h2>
        <p>We understand that communication is a key component of a patient’s experience. At the Manchester Centre for Plastic Surgery and Burns, we will always be honest and open. There is 24-hour surgical cover at both Wythenshawe and the Royal Manchester Children’s Hospital. Here is a list of other useful contacts.</p>
        <h3>UHSM — Wythenshawe and Withington Community</h3>

            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">{{$service->titre}} <strong style="margin-left: 20%;">{{$service->price}}$</strong></h3>
                <p class="text-gray-700 mb-4">{{$service->description}} <br>
                    By : {{$service->user->Nom}} {{$service->user->Prenom}} <br>
                    Create at : {{$service->created_at}} <br>
                    Updated at : {{$service->updated_at}} <br>
                    Category: {{ $service->categorie->category_name}}
                </p>
            </li>
            <form action="{{route('addMsg',$service->id)}}" method="GET">
                <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                    add msg or question
                </button>
            </form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 mt-4">
            @foreach ($contact as $cont)

            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold"> {{$cont->message}} </h4>
                <p> {{$cont->created_at}} </p>
                <p>{{$cont->user->Nom}}</p>
            </div>
                            
            @endforeach
        </div>
    </div>
</main>
@endsection
