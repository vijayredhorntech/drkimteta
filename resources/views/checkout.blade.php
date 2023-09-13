@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[30vh] text-right bg-[url({{asset('/assets/images/services/banner16.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>


    <div class="w-full flex px-2 mb-4 mt-4">
            <!-- bootstrap image gallery 1 -->
            <div class="w-full lg:w-[70%] w-[100%] mx-auto">
                <div class="w-full">
                    <div class="w-full flex justify-center mb-8">
                        <span class="font-bold text-black text-[25px]">CHECKOUT</span>
                    </div>

                </div>


                <div class="w-full flex gap-4 lg:flex-row md:flex-row flex-col mt-10">
                    <div class="lg:w-[50%] md:w-[50%] w-[100%] rounded-md">
                        <div class=" bg-[#c9eecf] p-4 rounded-md">
                            <div class="flex flex-col w-full mb-2">
                                <span class="font-bold text-[20px] text-black">BILLING DETAILS</span>
                            </div>

                            <div class="flex w-full mb-2 gap-4 justify-between">
                                <div class="w-[50%]">
                                    <label class="text-gray-500 " for="firstName">First Name</label>
                                    <input class="border-[1px] border-black text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="text" placeholder="First Name">
                                </div>
                                <div class="w-[50%]">
                                    <label class="text-gray-500 " for="lastName">Last Name</label>
                                    <input class="border-[1px] border-black text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="flex flex-col w-full mb-2" >
                                <label class="text-gray-500 " for="firstName">Country</label>
                                <select name="" id=""  class="border-[1px] border-black text-gray-400 text-[20px] p-2 focus:outline-none focus:ring-0 rounded-sm w-full">
                                    <option class="text-gray-400" value="India">India</option>
                                    <option class="text-gray-400">India</option>
                                    <option class="text-gray-400">India</option>
                                    <option class="text-gray-400">India</option>
                                </select>
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label class="text-gray-500 " for="">Street Address</label>
                                <input class="border-[1px] border-black text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="text" name="" id="" placeholder="House Number and street name">
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label class="text-gray-500 ">Town/City</label>
                                <input class="border-[1px] border-black text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="text" name="" id="" placeholder="Town">
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label class="text-gray-500 " for="firstName">State</label>
                                <select class="border-[1px] border-black text-[20px] p-2 text-gray-400 rounded-sm w-full focus:outline-none focus:ring-0" name="" id="">
                                    <option class="text-gray-400">Himachal Pradesh</option>
                                    <option class="text-gray-400">Himachal Pradesh</option>
                                    <option class="text-gray-400">Himachal Pradesh</option>
                                    <option class="text-gray-400">Himachal Pradesh</option>
                                </select>
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label class="text-gray-500 " >Pin Code</label>
                                <input class="border-[1px] border-black text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="Number" name="" id="" placeholder="100000">
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label  class="text-gray-500 ">Number</label>
                                <input class="border-[1px] border-black text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="number " name="" id="" placeholder="+91 1234567890">
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label  class="text-gray-500 ">Email</label>
                                <input class="border-[1px] border-black text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="email" name="" id="" placeholder="sample@gmail.com">
                            </div>
                        </div>

                    </div>

                    <div class="lg:w-[50%] md:w-[50%] w-[100%] rounded-md ">
                        <div class=" bg-[#c9eecf] p-4 rounded-md">
                            <div class="flex justify-between font-bold text-[20px] text-[#2f6246] mb-6 border-b-[2px] border-b-[black]">
                                <span class="font-bold text-[20px] text-black">YOUR ORDERS</span>
                            </div>
                            <div class="flex justify-between font-bold text-[18px] text-[#2f6246] mb-6 border-b-[2px] border-b-[black]">
                                <span>PRODUCT</span>
                                <span>SUB TOTAL</span>
                            </div>
                            <div class="flex flex-col font-bold text-[20px] text-[#2f6246] mb-6 border-b-[2px] border-b-[black] border-dotted">
                                <div class="flex justify-between text-[16px] text-black">
                                    <span>Vitamin A</span>
                                    <span>₹2500</span>
                                </div>
                                <div class="flex justify-between text-[16px] text-black">
                                    <span>Vitamin A</span>
                                    <span>₹2500</span>
                                </div>
                                <div class="flex justify-between text-[16px] text-black">
                                    <span>Vitamin A</span>
                                    <span>₹2500</span>
                                </div>
                                <div class="flex justify-between text-[16px] text-black">
                                    <span>Vitamin A</span>
                                    <span>₹2500</span>
                                </div>


                            </div>

                            <div class="flex justify-between font-bold text-[18px] text-[#2f6246] mb-6 border-b-[2px] border-b-[black]">
                                <span>Sub Total</span>
                                <span>₹2500</span>
                            </div>
                            <div class="flex justify-between font-bold text-[20px] text-[#2f6246] mb-6 border-b-[2px] border-b-[black]">
                                <span>Shipping</span>
                                <span>Free Shipping</span>
                            </div>
                            <div class="flex justify-between font-bold text-[20px] text-[#2f6246] mb-2">
                                <span>Total:-</span>
                                <span>₹2500</span>
                            </div>
                        </div>
                        <div class="flex justify-end mt-2" >
                            <a href="{{route('checkout')}}">
                                <button class="bg-[#2f6246] text-white font-semibold px-4 py-3 rounded-sm text-xs" >Place Order</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
    </div>



@endsection
