<x-frontend-layout>

    <div class="w-full">
        <div class="w-full h-[30vh] text-right p-6 flex lg:flex-row md:flex-row flex-col-reverse justify-end "
        style="background: url('{{asset('/assets/images/services/banner16.png')}}'); background-repeat: no-repeat; background-position: center; background-size:cover;">
        </div>
    </div>


    <div class="w-full flex px-2 mb-4">
        <!-- bootstrap image gallery 1 -->
        <div class="w-full lg:w-[70%] w-[100%] mx-auto">

            <div class="w-full">
                <div class="w-full flex justify-center mt-8">
                    <span class="font-bold text-black text-[25px]">Your Wishlist:-</span>
                </div>

            </div>

            <div class="w-full mt-10 flex lg:flex-row md:flex-row flex-col" style="margin-bottom: 20px">
                <div class="lg:w-[30%] md:w-[40%] w-[100%] flex">
                    <img class="w-[100px] h-[100px] rounded-md object-cover" src="{{asset('/assets/images/products/3.jpg')}}"  alt="">

                    <span class="font-bold text-[20px] text-black ml-4 my-auto">Vitamin A</span>

                </div>
                <div class="lg:w-[70%] md:w-[60%] w-[100%] flex justify-start lg:gap-8 md:gap-8 sm:gap-8 gap-2">
                    <div class="my-auto flex ">
                        <span class="font-bold text-[20px] text-black mt-2">Price</span>
                        <span class="font-semibold text-[20px] text-black mt-2">₹ 600</span>
                    </div>
                    <div class="my-auto flex flex-col ">
                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold p-2 rounded-sm text-xs" > <i class="fa-solid fa-trash"></i> Remove</button>
                    </div>
                    <div class="my-auto flex flex-col ">
                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold p-2 rounded-sm text-xs" > <i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    </div>

                </div>
            </div>
            <div class="w-full mt-10 flex lg:flex-row md:flex-row flex-col" style="margin-bottom: 20px">
                <div class="lg:w-[30%] md:w-[40%] w-[100%] flex">
                    <img class="w-[100px] h-[100px] rounded-md object-cover" src="{{asset('/assets/images/products/2.jpg')}}"  alt="">

                    <span class="font-bold text-[20px] text-black ml-4 my-auto">Vitamin C</span>

                </div>
                <div class="lg:w-[70%] md:w-[60%] w-[100%] flex justify-start lg:gap-8 md:gap-8 sm:gap-8 gap-2">
                    <div class="my-auto flex ">
                        <span class="font-bold text-[20px] text-black mt-2">Price</span>
                        <span class="font-semibold text-[20px] text-black mt-2">₹ 1400</span>
                    </div>
                    <div class="my-auto flex flex-col ">
                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold p-2 rounded-sm text-xs" > <i class="fa-solid fa-trash"></i> Remove</button>
                    </div>
                    <div class="my-auto flex flex-col ">
                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold p-2 rounded-sm text-xs" > <i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    </div>

                </div>
            </div>
            <div class="w-full">
                <div class="w-full flex justify-end gap-4">
                    <a href="{{route('shop')}}">
                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs" > <i class="fa fa-trash mr-2"></i> Remove All </button>
                    </a>
                    <a href="{{route('shop')}}">
                        <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs" > <i class="fa fa-shopping-cart mr-2"></i> Add All To Cart</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-frontend-layout>
