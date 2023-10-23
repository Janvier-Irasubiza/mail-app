<div class="font-sans text-gray-900 dark:text-gray-100 antialiased py-5" style="margin: auto; width: 90%">

<div class="d-flex mb-4 justify-content-center align-items-center">
<h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Send new email</h2>

</div>

<form method="POST" action="{{ route('send-email') }}">
            @csrf

            <div>
                <x-label for="to" value="{{ __('To') }}" />
                <x-input id="to" class="block mt-1 w-full" type="email" name="to" :value="old('to')" required autofocus autocomplete="to" />
            </div>

            <div class="mt-4">
                <x-label for="subject" value="{{ __('Subject') }}" />
                <x-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required autocomplete="subject" />
            </div>

            <div class="mt-4">
                <x-label for="content" value="{{ __('Content') }}" />
                <textarea rows="4" id="content" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="content"  autocomplete="content"></textarea>
            </div>

            <div class="flex items-center justify-start mt-5">

                <x-button class="">
                    {{ __('send email') }}
                </x-button>
            </div>
        </form>

    </div>