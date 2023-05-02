<head>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div id="basic" class="col-lg-12 layout-spacing ">
    <div class="widget-content widget-content-area pb-5 pt-5 box box-shadow ">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="col-lg-5">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4 col-lg-5">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <!-- Organisation Id -->
            <div class="mt-4 col-lg-5">
                <x-input-label for="organization" :value="__('Organization')" />
                <x-input-select id="organization" class="block mt-1  w-full" name="organization"
                    :values="$organizationsName" />
                <x-input-error :messages="$errors->get('organization')" class="mt-2" />
            </div>

            <div class="flex items-center mt-4">
                <x-primary-button >
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>