@extends('layouts.layout')

@section('content')

    <div class="w-full">
        <div
            class="w-full h-[50vh] text-right bg-[url({{asset('/assets/images/services/banner16.png')}})] p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end ">
        </div>
    </div>

    {{--    <div class="w-full h-max mt-4 px-2">--}}
    {{--        <div class="w-full py-2 flex justify-center">--}}
    {{--            <span class="font-['Amiri'] text-[40px] text-[#2f6246] font-semibold">Our exclusive Products</span>--}}
    {{--        </div>--}}

    {{--        <div class="xl:w-[60%] lg:w-[70%] md:w-[90%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 py-4 lg:px-8 md:px-6 ">--}}
    {{--            <div class="grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 gap-4 ">--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/1.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/2.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/3.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/4.png')}}" alt=""></a>--}}
    {{--                </div>--}}

    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/5.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/6.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/7.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/8.png')}}" alt=""></a>--}}
    {{--                </div>--}}

    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/9.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/10.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/11.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--                <div class="w-full h-64 rounded-md border-[1px] p-2 border-gray-300  hover:shadow-lg hover:shadow-gray-300 transition ease-in-out delay-150">--}}
    {{--                    <a href="{{route('shop')}}"> <img class="w-full h-full rounded-md object-cover" src="{{asset('/assets/images/services/12.png')}}" alt=""></a>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}


    <div class="max-w-7xl mx-auto px-4 mt-6 text-center">
        <h1 class="text-2xl text-[#437158] font-semibold mb-4">Our Services</h1>
        <div class="grid sm:grid-cols-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 mt-12 mb-6">
            <!-- Client 1 -->
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/rad.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">Research & Formulation </h2>
                    <p>We help to design result oriented formulation for our clients as per their need. </p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/fda.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">FDA Documentation </h2>
                    <p>Our expert team helps you to design Ayurvedic/Herbal formulation documents for FDA approval
                        according to requirement of State Ayush Board of individual states(HP,HR,Pb,UK).</p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/man.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">Batch Manufacturing </h2>
                    <p>As required our team also visit plant to manufacture quality batches at your premises. Any type
                        of Ayurvedic/Herbal Products (Syrups/ Granules/ Powders/ Ointments/ Neutraceuticals/ Capsules/
                        Tablets/ Facial Kits/ Creams/ Lotions/ Shampoos/ Conditioner/ Face Serum/ Face Washes etc.)
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/stat.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">State Manufacturing License & Approval </h2>
                    <p>We provide guidance in New Ayurvedic/Herbal plant set up(Manufacturing section,QC Section,RM/ PM/
                        FG section ,Change Room dimensions & documents etc) as per State Ayush Board</p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/cli.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">Clinical Trial Services</h2>
                    <p>We provide clinical trial services in Government and Private hospitals to check safety and
                        efficacy of ayurvedic medicines as per State Ayush Board.</p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/rm.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">RM/PM Resources</h2>
                    <p>To manufacture quality and result oriented products ,good quality herbs are required.We provide
                        resources for best Raw Material(Crude Herbs/Powders/Extracts/Oils) along with their GLC & HPLC
                        analysis reports & percentage of actives present in individual RM,which is very essential to
                        manufacture an effective product.
                        We also provides resources for best quality Packing Material(Jars/ Containers/
                        Labels/ Cartons/ Bottles).
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/live.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">Live Workshops</h2>
                    <p> We also arrange workshops as per need of our customers to give live demonstration of bulk
                        manufacturing of new products to BAMS,B.Pharma,Private Clinics & Pharmacies.</p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/market.jpeg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">Market Surveillence</h2>
                    <p>In this world of competition while launching your product it is very essential to know what are
                        your competitor products available in the market What are their MRP’s,In which SKU they are
                        selling & the packing trend.We provide complete market survey of individual products.</p>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-[#437158] rounded-lg overflow-hidden">
                <img src="{{asset('/assets/images/services/fin.jpg')}}" alt="Client 1" class="w-full h-52 ">
                <div class="py-4 px-2 text-left">
                    <h2 class="text-xl font-semibold mb-2">Sales & Marketing Boost up Sessions & Training</h2>
                    <p>We also arrange market boost up & training sessions for sales teams</p>
                </div>
            </div>


        </div>
    </div>

@endsection
