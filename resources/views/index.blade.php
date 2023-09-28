<x-frontend-layout>
    <div class="w-full flex lg:flex-row md:flex-row flex-col">
        <div class="lg:w-[65%] md:w-[65%] w-[100%]">
            <div class="swiffy-slider slider-indicators-round ">
                <ul class="slider-container">
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/slider1.png')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/2.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/3.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/4.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/5.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/6.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/7.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/8.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/9.jpg')}}"></li>
                    <li><img class="w-full lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/10.jpg')}}"></li>
                </ul>


                <div class="bg-[#fa971c] rounded-tl-3xl rounded-br-3xl h-max w-max px-4 py-2 absolute left-[30px] bottom-[30px] z-10 ">
                    <div class=" mt-0 flex">
                        <a href="https://www.behance.net/swasthyherboco1" target="_blank" class="mr-3 block">
                            <button
                                class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-2 py-1 rounded-full">
                                <i class="fa-brands fa-behance"></i></button>
                        </a>
                        <a href="https://www.reddit.com/user/SwasthyaHerbo/submitted/" target="_blank" class="mr-3 block">
                            <button
                                class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-2 py-1 rounded-full">
                                <i class="fa-brands fa-reddit"></i></button>
                        </a>
                        <a href="https://www.instagram.com/swaasthya.nature/" target="_blank" class="mr-3 block">
                            <button
                                class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-2 py-1 rounded-full">
                                <i class="fa fa-instagram"></i></button>
                        </a>
                    </div>
                </div>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>

                <div class="slider-indicators">
                    <button class="active bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                    <button class=" bg-[#fa971c] border-[1px] border-[#437158] text-white hover:bg-white p-1"></button>
                </div>
            </div>
        </div>
        <div class="lg:w-[35%] md:w-[35%] w-[100%] flex  flex-wrap">
            <div class="w-full flex">
                <div class="w-[50%] lg:h-[300px] md:h-[200px] h-[200px] bg-[#fa971c] overflow-hidden flex ">
                    <div class="w-full h-full hover:h-[80%] hover:w-[80%] hover:m-auto flex hover:border-[2px] hover:border-white transition ease-in-out delay-150 duration-3000">
                        <a class="m-auto text-center" href="{{route('services')}}">
                            <div class="m-auto text-center">
                                <img class="mx-auto mb-4 h-12 w-12" src="{{asset('/assets/images/slider/icon1.png')}}" alt="">
                                <span class="text-white lg:text-[16px] md:text-[12px] text-[16px] font-semibold">CONSULTANCY SERVICES</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-[50%] lg:h-[300px] md:h-[200px] h-[200px]  bg-[#437158] overflow-hidden flex">
                    <div class="w-full h-full hover:h-[80%] hover:w-[80%] hover:m-auto flex hover:border-[2px] hover:border-white transition ease-in-out delay-150 duration-3000">
                        <a class="m-auto text-center" href="{{route('about')}}#clinicalTrial">
                            <div class="m-auto text-center">
                                <img class="mx-auto mb-4 h-12 w-12" src="{{asset('/assets/images/slider/icon2.png')}}" alt="">
                                <span class="text-white lg:text-[16px] md:text-[12px] text-[16px] font-semibold">CLINICAL TRIALS</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full flex">
                <div class="w-[50%] lg:h-[300px] md:h-[200px] h-[200px] bg-[#437158] overflow-hidden flex ">
                    <div class="w-full h-full hover:h-[80%] hover:w-[80%] hover:m-auto flex hover:border-[2px] hover:border-white transition ease-in-out delay-150 duration-3000">
                        <a class="m-auto text-center" href="{{route('shop')}}">
                            <div class="m-auto text-center">
                                <img class="mx-auto mb-4 h-12 w-12" src="{{asset('/assets/images/slider/icon3.png')}}" alt="">
                                <span class="text-white lg:text-[16px] md:text-[12px] text-[16px] font-semibold">SHOP AT SWASTHYA</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-[50%] lg:h-[300px] md:h-[200px] h-[200px] bg-[#fa971c] overflow-hidden flex  ">
                    <div class="w-full h-full hover:h-[80%] hover:w-[80%] hover:m-auto flex hover:border-[2px] hover:border-white transition ease-in-out delay-150 duration-3000">
                        <div class="m-auto text-center">
                            <img class="mx-auto mb-4 h-12 w-12" src="{{asset('/assets/images/slider/icon4.png')}}" alt="">
                            <span class="text-white lg:text-[16px] md:text-[12px] text-[16px] font-semibold">PLANT INSTALLATION</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="w-full h-max mt-6 px-2">
        <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col py-4 lg:px-8 md:px-6 ">
            <div class="h-48 lg:w-[30%] md:w-[30%] w-[100%]">
                <img class="h-full w-full" src="{{asset('/assets/images/home/smallbanner.jpg')}}" alt="">
            </div>
            <div class="lg:h-48 md:h-48 h-max lg:w-[70%] md:w-[70%] w-[100%] bg-[#2f6246] flex flex-col px-6 py-4" style="justify-content: space-evenly">
                <i class="fa fa-phone p-[15px]  bg-white text-[#2f6246] w-max rounded-full mx-auto"></i>
                <span class="mx-auto font-semibold text-white lg:text-xl">Need Consultancy? Call Us +91 98163-33352</span>
                <span class="mx-auto font-normal text-white text-sm">If you're seeking expert guidance and consultancy, look no further. We're here to assist you with a wide range of professional services tailored to meet your specific needs. Our team of experienced consultants is just a phone call away at +91 98163-33352. Whether you have questions, require advice, or need assistance, we're ready to provide you with the support you need. Don't hesitate to reach out; we're committed to helping you achieve your goals.</span>
            </div>


        </div>
    </div>

    <div class="w-full h-max mt-6 px-2">
        <div class="w-full py-2 flex justify-center">
            <span class="font-['Amiri'] text-[40px] text-[#333] font-semibold">Our Founder</span>
        </div>
        <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 py-4 lg:px-8 md:px-6 ">
            <div class="h-96 lg:w-[35%] md:w-[35%] w-[100%] relative">
                <img class="h-full w-full rounded-sm" src="{{asset('/assets/images/home/profile.jpeg')}}" alt="">
                <div class="text-[17.5px] font-semibold absolute -left-10 bottom-10 bg-white text-[#2f6246] hover:bg-[#437158] hover:text-white transition ease-in duration-200 rounded-sm px-8 py-3 shadow-md shadow-gray-700">
                    <span  style="letter-spacing: 0.6px">Dr Vijay <span class="text-[#fa971c]">Kimteta</span></span>
                </div>
            </div>
            <div class="h-max bg:w-[65%] md:w-[65%] w-[100%] flex-col px-2 pl-4">
                <span class="font-semibold text-[#fa971c] text-[14px]" style="letter-spacing: 1px">OUR MOTIVE IS TO BUILD A HEALTHY INDIA & BELIEVE US WE WILL DO IT</span><br>
                <h1 class="font-['Amiri'] text-[30px] text-[#333] font-semibold mt-2">Meet Our Founder</h1>
                <p id="clinicalTrial" class="text-[#888] text-[18px] font-normal text-justify mt-4" style="letter-spacing: 0.7px">
                    Under the leadership of our mentor <span class="font-bold text-gray-500">“ Dr Vijay Kimtata ” </span>We have successfully developed more than 2000 result oriented formulations for our clients & few of them are well renowned brands today like Mother Sparsh, Roop Mantra, Petsaffa,Dr Ortho.
                </p>
                {{--            <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 h-max my-auto text-sm font rounded-sm font-bold w-max mt-4 ">Read More</button>--}}
            </div>


        </div>
    </div>

    <div class="w-full h-max mt-4 px-2">
        <div class="w-full py-2 flex justify-center">
            <span class="font-['Amiri'] text-[40px] text-[#333] font-semibold">Panchkarma</span>
        </div>

        <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 py-4 lg:px-8 md:px-6 ">
            <div class="swiffy-slider slider-item-show3 slider-nav-autoplay slider-indicators-round">
                <ul class="slider-container">
                    <li class="flex"><img src="{{asset('/assets/images/home/puchkarma1.png')}}" class="mx-auto h-auto w-full rounded-md" ></li>
                    <li class="flex"><img src="{{asset('/assets/images/home/puchkarma2.png')}}" class="mx-auto h-auto w-full rounded-md"></li>
                    <li class="flex"><img src="{{asset('/assets/images/home/puchkarma3.png')}}" class="mx-auto h-auto w-full rounded-md"></li>
                    <li class="flex"><img src="{{asset('/assets/images/home/puchkarma4.png')}}" class="mx-auto h-auto w-full rounded-md"></li>
                    <li class="flex"><img src="{{asset('/assets/images/home/puchkarma5.png')}}" class="mx-auto h-auto w-full rounded-md"></li>
                    <li class="flex"><img src="{{asset('/assets/images/home/puchkarma6.png')}}" class="mx-auto h-auto w-full rounded-md"></li>
                </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>

                <div class="slider-indicators">
                    <button class="active"></button>
                    <button></button>
                    <button></button>
                </div>
            </div>
        </div>
    </div>



    <div class="w-full">
        <div class="w-full text-right p-6 flex lg:flex-row md:flex-row flex-col-reverse justify-end "
          style="background: url('{{asset('/assets/images/home/banner.jpg')}}'); background-repeat: no-repeat; background-position: center; background-size:cover;">
            <div class="lg:w-1/2 md:w-1/2 w-full">

            </div>
            <div class="lg:w-1/2 md:w-1/2 w-full flex justify-center">
                <div class="w-max h-max border-[10px] border-[#437158] rounded-tl-[50px] rounded-br-[50px] bg-gray-200 p-6 text-left">
                    <span class="font-['Amiri'] text-[25px] text-[#333] font-semibold">Get in touch</span>
                    <form action="" class="w-full flex flex-col">
                        <input type="text" placeholder="Your Name" class="px-2 mt-2 py-1 bg-white lg:w-96 md:w-96 sm:w-96 w-64">
                        <input type="email" placeholder="Email here" class="px-2 mt-2 py-1 bg-white lg:w-96 md:w-96 sm:w-96 w-64">
                        <input type="number" placeholder="Number here" class="px-2 mt-2 py-1 bg-white lg:w-96 md:w-96 sm:w-96 w-64">
                        <textarea placeholder="Message here" name="" id="" cols="10" rows="5" class="px-2 mt-2 py-1 bg-white lg:w-96 md:w-96 sm:w-96 w-64"></textarea>

                        <button class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-max py-2 px-6 rounded-full  mt-12 ">SUBMIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


</x-frontend-layout>
