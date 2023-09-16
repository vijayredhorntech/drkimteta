@extends('layouts.layout')

@section('content')
{{--    banner--}}
    <div class="w-full flex lg:flex-row md:flex-row flex-col">
        <div class="lg:w-[65%] md:w-[65%] w-[100%]">
            <div class="swiffy-slider slider-indicators-round">
                <ul class="slider-container ">
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/1.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/2.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/3.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/4.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/5.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/6.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/7.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/8.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/9.jpg')}}"></li>
                    <li><img class="w-full object-cover lg:h-[600px] md:h-[400px]  h-[400px]" src="{{asset('/assets/images/slider/10.jpg')}}"></li>
                </ul>

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
                            <div class="m-auto text-center">
                                <img class="mx-auto mb-4 h-12 w-12" src="{{asset('/assets/images/slider/icon1.png')}}" alt="">
                                <span class="text-white lg:text-[16px] md:text-[12px] text-[16px] font-semibold">CONSULTANCY SERVICES</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-[50%] lg:h-[300px] md:h-[200px] h-[200px]  bg-[#437158] overflow-hidden flex">
                        <div class="w-full h-full hover:h-[80%] hover:w-[80%] hover:m-auto flex hover:border-[2px] hover:border-white transition ease-in-out delay-150 duration-3000">
                            <div class="m-auto text-center">
                                <img class="mx-auto mb-4 h-12 w-12" src="{{asset('/assets/images/slider/icon2.png')}}" alt="">
                                <span class="text-white lg:text-[16px] md:text-[12px] text-[16px] font-semibold">CLINICAL TRIALS</span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="w-full flex">
                <div class="w-[50%] lg:h-[300px] md:h-[200px] h-[200px] bg-[#437158] overflow-hidden flex ">
                    <div class="w-full h-full hover:h-[80%] hover:w-[80%] hover:m-auto flex hover:border-[2px] hover:border-white transition ease-in-out delay-150 duration-3000">
                        <div class="m-auto text-center">
                            <img class="mx-auto mb-4 h-12 w-12" src="{{asset('/assets/images/slider/icon3.png')}}" alt="">
                            <span class="text-white lg:text-[16px] md:text-[12px] text-[16px] font-semibold">SHOP AT SWASTHYA</span>
                        </div>
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
            <div class="h-48 lg:w-[70%] md:w-[70%] w-[100%] bg-[#2f6246] flex flex-col px-2" style="justify-content: space-evenly">
               <i class="fa fa-phone p-[15px]  bg-white text-[#2f6246] w-max rounded-full mx-auto"></i>
                <span class="mx-auto font-semibold text-white lg:text-xl">Need Consultancy? Call Us 98163-33352</span>
                <span class="mx-auto font-normal text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, voluptates!</span>
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
            <p class="text-[#888] text-[18px] font-normal text-justify mt-4" style="letter-spacing: 0.7px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus earum eligendi eos et ex ipsum iusto, nemo optio quasi, rem sunt vero voluptate. Dolores eligendi natus omnis quia voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur assumenda atque cupiditate distinctio, explicabo natus nesciunt optio repellendus voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere itaque, possimus! Aliquam assumenda consectetur ipsam ipsum, mollitia odit sed velit.</p>
            <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 h-max my-auto text-sm font rounded-sm font-bold w-max mt-4 ">Read More</button>
        </div>


    </div>
</div>

    <div class="w-full h-max mt-4 px-2">
    <div class="w-full py-2 flex justify-center">
        <span class="font-['Amiri'] text-[40px] text-[#333] font-semibold">Panchkarma</span>
    </div>

    <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 py-4 lg:px-8 md:px-6 ">
        <div class="grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 gap-4 ">
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                  <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma1.png')}}" alt="">
              </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                  <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma2.png')}}" alt="">
              </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma3.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma4.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma5.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma6.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma7.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/home/puchkarma8.png')}}" alt="">
            </div>
        </div>

    </div>
</div>

   <div class="w-full h-max mt-4 px-2">
    <div class="w-full py-2 flex justify-center">
        <span class="font-['Amiri'] text-[40px] text-[#333] font-semibold">Gallery</span>
    </div>

    <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 py-4 lg:px-8 md:px-6 ">
        <div class="grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 gap-4 ">
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g1.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g2.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g3.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g4.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g5.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g6.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g7.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g8.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g9.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g10.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g11.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g12.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g13.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g14.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g15.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g16.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g17.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g18.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g19.png')}}" alt="">
            </div>
            <div class="w-full rounded-md p-2 border-[1px] border-gray-300 hover:z-10 hover:scale-110 transition ease-in-out delay-150">
                <img class="w-full h-full rounded-md" src="{{asset('/assets/images/gallery/g20.png')}}" alt="">
            </div>
        </div>

    </div>
</div>

    <div class="w-full">
        <div class="w-full text-right bg-[url({{asset('/assets/images/home/banner.jpg')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
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


@endsection
