<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('users.update', $user) }}">
                        @method('PUT')
                        @csrf
                        <!--First Name -->
                        <div>
                            <x-input-label for="first_name" :value="__('First Name')"/>
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                          value="{{$user->first_name}}"  autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
                        </div>

                        <!-- Last Name -->
                        <div class="mt-4">
                            <x-input-label for="last_name" :value="__('Last Name')"/>
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                          value="{{$user->last_name}}"  autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')"/>
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                          value="{{$user->email}}"  autocomplete="username"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                        </div>

                        <div class=" mt-4">
                            <x-primary-button>
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
