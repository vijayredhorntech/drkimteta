<x-splade-modal>
    {{ $form['title'] }}
    <x-splade-form :action="$form['action']" :method="$form['method']">
        <x-splade-input name="name" placeholder="Category Name" label="Category Name" required/>
        <x-splade-file name="image" placeholder="Title Image" label="Title Image" filepond preview max-size="512KB" required/>
        <x-splade-submit :label="$form['title']"/>
    </x-splade-form>
</x-splade-modal>
