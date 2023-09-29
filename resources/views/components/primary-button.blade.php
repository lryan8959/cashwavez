<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-white text-dark border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-white-700 focus:bg-white active:bg-white-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }} style="color:black;">
    {{ $slot }}
</button>
