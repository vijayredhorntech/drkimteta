<x-frontend-layout>
    <div class="w-full">
        <div
            class="w-full h-[30vh] text-right p-6 flex lg:flex-row md:flex-row flex-col-reverse justify-end "
            style="background: url('{{asset('/assets/images/services/banner16.png')}}'); background-repeat: no-repeat; background-position: center; background-size:cover;">
        </div>
    </div>

    <div class="w-full h-max mt-4 px-2">
        <div class="w-full py-2 flex justify-center">
            <span
                class="font-['Amiri'] lg:text-[40px] md:text-[40px] sm:text-[40px] text-[30px] text-[#2f6246] font-semibold">Our exclusive Products</span>
        </div>


        <div class=" lg:w-[70%] md:w-[80%] w-[90%] mx-auto flex flex-col gap-4 py-4 lg:px-8 md:px-6 ">
            <div class="section-wrapper w-full my-categories mb-[60px]">
                <div class="container-x mx-auto">
                    <div class=" section-title flex justify-between items-center mb-5">
                        <div><h1 class="sm:text-3xl text-xl font-600 text-[#437158] leading-none">Product
                                Categories</h1>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="categories-section-wrapper w-full">
                            <div class="container-x mx-auto">
                                <div class="w-full categories-iems">
                                    <div class="grid xl:grid-cols-8 sm:grid-cols-4 grid-cols-2 gap-10">
                                        @foreach($categories as $category)
                                            <Link href="{{ route('shop',['selectedCategory'=>$category]) }}">
                                            <div class="item w-full group cursor-pointer">
                                                <div class="w-full flex justify-center">
                                                    <div
                                                        class="w-[80px] h-[80px] rounded-full bg-white text-[#437158] border-[1px] border-[#437158] hover:bg-[#437158] hover:text-white transition ease-in duration-200 group-hover:bg-qh2-green mb-2.5 flex justify-center items-center">
                                                        <img class="w-[60px] h-[60px] rounded-full object-cover"
                                                             src="{{asset('storage/'.$category->image)}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base text-lg text-[#437158] font-semibold whitespace-nowrap ">{{ $category->name }}</p>
                                                </div>
                                            </div>
                                            </Link>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 ">
                    @foreach($products as $product)
                        <div
                            class="w-full h-max rounded-md border-[1px] border-gray-300  hover:shadow-lg hover:shadow-gray-500 transition ease-in-out delay-150">
                            <div
                                class="w-full h-72 bg-gray-100  rounded-md p-2 relative border-b-[1px] border-b-gray-300 overflow-hidden">
                                <img
                                    class="w-full h-full rounded-md object-cover"
                                    src="{{ $product->images[0] }}"
                                    alt="">
                                <img class="absolute top-0 left-0 h-12 w-12 rounded-md z-10"
                                     src="{{asset('/assets/images/logo/logo (2).png')}}" alt="">
                                @if(array_key_exists(1,$product->images->toArray()))
                                    <div
                                        class="absolute top-0 left-0 w-full h-full p-2 opacity-0 hover:opacity-100 rounded-md transition ease-in duration-200 ">
                                        <div class="w-full h-full relative">
                                            <Link href="{{route('product-details',$product)}}">
                                            <img
                                                class="w-full h-full rounded-t-md object-cover"
                                                src="{{ $product->images[1] }}" alt="">
                                            </Link>

                                            <div class="absolute top-0 right-0 w-max h-max flex flex-col gap-2 p-4">
                                                <a href="{{route('wishlist')}}">
                                                    <button
                                                        class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                                        <i class="fa fa-heart"></i></button>
                                                </a>
                                                <a href="{{route('cart')}}">
                                                    <button
                                                        class="bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 p-2 rounded-sm">
                                                        <i class="fa fa-shopping-cart"></i></button>
                                                </a>
                                            </div>

                                            <div class="absolute bottom-2 left-0  w-full px-6">
                                                <a href="{{route('product-details',$product)}}">
                                                    <button
                                                        class=" bg-white border-[1px] border-[#437158] text-[#437158] hover:bg-[#437158] hover:text-white hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 w-full  p-2 rounded-sm font-semibold">
                                                        <i class="fa fa-eye mr-1"></i> View Details
                                                    </button>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                @endif

                            </div>

                            <div class="p-2 flex flex-col">
                                <a href="{{route('product-details',$product)}}">
                                    <span class="text-black font-bold text-[20px]">{{ $product->name }}</span>

                                </a>
                                <span class="text-gray-500 font-normal text-[14px]"> No Reveiws Yet</span>
                            </div>

                            <div class="flex justify-between p-2">
                                <div>
                                    <span
                                        class="text-black font-bold text-[20px] line-through">₹{{ $product->price }}</span>
                                    <span
                                        class="text-black font-bold text-[20px]"> ₹{{ $product->discountPrice }}</span>

                                </div>

                                <div class="flex gap-2">
                                    @if($product->quantity>0)

                                        <Link href="{{route('cart.add',$product)}}" preserve-scroll
                                              class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                                        Add to Cart
                                        </Link>
                                        {{--                                        <Link href="{{route('checkout')}}">--}}
                                        {{--                                            <button--}}
                                        {{--                                                class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">--}}
                                        {{--                                                Buy Now--}}
                                        {{--                                            </button>--}}
                                        {{--                                        </Link>--}}
                                    @else
                                        <Link href="">
                                        <button
                                            class="bg-[#FF0000] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold lg:px-2 md:px-2 px-4 lg:py-1 md:py-1 py-3 rounded-sm text-xs">
                                            Out Of Stock
                                        </button>
                                        </Link>
                                    @endif
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                @if($products->count() == 0)
                    <div class="w-full flex justify-center items-center">
                        <span class="text-[#437158] font-bold text-[30px]">No Products Found</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-frontend-layout>
