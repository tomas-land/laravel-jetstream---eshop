<button {{ $attributes->merge(['type' => 'submit', 'class' => 'uppercase inline-flex items-center px-12 py-4 bg-gray-800 
border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
focus:outline-none disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
