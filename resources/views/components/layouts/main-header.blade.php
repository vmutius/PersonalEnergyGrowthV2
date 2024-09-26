<flux:header container class="bg-gradient-to-r from-primary-300 to-primary-800 shadow-md z-50 lg:px-16 px-6">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:brand href="#" logo="{{ asset('images/LogoPEG.png') }}" name="Personal Energy Growth"
        class="max-lg:hidden dark:hidden" />
    <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc."
        class="max-lg:!hidden hidden dark:flex" />

    <flux:spacer />

    <flux:navbar class="mr-4">
        <flux:navbar.item icon="home" href="#" current>Home</flux:navbar.item>
        <flux:navbar.item icon="inbox" badge="12" href="#">Inbox</flux:navbar.item>
        <flux:navbar.item icon="document-text" href="#">Documents</flux:navbar.item>
        <flux:navbar.item icon="calendar" href="#">Calendar</flux:navbar.item>
    </flux:navbar>


</flux:header>
