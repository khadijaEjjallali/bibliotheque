
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard - Envoyer un e-mail
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 text-green-600">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 text-red-600">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('mail.envoyer') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="sujet" class="block mb-2">
                            Sujet
                        </label>
                        <input
                            type="text"
                            id="sujet"
                            name="sujet"
                            value="{{ old('sujet') }}"
                            required
                            maxlength="150"
                            class="w-full border-gray-300 rounded-md shadow-sm"
                        >
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block mb-2">
                            Message
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            class="w-full border-gray-300 rounded-md shadow-sm"
                        >{{ old('message') }}</textarea>
                    </div>

                    <button
                        type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md"
                    >
                        Envoyer
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
