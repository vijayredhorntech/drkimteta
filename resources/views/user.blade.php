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
                <div class="w-full flex justify-center mb-2">
                    <span class="font-bold text-black text-[25px]">Sign In</span>
                </div>

            </div>


            <div class="w-full flex ">
                <div class="lg:w-[50%] md:w-[70%] w-[100%] mx-auto rounded-md">
                    <div class=" bg-white  shadow-xl shadow-gray-300 p-4 rounded-md">
                        <div class="flex justify-center text-center w-full mb-2">
                            <span class="font-bold text-[15px] text-gray-500">Sign in to your account to discover all great features in this template.</span>
                        </div>

                        <div class="flex w-full mb-2 gap-4 justify-between">
                            <div class="w-[50%]">
                                <label class="text-gray-500 " for="firstName">First Name</label>
                                <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="text" placeholder="First Name">
                            </div>
                            <div class="w-[50%]">
                                <label class="text-gray-500 " for="lastName">Last Name</label>
                                <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="text" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="flex flex-col w-full mb-2">
                            <label  class="text-gray-500 ">Number</label>
                            <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="number " name="" id="" placeholder="+91 1234567890">
                        </div>
                        <div class="flex flex-col w-full mb-2">
                            <label  class="text-gray-500 ">Email</label>
                            <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 " type="email" name="" id="" placeholder="sample@gmail.com">
                        </div>

                        <div class="flex  justify-center w-full mb-2 mt-8">
                            <button class="bg-[#2f6246] text-white font-semibold w-full px-8 py-3 rounded-sm text-lg" >Sign In</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>



@endsection
