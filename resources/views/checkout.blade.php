@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[30vh] text-right bg-[url({{asset('/assets/images/services/banner16.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>


    <div class="w-full flex px-2 mb-4 mt-4">
            <div class="w-full lg:w-[70%] w-[100%] mx-auto">
                <div class="w-full">
                    <div class="w-full flex justify-center mb-8">
                        <span class="font-bold text-black text-[25px]">CHECKOUT</span>
                    </div>
                </div>
                <div class="container mx-auto mt-8 p-8">
                    <div class="flex lg:flex-row md:flex-row flex-col gap-4">
                        <!-- Billing Address Form (Left Side) -->
                        <div class="lg:w-2/3 md:w-2/3 w-full pr-8 border-[1px] border-[#437158] p-4 rounded-md">
                            <h2 class="text-2xl font-semibold mb-4">Billing Address</h2>
                            <form>
                                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-4">
                                    <div class="mb-4 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full">
                                        <label for="name" class="block text-gray-700 font-semibold mb-2">First Name</label>
                                        <input type="text" id="name" name="name" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0 " placeholder="First Name:" required>
                                    </div>
                                    <div class="mb-4 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full">
                                        <label for="name" class="block text-gray-700 font-semibold mb-2">Last Name</label>
                                        <input type="text" id="name" name="name" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0 " placeholder="Last Name:" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">Country</label>
                                    <select  id="email" name="email" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0" placeholder="Your Email Address:" required>
                                        <option class="rounded-sm" value="India">India</option>
                                        <option class="rounded-sm" value="India">India</option>
                                        <option class="rounded-sm" value="India">India</option>
                                        <option class="rounded-sm" value="India">India</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">Street Address</label>
                                    <input type="text" id="email" name="email" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0" placeholder="Your Address:" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">City</label>
                                    <input type="text" id="email" name="email" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0" placeholder="Your City:" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">State</label>
                                    <input type="text" id="email" name="email" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0" placeholder="Your State:" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">Pin Code</label>
                                    <input type="number" id="email" name="email" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0" placeholder="Zip Code:" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                                    <input type="email" id="email" name="email" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0" placeholder="Your Email Address:" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">Phone</label>
                                    <input type="email" id="email" name="email" class="w-full  px-4 py-2 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0" placeholder="Your Phone Number" required>
                                </div>
                            </form>
                        </div>

                        <!-- Amount Details (Right Side) -->
                        <div class="lg:w-1/3 md:w-1/3 w-full">
                            <div class="bg-white shadow-lg shadow-[#437158] p-4 rounded-lg">
                                <h2 class="text-2xl font-semibold mb-4">Amount Details</h2>

                                <div class="flex flex-col">
                                    <div class="mb-2l mb-4">
                                        <span class="font-semibold">Product Name:</span> Vitamin A<br>
                                        <span class="font-semibold">Price:</span> ₹ 900.00
                                    </div>
                                    <div class="mb-2l">
                                        <span class="font-semibold">Product Name:</span> Face Wash<br>
                                        <span class="font-semibold">Price:</span> ₹ 1050.00
                                    </div>

                                </div>
                                <!-- Add more details like quantity, subtotal, taxes, etc. -->
                                <div class="mt-4">
                                    <span class="text-lg font-semibold">Total:</span> ₹ 2000.00
                                </div>
                                <div class="mt-10 flex justify-end">
                                    <a href="#" >
                                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 h-max my-auto text-sm font rounded-sm  font-bold w-max">Place Order</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>



@endsection
