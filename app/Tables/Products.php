<?php

namespace App\Tables;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Products extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('name', 'LIKE', "%{$value}%")
                        ->orWhere('price', 'LIKE', "%{$value}%");
                });
            });
        });

        return QueryBuilder::for(Product::class)
            ->defaultSort('-created_at')
            ->allowedSorts(['name', 'price'])
            ->allowedFilters(['name', 'price', $globalSearch])
            ->paginate()
            ->withQueryString();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id', 'name', 'price', 'discount'])
            ->column('name', __('main.name'), sortable: true, searchable: true)
            ->column('category.name', __('Category'), sortable: true, searchable: true)
            ->column('price', __('Price'), sortable: true, searchable: true)
            ->column('discount', __('Discount'), sortable: true, searchable: true)
            ->column('actions', __('main.action'))
            ->selectFilter(key: 'is_active', label: __('main.status'), options: [
                true => __('main.active'),
                false => __('Inactive'),
            ]);
    }
}
