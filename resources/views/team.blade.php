@extends('layout.master')
@section('main')
<main class="container mx-auto px-4 py-8">
    <article class="bg-white shadow-md rounded-lg p-6 shadow-md">
        <h2 class="text-3xl font-bold mb-4">Our team</h2>
        <p class="text-gray-800 mb-6">At the Manchester Centre for Plastic Surgery and Burns, our 14 consultant surgeons are central to our service. They are supported by a large team of trainee and trust-appointed juniors, as well as our ward and specialist nurses and a wide variety of allied health professionals. Explore the links below to meet the team.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">Our consultants</h3>
                <a href="https://mcrplasticsurgeryandburns.co.uk//our-team/our-consultants/" class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">View Consultants</a>
            </div>
            <div class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">Other surgeons</h3>
                <a href="https://mcrplasticsurgeryandburns.co.uk//our-team/other-surgeons/" class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">View Other Surgeons</a>
            </div>
            <div class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">Trainee plastic surgeons</h3>
                <a href="https://mcrplasticsurgeryandburns.co.uk//our-team/trainee-plastic-surgeons/" class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">View Trainee Plastic Surgeons</a>
            </div>
            <div class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">Allied professionals</h3>
                <a href="https://mcrplasticsurgeryandburns.co.uk//our-team/allied-professionals/" class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">View Allied Professionals</a>
            </div>
        </div>
    </article>
</main>
@endsection