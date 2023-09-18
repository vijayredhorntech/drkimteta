@seoTitle('Appointment')
@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div
            class="w-full h-[50vh] text-right bg-[url({{asset('/assets/images/appointment/appointment.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>
    <div class="w-full mt-2 mb-8">
        <div class="w-full py-8 text-right bg-[#2f6246] p-6 bg-center bg-cover flex flex-col  ">
            <span class="font-['Amiri'] text-[30px] text-white mx-auto font-normal mt-2">Our Missions</span>
            <p class="font-['Amiri'] text-[20px] text-white text-center mx-auto font-normal mt-2 lg:w-[60%] md:w-[70%] sm:w-[80%] w-[100%]">
                Our mission is to be the leading provider of holistic and natural health solutions, delivering
                exceptional care and personalized treatments through the ancient wisdom of Ayurveda, and empowering
                individuals to live their healthiest and happiest lives.
            </p>
        </div>
    </div>

    <div class="w-full">
        <div
            class="w-full text-right bg-[url({{asset('/assets/images/appointment/delicate-branch-black.jpg')}})]  py-20 bg-center bg-cover flex flex-col ">
            <div class="flex justify-center">
                <span class="font-['Amiri'] text-[35px] text-white font-semibold">Book Your Appointment</span>
            </div>

            <div class=" lg:w-[60%] w-full px-2 mx-auto flex lg:flex-row md:flex-row flex-col mt-4 gap-6">
                <div class="lg:w-1/2 md:w-1/2 w-full lg:h-[500px] md:h-[500px] h-[300px] flex justify-center">
                    <img class="w-full h-full object-cover rounded-md"
                         src="{{asset('/assets/images/appointment/book-appointment.png')}}" alt="">
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full h-[500px] flex justify-center">
                    <div class="w-full h-full  bg-white p-6 text-left flex flex-col rounded-md">
                        <span class=" text-[35px] text-gray-500 font-semibold mx-auto">Make an Appointment</span>
                        <p class=" text-[15px] text-gray-500">
                            Fill this form to book appointment and consultation with our expert doctors.
                        </p>
                        <x-splade-form action="{{ route('dashboard.appointment.store') }}" class="w-full flex flex-col" preserve-scroll stay reset-on-success>
                            <p v-if="form.wasSuccessful">Thank you, Your request has been submitted. <br> We'll back to
                                you soon.</p>
                            <div class="flex gap-4">
                                <x-splade-input required name="name" placeholder="Your Name" label="Name"
                                                class=" py-1 py-2 text-black rounded-sm lg:w-1/2 md:w-1/2 w-full"/>
                                <x-splade-input required name="phone" placeholder="Phone Number" label="Phone"
                                                class=" py-1 py-2 text-black rounded-sm lg:w-1/2 md:w-1/2 w-full"/>
                            </div>
                            <div class="flex">
                                <x-splade-input required name="email" placeholder="Email" label="Email"
                                                class=" py-1 py-2 text-black rounded-sm w-full"/>
                            </div>
                            <div class="flex">


                                <x-splade-select name="service_id" class="w-full  py-1 py-2"
                                                 placeholder="Service" label="Service"
                                                 :options="\App\Models\Service::where('status', 1)->get()->pluck('name','id')"
                                                 option-label="name" choices required/>
                            </div>
                            <div class="flex">
                                <x-splade-input required name="city" placeholder="City" label="City"
                                                class=" py-1 py-2 text-black rounded-sm w-full"/>
                            </div>
                            <div class="flex justify-center">
                                <x-splade-submit label="Book Appointment"
                                                 class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-max py-3 px-6 rounded-sm mx-auto  mt-4 "/>
                            </div>
                        </x-splade-form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
