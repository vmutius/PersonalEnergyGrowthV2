<div class="container px-5 py-24 mx-auto">
   <x-h1>Glossar</x-h1>
   <div class="my-5">
         <nav class="relative z-0 flex border rounded-xl overflow-hidden dark:border-neutral-700" aria-label="Tabs"
            role="tablist">
            @foreach ($glossaryTerms as $letter => $terms)
               <button type="button"
                     class="hs-tab-active:border-b-blue-600 hs-tab-active:text-rolling-stone-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-blue-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-rolling-stone-500 hover:text-rolling-stone-700 text-sm font-medium text-center overflow-hidden hover:bg-rolling-stone-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-400"
                     id="bar-with-underline-item-3" data-hs-tab="#bar-with-underline-3"
                     aria-controls="bar-with-underline-3" role="tab">
                     <a href="#{{ $letter }}"
                        class="hover:underline inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                        aria-current="page">{{ $letter }}</a>
               </button>
            @endforeach
         </nav>
   </div>

   @foreach ($glossaryTerms as $letter => $terms)
         <div id="{{ $letter }}">
            <h2>{{ $letter }}</h2>
            <ul>
               @foreach ($terms as $term)
                     <div class="grid grid-cols-4 gap-4 m-4">
                        <div>
                           <p class="pe-6">{{ $term->term }} </p>
                        </div>
                        <div class="col-span-3">
                           <p class="ps-6">{{ $term->definition }}</p>
                        </div>
                     </div>
               @endforeach
            </ul>
         </div>
   @endforeach
</div>

