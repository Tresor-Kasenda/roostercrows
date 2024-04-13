<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
}; ?>
<div>
    <x-herosection/>
    <x-partner/>
    <x-about-us/>
    <x-service/>
    <x-teams/>
    <x-call-to-action/>
</div>

