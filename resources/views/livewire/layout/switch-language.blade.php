<label
    x-data="{ language: '{{ $selectedLanguage }}' }"
>
    <select
        name="language"
        id="language"
        x-model="language"
        @change="() => $wire.switchLanguage($event.target.value)"
        class="w-full rounded-xl dark:bg-gray-900 px-8 py-2 sm:w-max"
    >
        <option value="en">English</option>
        <option value="fr">French</option>
    </select>
</label>
