@seoTitle(__('Products'))

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
                        <a href="#" class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                            @lang('main.list')
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                Products
            </h1>
        </div>
        <div>
{{--                        @can('create users')--}}
                            <Link href="{{ route('dashboard.product.create') }}">
                                @lang('main.add_new')
                            </Link>
{{--                        @endcan--}}
        </div>
    </div>

    <x-section-content>
        <x-splade-table :for="$products">
                        <x-splade-cell actions as="$user">
                            @can('update users')
                                <x-nav-link href="{{ route('dashboard.product.edit', $user) }}">
                                    @lang('main.edit')
                                </x-nav-link>
                            @endcan
                            @can('delete users')
                                <x-nav-link href="{{ route('dashboard.user.destroy', $user) }}" method="DELETE" confirm="{{ __('main.confirm_delete_user') }}" confirm-text="{{ __('main.confirm_text_delete_user') }}" class="text-red-600 dark:text-red-600">
                                    @lang('main.delete')
                                </x-nav-link>
                            @endcan
                        </x-splade-cell>
        </x-splade-table>
    </x-section-content>
</x-dashboard-layout>
