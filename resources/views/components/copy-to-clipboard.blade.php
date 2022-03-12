<div class="w-full max-w-xl mb-8 sm:bg-white p-2 rounded-full sm:border sm:border-indigo-300 sm:overflow-hidden">
    <div class="flex flex-col sm:flex-row">
        <input type="text" class="flex-1 px-4 py-3 text-center sm:text-left sm:py-0 sm:px-6 focus:ring-0 focus:border-none focus:outline-none bg-white rounded-3xl" value="{{ URL::route('user', auth()->user()) }}" disabled>
        <button type="button" class="flex-shrink-0 mt-3 sm:mt-0 px-6 py-3 bg-indigo-900 text-yellow-200 rounded-3xl">
            copy link
        </button>
    </div>
</div>
