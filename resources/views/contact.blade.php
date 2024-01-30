@extends('layout.master')
@section('main')

<main class="container mx-auto px-4 py-8 bg-gray-100">
    <div id="content" class="content sidenav iedit bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4">Contact us</h2>
        <p>We understand that communication is a key component of a patient’s experience. At the Manchester Centre for Plastic Surgery and Burns, we will always be honest and open. There is 24-hour surgical cover at both Wythenshawe and the Royal Manchester Children’s Hospital. Here is a list of other useful contacts.</p>
        <h3>UHSM — Wythenshawe and Withington Community</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 mt-4">
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Switchboard</h4>
                <p>0161 998 7070</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Ward F1</h4>
                <p>0161 291 2195</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Burns Centre</h4>
                <p>0161 291 6313</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Burns &amp; Plastics Outpatients</h4>
                <p>0161 291 xxxx</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Hand Therapy</h4>
                <p>0161 291 xxxx</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Secretaries</h4>
                <p>Please see individual consultants' profiles</p>
            </div>
        </div>
        <h3>RMCH — Royal Manchester Children's Hospital</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Switchboard</h4>
                <p>0161 276 1234</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Ward 77</h4>
                <p>0161 701 7700</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Burns Centre</h4>
                <p>0161 701 8125</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Burns &amp; Plastics Aftercare Clinic</h4>
                <p>0161 701 xxxx</p>
            </div>
            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold">Secretaries</h4>
                <p>Please see individual consultants' profiles</p>
            </div>
        </div>
    </div>
</main>

@endsection
