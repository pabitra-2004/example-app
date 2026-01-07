 <div x-data="{
     showItem: null,
 }" {{ $attributes->merge(['class' => 'border border-gray-300 rounded overflow-hidden']) }}>
     {{ $slot }}
 </div>
