<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('example_types.update', $exampleType->id) }}">
                    @method('patch')
                    @csrf
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$exampleType->name ?? old('name')" required autofocus />
                        </div>

                        <!-- Status -->
                        <div class="mt-2">
                            <x-label for="Is Active?" :value="__('Is Active?')" />

                            <x-select
                                id="is_active"
                                name="is_active"
                                class="block mt-1 w-full"
                                :options="[1 => 'Active', 0 => 'Inactive']"
                            />
                        </div>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center justify-end mt-0">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
