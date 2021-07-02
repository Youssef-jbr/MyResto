<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <div>
            <label for="rue" class="block text-sm font-medium text-gray-700 leading-5">
                Adresse
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input id="rue" name="rue" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('rue') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            @error('rue')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6">
            <label for="cp" class="block text-sm font-medium text-gray-700 leading-5">
                Code postal
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input id="cp" name="cp" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('cp') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            @error('cp')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-6">
            <label for="ville" class="block text-sm font-medium text-gray-700 leading-5">
                Ville
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input id="ville" name="ville" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ville') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            @error('ville')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-6">
            <label for="telephone" class="block text-sm font-medium text-gray-700 leading-5">
                N° de téléphone
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input id="telephone" name="telephone" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('telephone') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            @error('telephone')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

    </div>
</div>
