@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[50vh] text-right bg-[url({{asset('/assets/images/services/banner16.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>

    <div class="w-full h-max mt-4 px-2">
        <div class="w-full py-2 flex justify-center">
            <span class="font-['Amiri'] text-[40px] text-[#2f6246] font-semibold">Our exclusive Products</span>
        </div>

        <div class="xl:w-[60%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 py-4 lg:px-8 md:px-6 ">
            <div class="grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 gap-4 ">
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/1.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/2.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/3.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/4.png')}}" alt=""></a>
                </div>

                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/5.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/6.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/7.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/8.png')}}" alt=""></a>
                </div>

                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/9.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/10.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/11.png')}}" alt=""></a>
                </div>
                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">
                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/12.png')}}" alt=""></a>
                </div>
            </div>

        </div>
    </div>
@endsection
