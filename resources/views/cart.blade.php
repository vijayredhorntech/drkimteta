@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[30vh] text-right bg-[url({{asset('/assets/images/services/banner16.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>

    <div class="w-full flex px-2 mb-4">
            <!-- bootstrap image gallery 1 -->
            <div class="w-full lg:w-[70%] w-[100%] mx-auto">
                <div class="w-full">
                    <div class="w-full flex justify-center mt-8">
                        <span class="font-bold text-black text-[25px]">Your Cart:-</span>
                    </div>
                </div>

                <div class="w-full mt-10 flex lg:flex-row md:flex-row flex-col" style="margin-bottom: 20px">
                    <div class="lg:w-[40%] md:w-[40%] w-[100%] flex">
                        <img class="w-[100px] h-[100px] rounded-md object-cover" src="{{asset('/assets/images/products/3.jpg')}}"  alt="">
                        <span class="font-bold text-[20px] text-black ml-4 my-auto">Vitamin A</span>
                    </div>
                    <div class="lg:w-[60%] md:w-[60%] w-[100%] flex" style="justify-content: space-evenly">
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2">Price</span>
                            <span class="font-bold text-[20px] text-black mt-2">₹ 600</span>
                        </div>
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2">Quantity</span>
                            <input class="mt-2 w-[50px] border-[1px] border-[#437158]  rounded-sm focus:ring-0 focus:outline-none focus:border-[#437158] " type="number" value="1">
                        </div>
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2"> Sub Total</span>
                            <span class="font-bold text-[20px] text-black mt-2">₹ 600</span>
                        </div>
                        <div class="my-auto flex flex-col ">
                            <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold p-2 rounded-sm text-xs" > <i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full flex justify-end">
                        <a href="{{route('shop')}}">
                            <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs" >Continue Shopping </button>
                        </a>
                    </div>
                </div>

                <div class="container mx-auto mt-8 p-8">
                    <div class="flex lg:flex-row md:flex-row flex-col gap-4">
                        <!-- Billing Address Form (Left Side) -->
                        <div class="lg:w-2/3 md:w-2/3 w-full pr-8 border-[1px] border-[#437158] p-4 rounded-md">
                            <form>
                                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-4">
                                    <div class="mb-4 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full">
                                        <label for="name" class="block text-gray-700 font-semibold mb-2">Coupon Discount</label>
                                        <input type="text" id="name" name="name" class="w-full  px-4 py-3 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0 " placeholder="Coupon Code:" required>
                                    </div>
                                    <div class="mb-4 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full flex flex-col">
                                        <label for="name" class="block text-gray-700 font-semibold mb-2">&nbsp</label>

                                        <a href="{{route('contact')}}" >
                                            <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 h-max my-auto text-md font rounded-sm font-bold w-max">Apply Coupon</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="lg:w-1/3 md:w-1/3 w-full">
                            <div class="bg-white shadow-lg shadow-[#437158] p-4 rounded-lg">
                                <div class="flex flex-col">
                                    <div class="mb-2l mb-4">
                                        <span class="font-semibold">Sub Total:</span> ₹ 900.00<br>
                                        <span class="font-semibold">Shipping:</span> Free
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <span class="text-lg font-semibold">Total:</span> ₹ 2000.00
                                </div>
                                <div class="mt-10 flex justify-end">
                                    <a href="{{route('checkout')}}" >
                                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 h-max my-auto text-sm font rounded-sm  font-bold w-max">Proceed To Checkout</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection











<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 ">
    <div
        class="w-full h-max rounded-md border-[1px] border-gray-300  hover:shadow-lg hover:shadow-gray-500 transition ease-in-out delay-150">
        <div
            class="w-full h-72 bg-gray-100  rounded-md p-2 relative border-b-[1px] border-b-gray-300 overflow-hidden">
            <a href="{{route('productDetails')}}"> <img class="w-full h-full rounded-md object-cover"
                                                        src="{{asset('/assets/images/products/3.jpg')}}"
                                                        alt=""></a>
            <img class="absolute top-0 left-0 h-12 w-12 rounded-md z-10"
                 src="{{asset('/assets/images/logo/logo (2).png')}}" alt="">
            <div
                class="absolute top-0 left-0 w-full h-full p-2 opacity-0 hover:opacity-100 rounded-md transition ease-in duration-200 ">
                <div class="w-full h-full relative">
                    <a href="{{route('productDetails')}}"><img
                            class="w-full h-full rounded-t-md object-cover"
                            src="{{asset('/assets/images/products/2.jpg')}}" alt="">
                    </a>

                    <div class="absolute top-0 right-0 w-max h-max flex flex-col gap-2 p-4">
                        <a href="{{route('wishlist')}}">
                            <button
                                class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                <i class="fa fa-heart"></i></button>
                        </a>
                        <a href="{{route('cart')}}">
                            <button
                                class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                <i class="fa fa-shopping-cart"></i></button>
                        </a>
                    </div>

                    <div class="absolute bottom-2 left-0  w-full px-6">
                        <a href="{{route('productDetails')}}">
                            <button
                                class=" bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-full  p-2 rounded-sm font-semibold">
                                <i class="fa fa-eye mr-1"></i> View Details
                            </button>
                        </a>
                    </div>
                </div>

            </div>
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
                <a href="{{route('cart')}}">
                    <button
                        class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                        Add to Cart
                    </button>
                </a>
                <a href="{{route('checkout')}}">
                    <button
                        class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                        Buy Now
                    </button>
                </a>
            </div>
        </div>

    </div>
    <div
        class="w-full h-max rounded-md border-[1px] border-gray-300  hover:shadow-lg hover:shadow-gray-500 transition ease-in-out delay-150">
        <div
            class="w-full h-72 bg-gray-100  rounded-md p-2 relative border-b-[1px] border-b-gray-300 overflow-hidden">
            <a href="{{route('productDetails')}}"> <img class="w-full h-full rounded-md object-cover"
                                                        src="{{asset('/assets/images/products/4.jpg')}}"
                                                        alt=""></a>
            <img class="absolute top-0 left-0 h-12 w-12 rounded-md z-10"
                 src="{{asset('/assets/images/logo/logo (2).png')}}" alt="">
            <div
                class="absolute top-0 left-0 w-full h-full p-2 opacity-0 hover:opacity-100 rounded-md transition ease-in duration-200 ">
                <div class="w-full h-full relative">
                    <a href="{{route('productDetails')}}"><img
                            class="w-full h-full rounded-t-md object-cover"
                            src="{{asset('/assets/images/products/1.jpg')}}" alt="">
                    </a>

                    <div class="absolute top-0 right-0 w-max h-max flex flex-col gap-2 p-4">
                        <a href="{{route('wishlist')}}">
                            <button
                                class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                <i class="fa fa-heart"></i></button>
                        </a>
                        <a href="{{route('cart')}}">
                            <button
                                class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                <i class="fa fa-shopping-cart"></i></button>
                        </a>
                    </div>

                    <div class="absolute bottom-2 left-0  w-full px-6">
                        <a href="{{route('productDetails')}}">
                            <button
                                class=" bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-full  p-2 rounded-sm font-semibold">
                                <i class="fa fa-eye mr-1"></i> View Details
                            </button>
                        </a>
                    </div>
                </div>

            </div>
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
                <a href="{{route('cart')}}">
                    <button
                        class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                        Add to Cart
                    </button>
                </a>
                <a href="{{route('checkout')}}">
                    <button
                        class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                        Buy Now
                    </button>
                </a>
            </div>
        </div>

    </div>
    <div
        class="w-full h-max rounded-md border-[1px] border-gray-300  hover:shadow-lg hover:shadow-gray-500 transition ease-in-out delay-150">
        <div
            class="w-full h-72 bg-gray-100  rounded-md p-2 relative border-b-[1px] border-b-gray-300 overflow-hidden">
            <a href="{{route('productDetails')}}"> <img class="w-full h-full rounded-md object-cover"
                                                        src="{{asset('/assets/images/products/2.jpg')}}"
                                                        alt=""></a>
            <img class="absolute top-0 left-0 h-12 w-12 rounded-md z-10"
                 src="{{asset('/assets/images/logo/logo (2).png')}}" alt="">
            <div
                class="absolute top-0 left-0 w-full h-full p-2 opacity-0 hover:opacity-100 rounded-md transition ease-in duration-200 ">
                <div class="w-full h-full relative">
                    <a href="{{route('productDetails')}}"><img
                            class="w-full h-full rounded-t-md object-cover"
                            src="{{asset('/assets/images/products/1.jpg')}}" alt="">
                    </a>

                    <div class="absolute top-0 right-0 w-max h-max flex flex-col gap-2 p-4">
                        <a href="{{route('wishlist')}}">
                            <button
                                class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                <i class="fa fa-heart"></i></button>
                        </a>
                        <a href="{{route('cart')}}">
                            <button
                                class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                <i class="fa fa-shopping-cart"></i></button>
                        </a>
                    </div>

                    <div class="absolute bottom-2 left-0  w-full px-6">
                        <a href="{{route('productDetails')}}">
                            <button
                                class=" bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-full  p-2 rounded-sm font-semibold">
                                <i class="fa fa-eye mr-1"></i> View Details
                            </button>
                        </a>
                    </div>
                </div>

            </div>
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
                <a href="{{route('cart')}}">
                    <button
                        class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                        Add to Cart
                    </button>
                </a>
                <a href="{{route('checkout')}}">
                    <button
                        class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                        Buy Now
                    </button>
                </a>
            </div>
        </div>

    </div>
</div>

