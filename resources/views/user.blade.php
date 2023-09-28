<x-frontend-layout>
    <div class="w-full">
        <div class="w-full h-[30vh] text-right p-6 flex lg:flex-row md:flex-row flex-col-reverse justify-end "
        style="background: url('{{asset('/assets/images/services/banner16.png')}}'); background-repeat: no-repeat; background-position: center; background-size:cover;">
        </div>
    </div>


    <div class="w-full flex px-2 mb-4 mt-4">
        <!-- bootstrap image gallery 1 -->
        <div class="w-full lg:w-[60%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-8">
            <div class="lg:w-[40%] md:w-[40%] w-[100%] h-full">
                <div class="w-full flex h-full ">
                    <div class="w-full mx-auto rounded-md h-full">
                        <div class="shadow-xl shadow-gray-500 p-4 rounded-md"
                        style="background: url('{{asset('/assets/images/appointment/delicate-branch-black.jpg')}}'); background-repeat: no-repeat; background-position: center; background-size:cover;">
                            <div class="w-full">
                                <div class="w-full flex justify-center mb-2">
                                    <span class="font-bold text-white text-[25px]">Sign In</span>
                                </div>

                            </div>
                            <div class="flex justify-center text-center w-full mb-2">
                                <span class="font-bold text-[15px] text-gray-200">Sign in to your account to discover all great features in this template.</span>
                            </div>

                            <div class="flex flex-col w-full mb-2">
                                <label  class="text-gray-200 ">Number</label>
                                <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 placeholder:text-gray-300 " type="email " name="" id="" placeholder="sample@gmail.com">
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label  class="text-gray-200 ">Email</label>
                                <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 placeholder:text-gray-300 " type="password" name="" id="" placeholder="password">
                            </div>

                            <div class="flex  justify-center w-full mb-2 mt-8">
                                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold w-full px-8 py-3 rounded-sm text-lg" >Sign In</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="lg:w-[60%] md:w-[60%] w-[100%]">
                <div class="w-full flex ">
                    <div class="w-full mx-auto rounded-md">
                        <div class=" bg-white border-[1px] border-[#2f6246] p-4 rounded-md">
                            <div class="w-full flex justify-center mb-2">
                                <span class="font-bold text-black text-[25px]">Sign Up</span>
                            </div>
                            <div class="flex w-full mb-2 gap-4 justify-between">

                                <div class="w-[50%]">
                                    <label class="text-gray-500 " for="firstName">First Name</label>
                                    <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 placeholder:text-gray-300 " type="text" placeholder="First Name">
                                </div>
                                <div class="w-[50%]">
                                    <label class="text-gray-500 " for="lastName">Last Name</label>
                                    <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 placeholder:text-gray-300" type="text" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="flex flex-col w-full mb-2">
                                <label  class="text-gray-500 ">Number</label>
                                <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 placeholder:text-gray-300 " type="number " name="" id="" placeholder="+91 1234567890">
                            </div>
                            <div class="flex flex-col w-full mb-2">
                                <label  class="text-gray-500 ">Email</label>
                                <input class="border-[1px] border-gray-400 text-[20px] p-2 rounded-sm w-full focus:outline-none focus:ring-0 placeholder:text-gray-300 " type="email" name="" id="" placeholder="sample@gmail.com">
                            </div>

                            <div class="flex  justify-center w-full mb-2 mt-8">
                                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold w-full px-8 py-3 rounded-sm text-lg" >Create Account</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend-layout>
