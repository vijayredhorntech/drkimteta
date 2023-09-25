@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div class="w-full h-[50vh] text-right bg-[url({{asset('/assets/images/about/about-bg.jpg')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>

    <div class="w-full h-max mt-6 px-2">
        <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row-reverse md:flex-row-reverse flex-col-reverse gap-4 py-4 lg:px-8 md:px-6 ">
            <div class="lg:h-[500px] md:h-[300px] sm:h-[500px] h-[400px] lg:w-[50%] md:w-[50%] w-[100%] relative border-[1px] border-gray-200 p-2 rounded-md">
                <img class="h-full w-full rounded-md" src="{{asset('/assets/images/about/image15.jpg')}}" alt="">
            </div>
            <div class="h-max bg:w-[50%] md:w-[50%] w-[100%] flex-col px-2 pl-4">
                <h1 class="font-['Amiri'] text-[30px] text-gray-500 font-normal mt-2">Our Brand Story</h1>
                <p class="text-[#888] text-[18px] font-normal text-justify mt-4" style="letter-spacing: 0.7px">
                    Since our foundation in 2006,We Swasthya Herbocosmetics are recognised in the business as one of the main associates which is locked in as a specialist organisation of an extensive scope of Ayurvedic consultancy services which includes all types of liosining,Ayurvedic Regulatory services for plant Mfg license,GMP Certifications,Formulation Designs & Approvals from FDA & State Ayush Board, Plant inspections,Legal Queries, Clinical Trial & Customer complaint handling.
                </p>
                <p id="clinicalTrial" class="text-[#888] text-[18px] font-normal text-justify mt-4" style="letter-spacing: 0.7px">
                    Under the leadership of our mentor <span class="font-bold text-gray-500">“ Dr Vijay Kimtata ” </span>We have successfully developed more than 2000 result oriented formulations for our clients & few of them are well renowned brands today like Mother Sparsh, Roop Mantra, Petsaffa,Dr Ortho.
                </p>
            </div>
        </div>
    </div>

    <div class="w-full flex ">
        <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row-reverse md:flex-row-reverse flex-col-reverse gap-4 py-12 lg:px-8 md:px-6 ">
        <img class="w-full h-full" src="{{asset('assets/images/home/banner2.jpg')}}" alt="">
        </div>
    </div>

    <div  class="w-full h-max mt-6 px-2">
        <div class="xl:w-[70%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row-reverse md:flex-row-reverse flex-col-reverse gap-4 py-4 lg:px-8 md:px-6 ">
            <div class="h-max bg:w-[50%] md:w-[50%] w-[100%] flex-col px-2 pl-4 ">
                <h1 class="font-['Amiri'] text-[30px] text-gray-500 font-normal mt-2">Clinical Trials conducted under Supervision of Dr. Vijay</h1>
                    <h6 class="font-['Amiri'] text-[18px] font-normal text-[#437158] mt-2">
                        Clinical Trial Conducted by DCGI approved Ethical committee
                        CTRI Website URL - <a class="italic text-blue-500" href="http://ctri.nic.in" target="_blank">http://ctri.nic.in</a>

                    </h6>

                <ul class="text-[#888] list-disc text-[18px] font-normal text-justify mt-4">
                    <li class="text-[20px] text-[#437158] font-bold">
                        Petsaffa Granules- <span class="text-[18px] italic text-blue-500 font-normal"> CTRI/2021/07/034542</span>
                    </li>
                    <li class="text-[20px] text-[#437158] font-bold">
                        Dr Ortho Oil- <span class="text-[18px] italic text-blue-500 font-normal"> CTRI/2021/07/034542</span>
                    </li>
                    <li class="text-[20px] text-[#437158] font-bold">
                        Sachi Saheli- <span class="text-[18px] italic text-blue-500 font-normal"> CTRI/2021/07/034539</span>
                    </li>
                    <li class="text-[20px] text-[#437158] font-bold">
                        Roop Mantra Cream- <span class="text-[18px] italic text-blue-500 font-normal"> CTRI/2020/11/029427</span>
                    </li>
                    <li class="text-[20px] text-[#437158] font-bold">
                        Roop Mantra Cucumber Face Wash- <span class="text-[18px] italic text-blue-500 font-normal"> CTRI/2020/11/029426</span>
                    </li>
                </ul>


            </div>
            <div class="lg:h-[400px] md:h-[300px] sm:h-[400px] h-[300px] lg:w-[50%] md:w-[50%] w-[100%] relative border-[1px] border-gray-200 p-2 rounded-md">
                <img class="h-full w-full rounded-md" src="{{asset('/assets/images/about/trials.jpg')}}" alt="">
            </div>
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

@endsection
