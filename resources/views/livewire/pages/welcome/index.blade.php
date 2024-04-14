<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] #[Title('Nous aidons les entreprises dans leurs developpement')] class extends Component {
}; ?>
<div>
    <x-herosection/>
    <x-partner/>
    <x-about-us/>
    <x-service/>
    <x-teams/>
    <x-call-to-action/>
</div>

