@seoTitle(__('Categories'))

<x-dashboard-layout>
    {{-- Head --}}
    <div class="flex justify-between items-end mb-4">
        <div>
            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                <ul class="flex flex-wrap items-center gap-x-2">
                    <li class="flex gap-x-2">
                        <Link href="{{ route('dashboard.category.home') }}"
                              class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        Categories
                        </Link>
                    </li>
                    <li class="flex items-center gap-x-2">
                        <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs rtl:rotate-180"></i>
                        <a href="#" class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                            @lang('main.list')
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                Categories
            </h1>
        </div>
        <div>
            <Link href="{{ route('dashboard.category.create') }}" modal>
                @lang('main.add_new')
            </Link>
        </div>
    </div>

    <x-section-content>
        <x-splade-table :for="$categories">
            <x-splade-cell image as="$category">
                <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" class="w-10 h-10 rounded-full">
            </x-splade-cell>

            <x-splade-cell products as="$category">
                {{ $category->products->count() }}
            </x-splade-cell>
            <x-splade-cell actions as="$category">
                    <Link href="{{ route('dashboard.category.edit', $category) }}" modal>
                        @lang('main.edit')
                    </Link>
                    <Link href="{{ route('dashboard.category.destroy', $category) }}" method="DELETE" confirm="{{ __('main.confirm_delete_user') }}" confirm-text="Are You Sure you want to delete this category" class="text-red-600 dark:text-red-600">
                        @lang('main.delete')
                    </Link>
            </x-splade-cell>
        </x-splade-table>
    </x-section-content>
</x-dashboard-layout>
