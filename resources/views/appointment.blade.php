@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[50vh] text-right bg-[url({{asset('/assets/images/appointment/appointment.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>
    <div class="w-full mt-2 mb-8">
        <div class="w-full py-8 text-right bg-[#2f6246] p-6 bg-center bg-cover flex flex-col  ">
            <span class="font-['Amiri'] text-[30px] text-white mx-auto font-normal mt-2">Our Missions</span>
            <p class="font-['Amiri'] text-[20px] text-white text-center mx-auto font-normal mt-2 lg:w-[60%] md:w-[70%] sm:w-[80%] w-[100%]">
                Our mission is to be the leading provider of holistic and natural health solutions, delivering exceptional care and personalized treatments through the ancient wisdom of Ayurveda, and empowering individuals to live their healthiest and happiest lives.
            </p>
        </div>
    </div>

    <div class="w-full">
        <div class="w-full text-right bg-[url({{asset('/assets/images/appointment/delicate-branch-black.jpg')}})]  py-20 bg-center bg-cover flex flex-col ">
           <div class="flex justify-center">
               <span class="font-['Amiri'] text-[35px] text-white font-semibold">Book Your Appointment</span>
           </div>

           <div class=" lg:w-[60%] w-full px-2 mx-auto flex lg:flex-row md:flex-row flex-col mt-4 gap-6">
               <div class="lg:w-1/2 md:w-1/2 w-full lg:h-[500px] md:h-[500px] h-[300px] flex justify-center">
                   <img class="w-full h-full object-cover rounded-md" src="{{asset('/assets/images/appointment/book-appointment.png')}}" alt="">
               </div>
               <div class="lg:w-1/2 md:w-1/2 w-full h-[500px] flex justify-center">
                   <div class="w-full h-full  bg-white p-6 text-left flex flex-col rounded-md">
                       <span class=" text-[35px] text-gray-500 font-semibold mx-auto">Make an Appointment</span>
                       <p  class=" text-[15px] text-gray-500">
                           Fill this form to book appointment and consultation with our expert doctors.
                       </p>
                       <form action="" class="w-full flex flex-col">
                           <div class="flex gap-4">
                                   <input type="text" placeholder="Your Name" class="px-2 mt-4 py-1 bg-white border-[1px] py-2 border-gray-500 rounded-sm lg:w-1/2 md:w-1/2 w-full">
                                    <input type="number" placeholder="Number here" class="px-2 mt-4 py-1 bg-white border-[1px] py-2 border-gray-500 rounded-sm lg:w-1/2 md:w-1/2 w-full">

                           </div>
                           <div class="flex gap-4">
                               <input type="email" placeholder="Email here" class="px-2 mt-4 py-1 bg-white border-[1px] py-2 border-gray-500 rounded-sm lg:w-1/2 md:w-1/2 w-full">
                               <select name="" id="" class="px-2 mt-4 py-1 bg-white border-[1px] py-2 border-gray-500 rounded-sm lg:w-1/2 md:w-1/2 w-full text-gray-500">
                                   <option class="text-gray-500" value="" active>Choose Services</option>
                                   <option class="text-gray-500" value="">VOPD</option>
                                   <option class="text-gray-500" value="">Clinic Visit</option>
                               </select>
                           </div>
                           <div class="flex">
                               <select name="" id="" class="px-2 mt-4 py-1 bg-white border-[1px] py-2 border-gray-500 rounded-sm  w-full text-gray-500">
                                   <option class="text-gray-500" value="" active>Select Clinic Service</option>
                                   <option class="text-gray-500" value="">Punchkarma</option>
                                   <option class="text-gray-500" value="">Consultation</option>
                                   <option class="text-gray-500" value="">Not Sure</option>
                               </select>
                           </div>
                           <div class="flex">
                               <input type="text" placeholder="City" class="px-2 mt-4 py-1 bg-white border-[1px] py-2 border-gray-500 rounded-sm w-full">
                           </div>
                           <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-max py-3 px-6 rounded-sm mx-auto  mt-4 ">Book Appointment</button>

{{--                           <p  class=" text-[15px] text-green-500 mt-4">--}}
{{--                               Your Appointment has been booked successfully.--}}
{{--                           </p>--}}
                       </form>

                   </div>
               </div>
           </div>
        </div>
    </div>





@endsection
