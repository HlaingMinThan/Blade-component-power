<x-layout>
    <x-Dropdown alignment="left">
        <x-slot name="dropdownBtn">
            <button
                @click="dropdownOpen = !dropdownOpen"
                class="bg-blue-500 text-white p-2 rounded"
            >
                Click Here
            </button>
        </x-slot>
        <x-dropdown-link>Link 1</x-dropdown-link>
        <x-dropdown-link>Link 1</x-dropdown-link>
        <x-dropdown-link>Link 1</x-dropdown-link>
        <x-dropdown-link>Link 1</x-dropdown-link>
    </x-Dropdown>
</x-layout>