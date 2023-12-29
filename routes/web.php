<?php

use Livewire\Volt\Volt;

Volt::route('/', 'pages.welcome.index')->name('home');
Volt::route('/contact', 'pages.welcome.contact')->name('contact');
