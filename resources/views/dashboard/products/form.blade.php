@seoTitle(__('Create Product'))

<x-dashboard-layout>
    {{-- Head --}}
    <div class="flex justify-between items-end mb-4">
        <div>
            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                <ul class="flex flex-wrap items-center gap-x-2">
                    <li class="flex gap-x-2">
                        <Link href="{{ route('dashboard.product.home') }}"
                              class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        Products
                        </Link>
                    </li>
                    <li class="flex items-center gap-x-2">
                        <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs rtl:rotate-180"></i>
                        <a href="#"
                           class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                            Create
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                Create Product
            </h1>
        </div>
    </div>

    <x-section-content>
        <x-splade-form :action="$form['action']" method="POST" :default="$default ?? []" enctype="multipart/form-data">
            <x-splade-input  name="name" label="Product Name" placeholder="Product Name" required/>
            <x-splade-input  name="price" label="Product Price" placeholder="Product Price" required/>
            <x-splade-input  name="discount" label="Product Discount(in Percentage)"
                            placeholder="Product Discount"
                            required/>
            <x-splade-textarea  name="description" label="Product Description"
                               placeholder="Product Description"
                               required/>

            <x-splade-textarea  name="ingredients" label="Product Ingredients"
                               placeholder="Product Ingredients"
                               required/>
            <x-splade-textarea  name="dosage" label="Product Dosage" placeholder="Product Dosage"
                               required/>

            <x-splade-input  name="origin" label="Product Origin" placeholder="Product Origin" required/>
            <x-splade-input  name="quantity" label="Product Quantity" placeholder="Product Quantity"
                            required/>
            <x-splade-file  name="images" label="Product Images" placeholder="Product Images" filepond
                           preview multiple max-size="1MB" :accept="['image/png']"/>
            <x-splade-submit label="{{ $form['submit'] }} Product"/>
        </x-splade-form>
    </x-section-content>
</x-dashboard-layout>
