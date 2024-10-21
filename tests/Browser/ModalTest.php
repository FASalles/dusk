<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ModalTest extends DuskTestCase
{
    public function testClickButtonAndAgree()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->assertSee('Laravel') // Verifica se o texto 'Laravel' está visível
                ->assertVisible('@open-modal-button') // Verifica se o botão está visível
                ->click('@open-modal-button') // Clica no botão para abrir o modal
                ->pause(1000) // Aguarda 1 segundo para garantir que o modal comece a abrir
                ->waitForText('Consent Terms') // Aguarda o texto do título do modal aparecer
                ->assertSee('Consent Terms'); // Verifica se o texto do modal está visível
    });





}


}
