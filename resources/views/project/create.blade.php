<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('projects.store') }}">
                       @csrf
                        <!--Title -->
                        <div>
                            <x-input-label for="title" :value="__('Title')"/>
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                          :value="old('title')"  autofocus autocomplete="title"/>
                            <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')"/>
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                                          :value="old('description')"  autofocus autocomplete="description"/>
                            <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                        </div>

                        <!-- Deadline -->
                        <div class="mt-4">
                            <x-input-label for="deadline_at" :value="__('Deadline')"/>
                            <x-text-input id="deadline_at" class="block mt-1 w-full" type="date" name="deadline_at"
                                          :value="old('deadline_at')"  autocomplete="deadline"/>
                            <x-input-error :messages="$errors->get('deadline_at')" class="mt-2"/>
                        </div>

                        <!-- Assigned User -->
                        <div class="mt-4">
                            <x-input-label for="user_id" :value="__('Assigned User')"/>
                            <select id="user_id" name="user_id" class="block mt-1 w-full">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">
                                        @selected(old('user_id') == $user->id)
                                        {{$user->first_name}} {{$user->last_name}}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2"/>
                        </div>

                        <!-- Client -->
                        <div class="mt-4">
                            <x-input-label for="client_id" :value="__('Client')"/>
                            <select id="client_id" name="client_id" class="block mt-1 w-full">
                                @foreach($clients as $client)
                                    <option value="{{$client->id}}">
                                        @selected(old('client_id') == $client->id)
                                        {{$client->company_name}}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('client_id')" class="mt-2"/>
                        </div>

                        <!-- Status -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')"/>
                            <select id="status" name="status" class="block mt-1 w-full">
                                @foreach(\App\Enums\ProjectStatus::cases() as $status)
                                    <option value="{{$status->value}}">
                                        @selected(old('status') == $status->value)
                                        {{$status->value}}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                        </div>

                        <div class=" mt-4">
                            <x-primary-button>
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
