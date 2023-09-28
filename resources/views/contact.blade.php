<x-frontend-layout>
    <div class="w-full">
        <div class="w-full h-[50vh] text-right p-6 flex lg:flex-row md:flex-row flex-col-reverse justify-end "
         style="background: url('{{asset('/assets/images/about/about-bg.jpg')}}'); background-repeat: no-repeat; background-position: center; background-size:cover;">
        </div>
    </div>



    <div class="w-full">
        <div class="w-full text-right py-20 flex flex-col ">
            <div class=" lg:w-[60%] w-full px-2 mx-auto flex lg:flex-row-reverse md:flex-row-reverse flex-col mt-4 gap-6">
                <div class="lg:w-1/2 md:w-1/2 w-full lg:h-[500px] md:h-[500px] h-[300px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d54914.41894760404!2d76.839677!3d30.657871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f94c78077e03d%3A0xd2999931358175b!2sThe%20Hermitage%20Plaza!5e0!3m2!1sen!2sus!4v1694581918821!5m2!1sen!2sus"  class="h-full w-full rounded-md" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full h-[500px] flex justify-center">
                    <div class="w-full h-full  bg-white p-6 text-left flex flex-col rounded-md">
                        <span class=" text-[20px]  text-gray-400 font-normal ">Have Any Query? Let's Connect</span>
                        <form action="" class="w-full flex flex-col">
                            <div class="flex">
                                <input type="text" placeholder="Full Name" class="px-2 mt-4 py-1 bg-white  py-2 shadow-md focus:ring-0 focus:outline-none border-0 shadow-gray-200 rounded-sm w-full">
                            </div>
                            <div class="flex">
                                <input type="number" placeholder="Phone Number" class="px-2 mt-4 py-1 bg-white  py-2 shadow-md focus:ring-0 focus:outline-none border-0 shadow-gray-200 rounded-sm w-full">
                            </div>
                            <div class="flex">
                                <input type="email" placeholder="Email Address" class="px-2 mt-4 py-1 bg-white  py-2 shadow-md focus:ring-0 focus:outline-none border-0 shadow-gray-200 rounded-sm w-full">
                            </div>
                            <div class="flex">
                                <textarea  placeholder="Email Address" class="px-2 mt-4 py-1 bg-white  py-2 shadow-md focus:ring-0 focus:outline-none border-0 shadow-gray-200 rounded-sm w-full"></textarea>
                            </div>
                            <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-max py-2 px-8 rounded-sm mt-4 ">Submit</button>

                            {{--                           <p  class=" text-[15px] text-green-500 mt-4">--}}
                            {{--                               Your Appointment has been booked successfully.--}}
                            {{--                           </p>--}}
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-frontend-layout>
