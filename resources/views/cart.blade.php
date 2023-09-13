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
                            <input class="mt-2 w-[50px] border-[2px] border-black rounded-md" type="number" value="1">
                        </div>
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2"> Sub Total</span>
                            <span class="font-bold text-[20px] text-black mt-2">₹ 600</span>
                        </div>

                        <div class="my-auto flex flex-col ">
                            <button class="bg-[#2f6246] text-white font-semibold p-2 rounded-sm text-xs" > <i class="fa-solid fa-xmark"></i></button>
                        </div>

                    </div>
                </div>
                <div class="w-full mt-10 flex lg:flex-row md:flex-row flex-col" style="margin-bottom: 20px">
                    <div class="lg:w-[40%] md:w-[40%] w-[100%] flex">
                        <img class="w-[100px] h-[100px] rounded-md object-cover" src="{{asset('/assets/images/products/2.jpg')}}"  alt="">

                        <span class="font-bold text-[20px] text-black ml-4 my-auto">Vitamin A</span>

                    </div>
                    <div class="lg:w-[60%] md:w-[60%] w-[100%] flex" style="justify-content: space-evenly">
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2">Price</span>
                            <span class="font-bold text-[20px] text-black mt-2">₹ 600</span>
                        </div>
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2">Quantity</span>
                            <input class="mt-2 w-[50px] border-[2px] border-black rounded-md" type="number" value="1">
                        </div>
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2"> Sub Total</span>
                            <span class="font-bold text-[20px] text-black mt-2">₹ 600</span>
                        </div>

                        <div class="my-auto flex flex-col ">
                            <button class="bg-[#2f6246] text-white font-semibold p-2 rounded-sm text-xs" > <i class="fa-solid fa-xmark"></i></button>
                        </div>

                    </div>
                </div>

                <div class="w-full">
                    <div class="w-full flex justify-end">
                        <a href="{{route('shop')}}">
                            <button class="bg-[#2f6246] text-white font-semibold px-4 py-3 rounded-sm text-xs" >Continue Shopping </button>
                        </a>
                    </div>
                </div>


                <div class="w-full mt-10 flex gap-4 lg:flex-row md:flex-row flex-col">
                    <div class="lg:w-[50%] md:w-[50%] w-[100%] billingAddress bg-[#c9eecf]">
                        <div class=" bg-[#c9eecf] p-4">
                            <div class="font-bold text-[20px] text-black mb-2">
                                <span class="text-[#707070] text-[16px]">Coupon Discount</span>
                            </div>
                            <div class="font-bold text-[20px] text-black mb-4">
                                <input class="width-[200px] border-[1px] border-black rounded-sm py-1" type="text">
                                <button class="bg-[#2f6246] text-white font-semibold px-4 py-3 rounded-sm text-xs" >Apply Coupon</button>
                            </div>
                        </div>

                    </div>

                    <div class="lg:w-[50%] md:w-[50%] w-[100%] checkoutBox bg-[#c9eecf]">
                        <div class="bg-[#c9eecf] p-4">
                            <div class="flex justify-between font-bold text-[20px] mb-2 text-[#2f6246]">
                                <span>Subtotal:-</span>
                                <span>₹2500</span>
                            </div>
                            <div class="flex justify-between font-bold text-[20px] mb-2 text-[#2f6246] border-b-2px border-b-black pb-4">
                                <span>Shipping:-</span>
                                <span>Free</span>
                            </div>

                            <div class="flex justify-between font-bold text-[20px] mb-2 text-[#2f6246]">
                                <span>Total:-</span>
                                <span>₹2500</span>
                            </div>
                        </div>
                        <div class="flex justify-end p-2">
                            <a href="{{route('checkout')}}">
                                <button class="bg-[#2f6246] text-white font-semibold px-4 py-3 rounded-sm text-xs" >Proceed to Checkout</button>

                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>


@endsection
