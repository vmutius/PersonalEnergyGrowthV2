<div>
    Einen Post erstellen

    <flux:fieldset>
    <flux:legend>Neuer Post</flux:legend>

    <div class="space-y-6">
        <div class="grid grid-cols-2 gap-x-4 gap-y-6">
            <flux:input wire:model="form.title" label="Title" />
            <flux:input wire:model="form.slug" label="Slug" />
            <flux:input wire:model="form.published_at" type="date" label="Published At"/>
            <flux:select wire:model="form.categorie_id" label="Kategorie">
                <option selected>United States</option>
                <!-- ... -->
            </flux:select>
            <flux:textarea wire:model="form.body"
                label="Body"
            />
            <flux:input wire:model="form.image" label="Image" />
            <flux:checkbox wire:model="form.featured" label="Featured" />
            
        </div>
        <flux:button wire:click="saveNewPost" variant="primary">Speichern</flux:button>

        @if($success)
            <span class="block mb-4 text-primary-600">Post saved successfully.</span>
        @endif
    </div>
</flux:fieldset>
</div>
