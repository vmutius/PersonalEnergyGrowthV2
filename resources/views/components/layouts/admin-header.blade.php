<flux:sidebar sticky stashable class="bg-gradient-to-r from-primary-300 to-primary-800 shadow-md z-50">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <flux:brand href="#" logo="{{ asset('images/LogoPEG.png') }}" name="Personal Energy Growth"
        class="max-lg:hidden dark:hidden" />

    <flux:navlist variant="outline">
        <flux:navlist.item icon="home" href="{{ route('admin_dashboard') }}" class="text-zinc-700">Dashboard</flux:navlist.item>
        <flux:navlist.item icon="inbox" badge="12" href="{{ route('admin_user') }}" class="text-zinc-700">Benutzer</flux:navlist.item>
        <flux:navlist.item icon="document-text" href="{{ route('admin_blogpost') }}" class="text-zinc-700">Blogposts</flux:navlist.item>
        <flux:navlist.item icon="calendar" href="{{ route('admin_course') }}" class="text-zinc-700">Kurse</flux:navlist.item>
    </flux:navlist>

    <flux:spacer />

</flux:sidebar>

<flux:header
    class="flex justify-end bg-white lg:bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:navbar class="lg:hidden w-full">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="start">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                    <flux:menu.radio>Truly Delta</flux:menu.radio>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:navbar>

    <flux:navbar class="mr-4">
        <flux:navbar.item icon="magnifying-glass" href="#" class="text-zinc-700" label="Search" />
        <flux:navbar.item class="max-lg:hidden" icon="cog-6-tooth" href="#" class="text-zinc-700" label="Settings" />
        <flux:navbar.item class="max-lg:hidden" icon="information-circle" class="text-zinc-700" href="#" label="Help" />
    </flux:navbar>

    <flux:dropdown position="top" align="start">
        <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                <flux:menu.radio>Truly Delta</flux:menu.radio>
            </flux:menu.radio.group>

            <flux:menu.separator />

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
        </flux:menu>
    </flux:dropdown>
</flux:header>
