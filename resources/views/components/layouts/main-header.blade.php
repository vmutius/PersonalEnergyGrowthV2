<flux:header container class="bg-gradient-to-r from-primary-300 to-primary-800 shadow-md z-50">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:brand href="#" logo="{{ asset('images/LogoPEG.png') }}" name="Personal Energy Growth"
        class="max-lg:hidden dark:hidden" />

    <flux:spacer />

    <flux:navbar class="mr-4 max-lg:hidden">
        <flux:navbar.item icon="home" href="#" current>Home</flux:navbar.item>
        <flux:navbar.item icon="inbox" badge="12" href="#">Kurse</flux:navbar.item>
        <flux:navbar.item icon="document-text" href="#">Blog</flux:navbar.item>
        <flux:navbar.item icon="calendar" href="#">Glossar</flux:navbar.item>
        <flux:navbar.item icon="calendar" href="#">Kontakt</flux:navbar.item>
    </flux:navbar>

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
</flux:header>

<flux:sidebar stashable sticky class="lg:hidden bg-primary-200 border-r border-primary-500">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <flux:brand href="#" logo="{{ asset('images/LogoPEG.png') }}" name="Personal Energy Growth"
        class="px-2 dark:hidden" />


    <flux:navlist variant="outline">
        <flux:navlist.item icon="home" href="#" current>Home</flux:navlist.item>
        <flux:navlist.item icon="inbox" badge="12" href="#">QiGong</flux:navlist.item>
        <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>
        <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>
    </flux:navlist>

    <flux:spacer />

    <flux:navlist variant="outline">
        <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
        <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
    </flux:navlist>
</flux:sidebar>
