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
                    <span class="font-bold text-black text-[25px]">Your Cart</span>
                </div>
            </div>

            @forelse($cartItems as $item)
                <div class="w-full mt-10 flex lg:flex-row md:flex-row flex-col" style="margin-bottom: 20px">
                    <div class="lg:w-[40%] md:w-[40%] w-[100%] flex">
                        <img class="w-[100px] h-[100px] rounded-md object-cover"
                             src="{{ asset('storage/'.$item->product->media->first()->media) }}" alt="">
                        <span class="font-bold text-[20px] text-black ml-4 my-auto">{{ $item->product->name }}</span>
                    </div>
                    <div class="lg:w-[60%] md:w-[60%] w-[100%] flex" style="justify-content: space-evenly">
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2">Price</span>
                            <span class="font-bold text-[20px] text-black mt-2">₹{{ round($item->amount / $item->quantity) }}</span>
                        </div>
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2">Quantity</span>
                            <x-splade-form action="{{ route('cart.update',$item->product) }}" :default="['quantity'=>$item->quantity]"  submit-on-change="quantity">
                                <x-splade-input name="quantity" type="number" min="1"/>
                                <p v-if="form.processing" class="bg-yellow-100 rounded-md p-2">Updating Cart...</p>
                            </x-splade-form>
                        </div>
                        <div class="my-auto flex flex-col ">
                            <span class="font-bold text-[20px] text-black mt-2"> Sub Total</span>
                            <span class="font-bold text-[20px] text-black mt-2">₹{{ round($item->amount) }}</span>
                        </div>
                        <div class="my-auto flex flex-col ">
                            <button
                                class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold p-2 rounded-sm text-xs">
                                <i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                </div>
            @empty
                Empty Cart
            @endforelse
            <div class="w-full">
                <div class="w-full flex justify-end">
                    <a href="{{route('shop')}}">
                        <button
                            class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 font-semibold px-4 py-3 rounded-sm text-xs">
                            Continue Shopping
                        </button>
                    </a>
                </div>
            </div>

            <div class="container mx-auto mt-8 p-8">
                <div class="flex lg:flex-row md:flex-row flex-col gap-4">
                    <!-- Billing Address Form (Left Side) -->
                    <div class="lg:w-2/3 md:w-2/3 w-full pr-8 border-[1px] border-[#437158] p-4 rounded-md">
                        <form>
                            <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-4">
                                <div class="mb-4 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full">
                                    <label for="name" class="block text-gray-700 font-semibold mb-2">Coupon
                                        Discount</label>
                                    <input type="text" id="name" name="name"
                                           class="w-full  px-4 py-3 border-[1px] border-[#437158] focus:border-[#437158] rounded-sm focus:outline-none focus:ring-0 "
                                           placeholder="Coupon Code:" required>
                                </div>
                                <div class="mb-4 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full flex flex-col">
                                    <label for="name" class="block text-gray-700 font-semibold mb-2">&nbsp</label>

                                    <a href="{{route('contact')}}">
                                        <button
                                            class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 h-max my-auto text-md font rounded-sm font-bold w-max">
                                            Apply Coupon
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="lg:w-1/3 md:w-1/3 w-full">
                        <div class="bg-white shadow-lg shadow-[#437158] p-4 rounded-lg">
                            <div class="flex flex-col">
                                <div class="mb-2l mb-4">
                                    <span class="font-semibold">Sub Total:</span> ₹{{ $subTotal }}<br>
                                    <span class="font-semibold">Shipping:</span> Free
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-lg font-semibold">Total:</span> ₹{{ $total }}
                            </div>
                            <div class="mt-10 flex justify-end">
                                <a href="{{route('checkout')}}">
                                    <button
                                        class="bg-[#437158] border-[1px] border-[#437158] text-white hover:bg-white hover:text-[#437158] hover:border-[1px] hover:border-[#437158] transition ease-in duration-200 px-8 py-3 h-max my-auto text-sm font rounded-sm  font-bold w-max">
                                        Proceed To Checkout
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-layout>
