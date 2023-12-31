<div class="w-full flex border-b-[1px] border-b-gray-200  relative sticky top-0 z-50 bg-white">
    <div class="xl:w-[80%] w-[100%] mx-auto h-28 flex justify-between py-4 lg:px-8 md:px-6 px-2 ">
        <div class=" h-16 w-max flex my-auto">
            <a href="{{route('home')}}">
                <img class="h-full w-32" src="{{asset('/assets/images/logo/logo.png')}}" alt="">
            </a>
        </div>

        <div class="lg:h-full md:h-full h-max lg:w-full md:w-full w-[100vw]  w-max flex lg:block md:block lg:static md:static absolute left-0 top-24 lg:block md:block hidden " id="navBar">
            <ul class="flex lg:flex-row md:flex-row flex-col justify-center mx-auto lg:w-max md:w-max w-[100vw] h-full lg:gap-8 md:gap-4 gap-8 lg:text-[17px] md:text-md lg:p-0 md:p-0 p-6 font-light lg:bg-transparent md:bg-transparent bg-black lg:text-gray-500 md:text-black text-white">
                <a href="{{route('home')}}" class="my-auto  hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200 "> <li>HOME</li></a>
                <a href="{{route('about')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>ABOUT</li></a>
                <a href="{{route('shop')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>SHOP</li></a>
                <a href="{{route('appointment')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>APPOINTMENT</li></a>
                <a href="{{route('gallery')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>GALLERY</li></a>
                <div class="w-max h-full flex relative cursor-pointer" id="service" onmouseover="const serviceList = document.getElementById('serviceList'); serviceList.classList.remove('hidden')" onmouseleave=" const serviceList = document.getElementById('serviceList');serviceList.classList.add('hidden');">
                    <span class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "><li class="relative">SERVICE <i class="fa-solid fa-caret-down ml-1"></i></li></span>

                    <ul id="serviceList" class=" absolute top-[100%] hidden  flex  flex-col left-0 lg:w-max md:w-max w-[90vw] h-max lg:gap-8 md:gap-4 gap-8 lg:text-[17px] bg-white shadow-lg shadow-gray-300 text-black p-4" >
                        <a href="{{route('services')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Services</li></a>
                        <a href="{{route('clients')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Served companies</li></a>
                        <a href="{{route('services')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Organic herbs/essential oils</li></a>
                        <a href="{{route('services')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Plant installations</li></a>
                        <a href="{{route('services')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Documentations</li></a>
                        <a href="{{route('about')}}#clinicalTrial" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Clinical trials</li></a>
                    </ul>
                </div>
                <div class="w-max h-full flex relative cursor-pointer" id="clinic" onmouseover="  const clinicList = document.getElementById('clinicList');clinicList.classList.remove('hidden')" onmouseleave="  const clinicList = document.getElementById('clinicList'); clinicList.classList.add('hidden');">
                    <span class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "><li class="relative">CLINIC <i class="fa-solid fa-caret-down ml-1"></i></li></span>

                    <ul id="clinicList" class=" absolute top-[100%] hidden  flex flex-col left-0 lg:w-max md:w-max w-[90vw] h-max lg:gap-8 md:gap-4 gap-8 lg:text-[17px] bg-white shadow-lg shadow-gray-300 text-black p-4" >
                        <a href="" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Medicines</li></a>
                        <a href="" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Clinic location</li></a>
                        <a href="" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>AYUSH - FSSAI - Cosmetics</li></a>
                        <a href="" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Documentations</li></a>
                        <a href="" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  "> <li>Clinical trials</li></a>
                    </ul>
                </div>

                <a href="{{route('contact')}}" class="my-auto hover:text-[#437158] hover:border-b-[2px] hover:border-b-[#437158] transition ease-in duration-200  lg:hidden md:hidden block "> <li>CONTACT-US</li></a>


            </ul>
        </div>


        <div class="h-full w-max flex my-auto flex">

            <a href="{{route('user')}}" class="my-auto">
                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-4 py-3  h-max my-auto text-sm  rounded-full font-bold w-max"> <i class="fa fa-user"></i> </button>
            </a>
            <Link href="{{route('cart')}}" class="my-auto">
                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-4 py-3 ml-2  h-max my-auto text-sm  rounded-full font-bold w-max"> <i class="fa fa-shopping-cart"></i> </button>
            </Link>
            <a href="{{route('wishlist')}}" class="my-auto">
{{--                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-4 py-3 ml-2  h-max my-auto text-sm  rounded-full font-bold w-max"> <i class="fa fa-heart"></i> </button>--}}
{{--            </a>--}}
            <a href="{{route('contact')}}" class="my-auto lg:block  hidden">
                <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 ml-2 h-max my-auto text-sm font rounded-sm  font-bold w-max">CONTACT US</button>
            </a>
            <button class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-4 py-2 text-md font rounded-sm font-semibold my-auto lg:hidden md:hidden block ml-2" id="navToggleButton" onclick=" const navBar = document.getElementById('navBar'); navBar.classList.toggle('hidden');">
                <i class="fa fa-bars"></i>
            </button>
        </div>


    </div>

</div>

