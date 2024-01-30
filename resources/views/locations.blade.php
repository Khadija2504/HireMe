@extends('layout.master')
@section('main')
<main class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6 shadow-md">
        <h2 class="text-3xl font-bold">Our locations</h2>
        <p class="mt-4">At the Manchester Centre for Plastic Surgery and Burns, we treat over 5000 patients per year,
            including adults and children, who have a wide range of conditions falling under the scope of Plastic
            Surgical practice. In this section of the website, we explain how our services are distributed throughout
            the city and the extensive range of clinics we offer.</p>
        <p class="mt-4">We have departments at the following locations. Please click on each to find out more:</p>
        <ul class="mt-4 space-y-4">
            <li>
                <div class="card rounded-lg shadow-md p-6">
                    <h3 class="card-title">UHSM, Wythenshawe Hospital</h3>
                    <p class="card-description">Learn more about our services at <a
                                href="https://mcrplasticsurgeryandburns.co.uk//our-locations/uhsm-wythenshawe-hospital/"
                                class="card-link">Wythenshawe Hospital</a>.</p>
                </div>
            </li>
            <li>
                <div class="card rounded-lg shadow-md p-6">
                    <h3 class="card-title">UHSM, Withington Community Hospital</h3>
                    <p class="card-description">Discover our services at <a
                                href="https://mcrplasticsurgeryandburns.co.uk//our-locations/uhsm-withington-community-hospital/"
                                class="card-link">Withington Community Hospital</a>.</p>
                </div>
            </li>
            <li>
                <div class="card rounded-lg shadow-md p-6">
                    <h3 class="card-title">RMCH, Royal Manchester Children's Hospital</h3>
                    <p class="card-description">Explore the services available at <a
                                href="https://mcrplasticsurgeryandburns.co.uk//our-locations/rmch-royal-manchester-childrens-hospital/"
                                class="card-link">Royal Manchester Children's Hospital</a>.</p>
                </div>
            </li>
            <li>
                <div class="card rounded-lg shadow-md p-6">
                    <h3 class="card-title">Other hospitals</h3>
                    <p class="card-description">Find out about our services at <a
                                href="https://mcrplasticsurgeryandburns.co.uk//our-locations/other-hospitals/"
                                class="card-link">other hospitals</a> in the area.</p>
                </div>
            </li>
        </ul>
    </div>
</main>
@endsection