@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[30vh] text-right bg-[url({{asset('/assets/images/services/banner16.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>


    <div class="w-full mt-8">
            <!-- bootstrap image gallery 1 -->
            <div class="w-full flex flex-col">
                <div class="w-full flex  lg:flex-row md:flex-row flex-col lg:w-[70%] md:w-[90%]  smg:w-[90%] w-[100%] mx-auto gap-4 px-4">
                    <div class=" lg:w-[50%] md:w-[50%] w-[100%] ">
                        <div class="swiffy-slider w-full">
                            <ul class="slider-container rounded-md w-full">
                                <li><img src="{{asset('/assets/images/products/1.jpg')}}" class="w-full lg:h-[500px] md:h-[500px] sm:h-[500px] h-[300px] object-cover rounded-md"></li>
                                <li><img src="{{asset('/assets/images/products/4.jpg')}}" class="w-full lg:h-[500px] md:h-[500px] sm:h-[500px] h-[300px] object-cover rounded-md"></li>
                                <li><img src="{{asset('/assets/images/products/3.jpg')}}" class="w-full lg:h-[500px] md:h-[500px] sm:h-[500px] h-[300px] object-cover rounded-md"></li>
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
                    <div class="lg:w-[50%] md:w-[50%] w-[100%]  p-4 flex flex-col">
                        <span class="font-bold text-[2f6246] text-[30px]">Vitamin A</span>
                        <span>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          (5 reviews)</span>
                        <span class="font-bold text-[#4a8f00] text-[25px] mt-2" >₹1900.00</span>
                        <span class="font-bold text-[#2f6246] text-[20px] mt-4">Benefits:-</span>
                        <ul class="flex flex-col font-bold text-[15px] text-[#2f6246]">
                            <li class="mt-4">
                                . Purifies blood and makes skin glowing
                            </li>
                            <li class="mt-4">
                                . Maintains healthy blood sugar
                            </li>
                            <li class="mt-4">
                                . Purifies blood and makes skin glowing
                            </li>
                            <li class="mt-4">
                                . Maintains healthy blood sugar
                            </li>
                            <li class="mt-4">
                                . Purifies blood and makes skin glowing
                            </li>
                            <li class="mt-4">
                                . Maintains healthy blood sugar
                            </li>

                        </ul>
                        <span class="font-bold text-[#4a8f00] text-[25px] mt-2"> Stock Available</span>
                        <span class="font-bold text-black text-[15px] mt-2">Country of Origin: India</span>
                        <div class="w-full flex justify-end gap-4 mt-2">
                            <a href="{{route('cart')}}">
                                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs" >Add To Cart</button>
                            </a>

                            <a href="{{route('checkout')}}">
                                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs">Buy Now</button>
                            </a>

                        </div>
                    </div>
                </div>


               <div class="w-full px-2 mb-4">
                   <div class="w-full mt-8 border-[1px] border-[green] rounded-lg">
                       <div class="w-full font-bold text-black text-[20px] bg-gray-100 rounded-lg grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-3 grid-cols-1 gap-2">
                           <div class="w-full cursor-pointer px-4 rounded-lg h-full flex">
                               <div class="tab mainTab bg-[#437158] text-white rounded-md hover:text-[#437158] hover:bg-white hover:border-[1px] hover:border-[#437158] py-2 px-6 border-[1px] border-gray-100 transition ease-in duration-200"
                                    onclick="openTab(event, 'tab1')">
                                   <span>Description</span>
                               </div>
                           </div>
                           <div class="w-full cursor-pointer px-4 rounded-lg h-full flex">
                               <div class="tab mainTab rounded-md hover:text-[#437158] hover:bg-white hover:border-[1px] hover:border-[#437158] py-2 px-6 border-[1px] border-gray-100 transition ease-in duration-200"
                                    onclick="openTab(event, 'tab2')">
                                   <span>Ingredients</span>
                               </div>
                           </div>
                           <div class="w-full cursor-pointer px-4 rounded-lg h-full flex">

                               <div class="tab mainTab rounded-md hover:text-[#437158] hover:bg-white hover:border-[1px] hover:border-[#437158] py-2 px-6 border-[1px] border-gray-100 transition ease-in duration-200"
                                    onclick="openTab(event, 'tab3')">
                                   <span>Dosage</span>
                               </div>
                           </div>
                       </div>


                       <div class="w-full bg-white p-4 rounded-lg">
                           <div class="tab-content" id="tab1">
                       <span class="font-bold text-black text-[15px]">
                           Being enriched with Vitamin C, Vitamin B, potassium, magnesium, calcium, zinc, copper, and Iron, Bael powder may help you maintain good digestion, health, and cholesterol level.

It helps in purifying the blood, which helps prevent various skin infections. Due to its laxative properties, it may maintain your bowel wellness and may prevent constipation.
                       </span>
                           </div>
                           <div class="tab-content" id="tab2">
                               <span class="font-bold text-[green] text-[20px]" >Bael: </span>
                               <span class="font-bold text-[black] text-[15px]">Fresh leaves of the Bael plant being handpicked, dried, crushed, and sundried to provide you with the best of its medicinal benefits.</span>
                           </div>
                           <div class="tab-content" id="tab3">
                       <span class="font-bold text-black text-[15px]">
                                                  3-6 grams twice a day or as directed by the physician.
                       </span>
                           </div>

                       </div>
                   </div>
               </div>
            </div>
    </div>
@endsection
