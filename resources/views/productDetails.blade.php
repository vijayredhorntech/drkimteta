<x-frontend-layout>

    <div class="w-full">
        <div
            class="w-full h-[30vh] text-right p-6 bg-center bg-cover flex lg:flex-row md:flex-row flex-col-reverse justify-end "
            style="background: url('{{asset('/assets/images/services/banner16.png')}}'); background-repeat: no-repeat; background-position: center; background-size:cover;"
        >
        </div>
    </div>


    <div class="w-full mt-8">
        <!-- bootstrap image gallery 1 -->
        <div class="w-full flex flex-col">
            <div
                class="w-full flex  lg:flex-row md:flex-row flex-col lg:w-[70%] md:w-[90%]  smg:w-[90%] w-[100%] mx-auto gap-4 px-4">
                <div class=" lg:w-[50%] md:w-[50%] w-[100%] ">
                    <div class="swiffy-slider w-full">
                        <ul class="slider-container rounded-md w-full">
                            @foreach($product->media as $media)
                                <li><img src="{{asset('storage/'.$media->media)}}"
                                         class="w-full lg:h-[500px] md:h-[500px] sm:h-[500px] h-[300px] object-cover rounded-md"
                                         loading="lazy">
                                </li>
                            @endforeach
                        </ul>

                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>

                        <div class="slider-indicators">
                            @foreach($product->media as $media)
                                <button class="{{ $loop->index == 0 ? 'active' : '' }}"></button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="lg:w-[50%] md:w-[50%] w-[100%]  p-4 flex flex-col">
                    <span class="font-bold text-[2f6246] text-[30px]">{{ $product->name }}</span>
                    <span>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          <i class="fa fa-star text-[#a4a43a]"></i>
                          (5 reviews)</span>
                    <span class="font-bold text-[#4a8f00] text-[25px] mt-2 line-through">₹{{ $product->price }}</span>
                    <span class="font-bold text-[#4a8f00] text-[25px] mt-2">₹{{ $product->discountPrice }}</span>
                    <span class="font-bold text-[#2f6246] text-[20px] mt-4">Benefits:-</span>
                    {!! $product->benefits !!}
                    @if($product->quantity>0)
                        <span class="font-bold text-[#4a8f00] text-[25px] mt-2"> Stock Available</span>
                    @else
                        <span class="font-bold text-[#FF0000] text-[25px] mt-2"> Out Of Stock</span>
                    @endif
                    <span class="font-bold text-black text-[15px] mt-2">Country of Origin: India</span>
                    @if($product->quantity>0)

                        <div class="w-full flex justify-end gap-4 mt-2">

                                <Link href="{{route('cart.add',$product)}}"
                                    class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs">
                                    Add To Cart
                                </Link>

                            <a href="{{route('checkout')}}">
                                <button
                                    class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs">
                                    Buy Now
                                </button>
                            </a>

                        </div>
                    @endif
                </div>
            </div>

            @php
                $productDetails = [
                    'description' => $product->description,
                    'ingredients' => $product->ingredients,
                    'dosage' => $product->dosage,
                ];
            @endphp
            <ProductDetails :productDetails="@js($productDetails)"/>
        </div>
    </div>
</x-frontend-layout>
