<x-layout>
    <x-Modal title="deactive acc?">
        <x-slot name="modalButton">
            <Button
                class="bg-green-500 p-3 rounded text-white"
                @click="open=true"
            >
                Open Modal
            </Button>
        </x-slot>
        Are you sure you want to deactivate your account? All of your data will be
        permanently removed. This action cannot be undone.
    </x-Modal>
</x-layout>