@extends('layout.master')
@section('main')
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="form-container sign-up-container">
                    <h2 class="text-xl font-bold mb-4"> Modify this service </h2>
                    
                    <form class="p-4 md:p-5" action="{{ route('update', ['id' => $service->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="grid gap-4 mb-4 grid-cols-2">

                            <div class="col-span-2">
                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Title</label>
                                <input type="text" name="titre" id="" value="{{$service->titre}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                            </div>

                            <div class="col-span-2">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 text-black">Categorie</label>
                                <select id="category" name="categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500">
                                    <option value="{{$service->category_id}}">{{$categorie->category_name}}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="col-span-2">
                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Description</label>
                                <input name="description" value="{{$service->description}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                            </div>

                        </div>
                        <button type="submit" name="store" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                            Modify
                        </button>
                    </form>
                </div>
</div>
@endsection
