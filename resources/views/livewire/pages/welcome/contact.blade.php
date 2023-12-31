<?php

use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {

    public string $full_name;

    public string $email;

    public string $phones;

    public string $objectif;

    public string $message;

    public function sendMessages(): void
    {
        $validation = $this->validate([
            'full_name' => ['required', 'string', 'min:10'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phones' => ['required', 'string'],
            'objectif' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);
        Notification::sendNow(
            $validation['email'],
            new ContactNotification($validation)
        );
    }

}; ?>

<div>
    <div class="mx-auto max-w-6xl w-full px-5 sm:px-8 md:px-14 lg:px-5 gap-10 lg:gap-12">
        <div class=" mx-auto relative py-8 space-y-4 px-8">
            <h1 class=" text-5xl font-bold text-center">Nous cotactez</h1>
            <p class="text-lg tracking-wide text-center leading-8">
                Nous sommes à votre disposition pour vous conseiller et vous accompagner <br> dans tous vos projets.
            </p>
        </div>
        <div class=" mx-auto relative py-20 mb-5 max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-col-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div
                    class=" space-y-3 border hover:border-slate-400 duration-300 ease-linear hover:ring-0 transition hover:transition-all shadow-md px-4 py-4 rounded-lg">
                    <h1 class=" text-center text-lg font-bold">Telephone</h1>
                    <p class=" text-center text-[13px]"> (+243) 991 184 000 <span>/</span> (+243) 814
                        218 994 </p>
                </div>
                <div
                    class=" space-y-3 border hover:border-slate-400 duration-300 ease-linear hover:ring-0 transition hover:transition-all shadow-md px-4 py-4 rounded-lg">
                    <h1 class=" text-center text-lg font-bold">Email</h1>
                    <p class=" text-center text-[13px]"> infos@rc-investment.net </p>
                </div>
                <div
                    class=" space-y-3 border hover:border-slate-400 duration-300 ease-linear hover:ring-0 transition hover:transition-all shadow-md px-4 py-4 rounded-lg">
                    <h1 class=" text-center text-lg font-bold">Adresse</h1>
                    <p class=" text-center text-[13px]">
                        734, Avenue Kapenda, Lubumbashi Rd Congo
                    </p>
                </div>
            </div>
        </div>
        <div class=" mx-auto max-w-7xl relative">
            <div class="mt-14 pb-5">
                <form wire:submit.prevent="sendMessages" method="post" class=" shadow border px-6 py-8 rounded-lg">
                    <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <label for="full_name"
                                   class="block mb-2 text-base leading-6 font-medium text-gray-900">Full
                                name</label>
                            <input
                                type="text"
                                placeholder="Full name"
                                id="full_name"
                                name="full_name"
                                wire:model.live="full_name"
                                value="{{ old('full_name') }}"
                                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 @error('full_name') border-red-500 @enderror  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @error('full_name')
                            <span class="text-red-500 font-semibold py-2 ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="email"
                                   class="block mb-2 text-base leading-6 font-medium text-gray-900">Email
                                address</label>
                            <input
                                type="text"
                                placeholder="Email address"
                                id="email"
                                name="email"
                                wire:model.live="email"
                                value="{{ old('email') }}"
                                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 @error('email') border-red-500 @enderror text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            @error('email')
                            <span class="text-red-500 font-semibold py-2 ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="phones"
                                   class="block mb-2 text-base leading-6 font-medium text-gray-900">Telephone</label>
                            <input
                                type="text"
                                placeholder="Phone number"
                                id="phones"
                                name="phones"
                                wire:model.live="phones"
                                value="{{ old('phones') }}"
                                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 @error('phones') border-red-500 @enderror text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @error('phones')
                            <span class="text-red-500 font-semibold py-2 ">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col">
                            <label for="objectif"
                                   class="block mb-2 text-base leading-6 font-medium text-gray-900">Objectif</label>
                            <input
                                type="text"
                                placeholder="Votre objectif"
                                id="objectif"
                                name="objectif"
                                wire:model.live="objectif"
                                value="{{ old('objectif') }}"
                                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 @error('objectif') border-red-500 @enderror text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @error('objectif')
                            <span class="text-red-500 font-semibold py-2 ">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col col-span-full">
                            <label for="message"
                                   class="block mb-2 text-base leading-6 font-medium text-gray-900">Your
                                message</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="8"
                                wire:model.live="message"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 @error('message') border-red-500 @enderror rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Leave a comment...">{{ old('messages') }}</textarea>
                            @error('message')
                            <span class="text-red-500 font-semibold py-2 ">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                            class="mt-8 px-3 py-2 bg-red-500 text-white text-sm rounded-lg font-semibold shadown-lg transition hover:transition ease-in-out duration-200 hover:bg-red-600">
                        <span>Soumettre</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

