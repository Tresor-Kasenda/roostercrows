<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
}; ?>
<div>
    <x-herosection/>
    <x-service/>
    <x-about-us/>
    <x-teams/>
    <x-call-to-action/>
</div>

