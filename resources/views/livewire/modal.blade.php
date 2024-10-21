<div>

    <h1>Laravel</h1>

    <x-button
        label="Open"
        x-on:click="$openModal('simpleModal')"
        dusk="open-modal-button"
        primary
        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
    />

    <x-modal name="simpleModal" dusk="simple-modal" aria-hidden="true">
        <div class="modal-content" dusk="modal-content"> <!-- Aplicando Dusk em um contêiner do modal -->
            <x-card title="Consent Terms">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto quas dolore, non odit delectus quo hic eius, sit asperiores iusto dolores
                repellat molestiae sequi ullam animi reprehenderit cumque corrupti dolor!
            </x-card>
        </div>
    </x-modal>

</div>
