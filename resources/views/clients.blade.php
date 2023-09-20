@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class=" relative w-full h-[50vh] text-right bg-[url({{asset('/assets/images/clients/banner.jpg')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
             <div class="absolute top-0 left-0 w-full h-full bg-black/25">

             </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto px-4 mt-6 text-center">
        <h1 class="text-2xl text-[#437158] font-semibold mb-4">List of Our Clients</h1>
        <div class="grid sm:grid-cols-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-12 mb-6">x
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/divisha.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Divisa Herbal Care</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/mother.jpg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Mother Sparsh</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/ozon.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Ozone Pharmaceuticals</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/alna.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Alna Biotech</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/amulya.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Amulya Herbals</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/ng.jpg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">NG Electra</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/bhandora.jpg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Bhandora Organics</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/sanify.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Sanify Pharma</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/bio.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Biometrix Labs</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/reli.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Relief Pharmaceuticals</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/ayush.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Ayush Herbal & Health Care</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/dr.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Dr Sabharwal Wound Care Unit</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/br.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Brahm Herbals</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/ar.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Areva Herbals</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/di.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Divinity Health Care</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/fag.jpg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Fag India </h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/sm.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Sirmour Herbolife</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/wr.png')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Wriglies Pvt Ltd</h2>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/clients/ro.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Roseate Pharma</h2>
                </div>
            </div>
        </div>
    </div>







@endsection
