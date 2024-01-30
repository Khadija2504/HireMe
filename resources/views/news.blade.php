@extends('layout.master')
@section('main')
<main class="container mx-auto px-4 py-8">
<article class="bg-white shadow-md rounded-lg p-6 heightSmoothing">
    <h2 class="text-3xl font-bold mb-4">News page</h2>
    <p class="text-gray-800 mb-6">Stay up to date with the latest news from the Manchester Centre for Plastic Surgery and Burns.</p>

    <div id="latest-posts"></div>
    <div id="load-more-container" class="text-center">
    <button id="load-more-button" class="inline-block px-6 py-3 bg-blue-700 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300 mt-2">Load More</button>
    </div>
</article>
</main>
@endsection