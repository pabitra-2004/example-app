 @props(['title'])

 <div x-data="{
     id: $id('accordion-item')
 }" {{ $attributes }}>
     <h2 class="accordion-header">
         <button type="button" x-on:click="showItem = (showItem === id ? null : id)"
             class="flex items-center justify-between w-full p-4 text-left bg-gray-100 border border-gray-200">
             {{ $title }}

             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="size-6 transition duration-300 ease-in-out" :class="{ '-rotate-180': showItem === id }">
                 <path fill-rule="evenodd"
                     d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                     clip-rule="evenodd" />
             </svg>
         </button>
     </h2>
     <div x-show="showItem === id" x-collapse.duration.1000ms>
         <div class="p-4">
             {{ $slot }}
         </div>
     </div>
 </div>
