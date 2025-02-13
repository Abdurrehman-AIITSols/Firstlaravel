<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('message.dashboard') }}
        </h2>
        <form action="{{ route('lang.change') }}" method="GET">
    <select name="lang" onchange="this.form.submit()">
        <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
        <option value="fr" {{ session('locale') == 'fr' ? 'selected' : '' }}>French</option>
        <option value="es" {{ session('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
    </select>
</form>
    </x-slot>
<div class="div">
    @include('dashboardhome')
</div>
</x-app-layout>
