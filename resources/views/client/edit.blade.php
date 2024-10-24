<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('clients.update',$client) }}">
                        @method('PUT')
                        @csrf
                        <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                        <!-- Name -->
                        <div>
                            <x-input-label for="first_name" :value="__('Name')"/>
                            <x-text-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name"
                                          :value="old('contact_name',$client->contact_name)"  autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('contact_name')" class="mt-2"/>
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')"/>
                            <x-text-input id="contact_email" class="block mt-1 w-full" type="text" name="contact_email"
                                          :value="old('contact_email',$client->contact_email)"  autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('contact_email')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="contact_phone" :value="__('Phone')"/>
                            <x-text-input id="contact_phone" class="block mt-1 w-full" type="text" name="contact_phone"
                                          :value="old('contact_phone',$client->contact_phone)"  autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('contact_phone')" class="mt-2"/>
                        </div>


                        <h3 class="text-xl font-semibold mt-4">Company Information</h3>
                        <!-- Company Name -->
                        <div class="mt-4">
                            <x-input-label for="company_name" :value="__('Company Name')"/>
                            <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name"
                                          :value="old('company_name',$client->company_name)"  autocomplete="username"/>
                            <x-input-error :messages="$errors->get('company_name')" class="mt-2"/>
                        </div>
                        <!-- Company Address -->
                        <div class="mt-4">
                            <x-input-label for="company_address" :value="__('Company Address')"/>
                            <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_address"
                                          :value="old('company_address',$client->company_address)"  autocomplete="username"/>
                            <x-input-error :messages="$errors->get('company_address')" class="mt-2"/>
                        </div>

                        <!-- Company City -->
                        <div class="mt-4">
                            <x-input-label for="company_city" :value="__('Company City')"/>
                            <x-text-input id="company_city" class="block mt-1 w-full" type="text" name="company_city"
                                          :value="old('company_city',$client->company_city)"  autocomplete="username"/>
                            <x-input-error :messages="$errors->get('company_city')" class="mt-2"/>
                        </div>

                        <!-- Company Zip -->
                        <div class="mt-4">
                            <x-input-label for="company_zip" :value="__('Company Zip')"/>
                            <x-text-input id="company_zip" class="block mt-1 w-full" type="text" name="company_zip"
                                          :value="old('company_zip',$client->company_zip)"  autocomplete="username"/>
                            <x-input-error :messages="$errors->get('company_zip')" class="mt-2"/>
                        </div>

                        <!-- Company Vat -->
                        <div class="mt-4">
                            <x-input-label for="company_vat" :value="__('Company Vat')"/>
                            <x-text-input id="company_vat" class="block mt-1 w-full" type="text" name="company_vat"
                                          :value="old('company_vat',$client->company_vat)"  autocomplete="username"/>
                            <x-input-error :messages="$errors->get('company_vat')" class="mt-2"/>
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
