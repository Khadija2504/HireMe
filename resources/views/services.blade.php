@extends('layout.master')
@section('main')
<main class="container mx-auto px-4 py-8">
    <section id="content" class="bg-white shadow-md rounded-lg p-6 shadow-md">
        <h2 class="text-3xl font-bold mb-4">Our services</h2>
        <p class="text-gray-800 mb-6">Plastic surgery is arguably the surgical speciality with the widest ranging palate of subspecialties. Plastic surgery does not own a ‘tissue’, as our orthopaedic or dermatologic colleagues, for example, deal specifically with bone or skin; instead, plastics delivers its ethos of problem-solving and knowledge of manipulating tissues just within the range of their anatomical and vascular limitations to reconstruct functional and morphological deficits.</p>

        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($services as $service)
            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">{{$service->titre}} <strong style="margin-left: 20%;">{{$service->price}}$</strong></h3>
                <p class="text-gray-700 mb-4">{{$service->description}} <br>
                    By : {{$service->user->Nom}} {{$service->user->Prenom}}<br>
                    Create at : {{$service->created_at}} <br>
                    Updated at : {{$service->updated_at}} <br>
                    Category: {{ $service->categorie->category_name}}
                </p>
                <div class="mt-8">
                    <form class="inline" action="{{route('contact',$service->id)}}" method="GET">
                        <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                            Ask anything
                        </button>
                    </form>
                </div>
                
            </li>
            @endforeach
        </ul>
    </section>
</main>
@endsection