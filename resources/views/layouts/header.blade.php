<div class="w-full flex border-b-[1px] border-b-gray-200  relative sticky top-0 z-50 bg-white">
    <div class="xl:w-[80%] w-[100%] mx-auto h-28 flex justify-between py-4 lg:px-8 md:px-6 px-2 ">
        <div class=" h-16 w-max flex border-[1px] my-auto  border-[#437158]">
            <a href="{{route('home')}}">
                <img class="h-full w-20 rounded-lg" src="{{asset('/assets/images/logo/logo (2).png')}}" alt="">
            </a>
        </div>

        <div class="lg:h-full md:h-full h-max lg:w-full md:w-full w-[100vw]  w-max flex lg:block md:block lg:static md:static absolute left-0 top-24 lg:block md:block hidden " id="navBar">
            <ul class="flex lg:flex-row md:flex-row flex-col justify-center mx-auto lg:w-max md:w-max w-[100vw] h-full lg:gap-8 md:gap-4 gap-8 lg:text-[17px] md:text-md lg:p-0 md:p-0 p-6 font-light lg:bg-transparent md:bg-transparent bg-black lg:text-gray-500 md:text-black text-white">
                <a href="{{route('home')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>HOME</li></a>
                <a href="{{route('about')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>ABOUT</li></a>
                <a href="{{route('shop')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>SHOP</li></a>
                <a href="{{route('appointment')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>APPOINTMENT</li></a>
                <a href="{{route('gallery')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>GALLERY</li></a>
                <div class="w-max h-full flex relative cursor-pointer" id="service" onclick="openService()">
                    <a class="my-auto hover:underline hover:underline-offset-1 "><li class="relative">SERVICE <i class="fa-solid fa-caret-down ml-1"></i></li></a>

                    <ul id="serviceList" class=" absolute top-[100%] hidden  flex flex-col left-0 lg:w-max md:w-max w-[90vw] h-max lg:gap-8 md:gap-4 gap-8 lg:text-[17px] bg-white shadow-lg shadow-gray-300 text-black p-4" >
                        <a href="{{route('services')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>Served companies</li></a>
                        <a href="{{route('services')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>Organic herbs/essential oils</li></a>
                        <a href="{{route('services')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>Plant installations</li></a>
                        <a href="{{route('services')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>Documentations</li></a>
                        <a href="{{route('services')}}" class="my-auto hover:underline hover:underline-offset-1 "> <li>Clinical trials</li></a>
                    </ul>
                </div>
                <div class="w-max h-full flex relative cursor-pointer" id="clinic" onclick="openClinic()">
                    <a class="my-auto hover:underline hover:underline-offset-1 "><li class="relative">CLINIC <i class="fa-solid fa-caret-down ml-1"></i></li></a>

                    <ul id="clinicList" class=" absolute top-[100%] hidden  flex flex-col left-0 lg:w-max md:w-max w-[90vw] h-max lg:gap-8 md:gap-4 gap-8 lg:text-[17px] bg-white shadow-lg shadow-gray-300 text-black p-4" >
                        <a href="" class="my-auto hover:underline hover:underline-offset-1 "> <li>Medicines</li></a>
                        <a href="" class="my-auto hover:underline hover:underline-offset-1 "> <li>Clinic location</li></a>
                        <a href="" class="my-auto hover:underline hover:underline-offset-1 "> <li>AYUSH - FSSAI - Cosmetics</li></a>
                        <a href="" class="my-auto hover:underline hover:underline-offset-1 "> <li>Documentations</li></a>
                        <a href="" class="my-auto hover:underline hover:underline-offset-1 "> <li>Clinical trials</li></a>
                    </ul>
                </div>

                <a href="{{route('contact')}}" class="my-auto hover:underline hover:underline-offset-1 lg:hidden md:hidden block "> <li>CONTACT-US</li></a>


            </ul>
        </div>


        <div class="h-full w-max flex my-auto flex">
            <a href="{{route('contact')}}" class="my-auto lg:block  hidden">
                <button class="bg-[#437158] px-8 py-3 h-max my-auto text-sm font rounded-sm text-white font-bold w-max">CONTACT US</button>
            </a>
            <a href="{{route('user')}}" class="my-auto">
                <button class="bg-[#437158] px-4 py-3 ml-2  h-max my-auto text-sm font rounded-full text-white font-bold w-max"> <i class="fa fa-user"></i> </button>
            </a>
            <a href="{{route('cart')}}" class="my-auto">
                <button class="bg-[#437158] px-4 py-3 ml-2  h-max my-auto text-sm font rounded-full text-white font-bold w-max"> <i class="fa fa-shopping-cart"></i> </button>
            </a>
            <button class="bg-[#437158] px-4 py-2 text-white text-md font rounded-sm font-semibold my-auto lg:hidden md:hidden block ml-2" id="navToggleButton" onclick="toggleNavbar()">
                <i class="fa fa-bars"></i>
            </button>
        </div>


    </div>

</div>

