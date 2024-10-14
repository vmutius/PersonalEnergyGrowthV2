<flux:table :paginate="$this->users">
    <flux:columns>
        <flux:column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection" wire:click="sort('name')">Name</flux:column>
        <flux:column>Email</flux:column>
        <flux:column>Erstellt am</flux:column>
        <flux:column>Rolle</flux:column>
    </flux:columns>

    <flux:rows>
        @foreach ($this->users as $user)
            <flux:row :key="$user->id">
                <flux:cell variant="strong" class="flex items-center gap-3">{{ $user->name }}</flux:cell>
                <flux:cell>{{ $user->email }}</flux:cell>
                <flux:cell class="whitespace-nowrap">{{ $user->created_at }}</flux:cell>

                <flux:cell>
                    <flux:badge size="sm" inset="top bottom">
                        {{ $user->role->name}}
                    </flux:badge>
                </flux:cell>

                </flux:row>
            @endforeach
        </flux:rows>
    </flux:table>

