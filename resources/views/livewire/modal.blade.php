<div>
    <h1>Laravel</h1>

    {{$text}}

    <x-button label="Text" wire:click="pressButton()" dusk="text-button" />
    <x-button label="modal" x-on:click="$openModal('simpleModal')" dusk="modal-button" />

    <x-modal name="simpleModal">
        <x-card title="Consent Terms">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <x-slot name="footer" class="flex justify-end gap-x-4">
                <x-button flat label="Cancel" x-on:click="close" />

                <x-button primary label="I Agree" wire:click="agree" />
            </x-slot>
        </x-card>
    </x-modal>

</div>
