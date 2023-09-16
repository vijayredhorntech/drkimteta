@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[30vh] text-right bg-[url({{asset('/assets/images/services/banner16.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>

    <div class="w-full h-max mt-4 px-2">
        <div class="w-full py-2 flex justify-center">
            <span class="font-['Amiri'] lg:text-[40px] md:text-[40px] sm:text-[40px] text-[30px] text-[#2f6246] font-semibold">Our exclusive Products</span>
        </div>

        <div class="xl:w-[60%] lg:w-[80%] md:w-[80%] w-[90%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 py-4 lg:px-8 md:px-6 ">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 ">
                <div class="w-full h-max rounded-md border-[1px] border-gray-300  hover:shadow-lg hover:shadow-gray-500 transition ease-in-out delay-150">
                    <div class="w-full h-72 bg-gray-100  rounded-md p-2 relative border-b-[1px] border-b-gray-300 overflow-hidden">
                        <a href="{{route('productDetails')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/products/3.jpg')}}" alt=""></a>
                          <div class=" w-full h-full absolute top-0 left-0 transition ease-in-out duration-1000 opacity-0 hover:opacity-100 p-2 ">
                              <a href="{{route('productDetails')}}"> <img class="  w-full h-full rounded-md object-cover" src="{{asset('/assets/images/products/4.jpg')}}" alt=""></a>

                          </div>
                        <img class="absolute top-0 left-0 h-12 w-12 rounded-md" src="{{asset('/assets/images/logo/logo (2).png')}}" alt="">
                    </div>

                    <div class="p-2 flex flex-col">
                        <a href="{{route('productDetails')}}">
                            <span class="text-black font-bold text-[20px]">Vitamin A</span>

                        </a>
                        <span class="text-gray-500 font-normal text-[14px]"> No Reveiws Yet</span>
                    </div>

                    <div class="flex justify-between p-2">
                        <div>
                            <span class="text-black font-bold text-[20px]">₹ 890</span>

                        </div>

                        <div class="flex gap-2">
                            <a href="{{route('cart')}}"><button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">Add to Cart</button>
                            </a>
                            <a href="{{route('checkout')}}">
                                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">Buy Now</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
