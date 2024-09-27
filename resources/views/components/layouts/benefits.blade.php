<div>
    <div
        class="overflow-y-auto p-5 box-border flex flex-col items-center mx-auto leading-6 border-solid max-w-7xl xl:px-16 md:items-stretch md:justify-center md:py-24">
        <div class="relative pb-10">
            <x-h1>Nutzen von <x-tooltip :term="$glossaryTerms->first()">QiGong</x-tooltip></x-h1>
            <!-- FIXME: Hier muss der richtige Tooltip angezeigt werden. First ist falsch  -->
            <p
                class="w-full max-w-xl mx-auto mt-4 mb-0 text-sm font-medium leading-relaxed text-center text-rolling-stone-400 border-0 border-rolling-stone-200 lg:text-lg md:text-base">
                Check out our set of awesome features and tools. We are the industry leaders in providing quality tools,
                trusted and used by over 1,200 companies. We kind'of rock!
            </p>
        </div>

        <div class="z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
            <!-- Feature 1 -->
            <div class="col-span-3 text-rolling-stone-700 bg-rolling-stone-50 rounded-3xl" data-rounded="rounded-3xl"
                data-rounded-max="rounded-full">
                <div
                    class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 text-rolling-stone-700 border border-rolling-stone-200 rounded-full"
                        data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="leading-6 text-center text-rolling-stone-700 align-middle stroke-current w-7 h-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path fill="currentColor"
                                d="M-27.62 12.42h-.01c0-5.56-4.53-10.09-10.09-10.09c-5.54 0-10.05 4.49-10.09 10.03c0 .02-.01.04-.01.06c0 5.56 4.53 10.09 10.09 10.09c5.47 0 9.92-4.38 10.07-9.81c.02-.1.04-.19.04-.28m-10.1 9.08c-5.01 0-9.09-4.08-9.09-9.09v-.06a4.287 4.287 0 0 1 4.28-4.23c2.36 0 4.29 1.92 4.29 4.29h.02c0 2.92 2.38 5.3 5.3 5.3c1.25 0 2.38-.45 3.28-1.17c-1.5 2.94-4.56 4.96-8.08 4.96m-21.67-5.75a.486.486 0 0 0-.57-.09c-1.05.52-2.16.78-3.3.78c-4.14 0-7.5-3.37-7.5-7.5c0-2.38 1.1-4.57 3.03-6.01c.17-.12.19-.34.13-.54s-.29-.35-.49-.36c-.05 0-.11-.01-.16-.01c-5.5 0-9.98 4.48-9.98 9.98s4.48 9.98 9.98 9.98c3.79 0 7.31-2.21 8.97-5.64a.55.55 0 0 0-.11-.59M12 22.09C6.44 22.09 1.91 17.56 1.91 12S6.44 1.91 12 1.91S22.09 6.44 22.09 12S17.56 22.09 12 22.09m-.22-7.49v-3.33l-8.19 4.16c1.36 3.31 4.62 5.65 8.41 5.65c5.01 0 9.09-4.08 9.09-9.09c0-.63-.06-1.24-.18-1.83zM-90.24 1.89c-5.56 0-10.09 4.53-10.09 10.09s4.53 10.09 10.09 10.09s10.09-4.53 10.09-10.09s-4.53-10.09-10.09-10.09m5.74 15.51h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6c0-.33.27-.6.6-.6h11.31c.33 0 .6.27.6.6c0 .33-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m21.82-2.72l.92-1.76c.02-.04.02-.09-.01-.13c-.03-.04-.08-.06-.12-.05l-1.96.34l-1.39-1.42c-.03-.03-.08-.05-.13-.03c-.05.01-.08.05-.08.1l-.28 1.96l-1.78.88c-.04.02-.07.06-.07.11s.03.09.07.11l1.78.88l.29 1.96c.01.05.04.09.08.1c.01 0 .03.01.04.01c.03 0 .07-.01.09-.04l1.38-1.42l1.96.33c.05.01.09-.01.12-.05s.03-.09.01-.13zm3.2 4.52l.56-1.06c.02-.04.02-.09-.01-.13s-.07-.06-.12-.05l-1.18.2l-.83-.85c-.03-.03-.08-.05-.13-.03c-.05.01-.08.05-.08.1l-.17 1.18l-1.07.53c-.04.02-.07.06-.07.11s.03.09.07.11l1.07.53l.17 1.18c.01.05.04.09.08.1c.01 0 .03.01.04.01c.03 0 .07-.01.09-.04l.83-.86l1.18.2c.05.01.09-.01.12-.05s.03-.09.01-.13zm-4.66 2.77l.56-1.06c.02-.04.02-.09-.01-.13c-.03-.04-.07-.06-.12-.05l-1.18.2l-.83-.85c-.03-.03-.08-.05-.13-.03c-.05.01-.08.05-.08.1l-.17 1.18l-1.07.53c-.04.02-.07.06-.07.11s.03.09.07.11l1.07.53l.17 1.18c.01.05.04.09.08.1c.01 0 .03.01.04.01c.03 0 .07-.01.09-.04l.83-.86l1.18.2c.05.01.09-.01.12-.05s.03-.09.01-.13z" />
                        </svg>
                    </div>
                    <div
                        class="mt-4 text-left text-rolling-stone-700 border-0 border-rolling-stone-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                            Ausbalancierte Energie</h6>
                        <p
                            class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-rolling-stone-400 border-solid sm:mt-4">
                            Take advantage of our unlimited projects for your tasks and automated workflow.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-span-3 text-rolling-stone-700 bg-rolling-stone-50 rounded-3xl" data-rounded="rounded-3xl"
                data-rounded-max="rounded-full">
                <div
                    class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 text-rolling-stone-700 border border-rolling-stone-200 rounded-full"
                        data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="leading-6 text-center text-rolling-stone-700 align-middle stroke-current w-7 h-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path fill="currentColor"
                                d="M8.596 11.692q.858 0 1.462-.599t.879-1.437l-.854-.216q-.183.55-.553.959q-.37.409-.934.409q-.563 0-.933-.409q-.37-.409-.553-.959l-.854.216q.275.838.879 1.437q.603.6 1.461.6Zm3.41 5.5q.854 0 1.638-.36q.785-.36 1.464-1.063l-.639-.596q-.569.542-1.194.826q-.625.284-1.275.284t-1.275-.284q-.625-.284-1.194-.826l-.639.596q.704.721 1.482 1.072q.777.351 1.631.351Zm3.398-5.5q.858 0 1.461-.599q.604-.599.88-1.437l-.855-.216q-.182.55-.553.959q-.37.409-.933.409q-.564 0-.934-.409q-.37-.409-.553-.959l-.854.216q.275.838.88 1.437q.603.6 1.46.6ZM12.004 21q-1.867 0-3.51-.708q-1.644-.709-2.86-1.924q-1.216-1.214-1.925-2.856Q3 13.87 3 12.003q0-1.866.708-3.51q.709-1.643 1.924-2.859q1.214-1.216 2.856-1.925Q10.13 3 11.997 3q1.866 0 3.51.708q1.643.709 2.859 1.924q1.216 1.214 1.925 2.856Q21 10.13 21 11.997q0 1.866-.708 3.51q-.709 1.643-1.924 2.859q-1.214 1.216-2.856 1.925Q13.87 21 12.003 21ZM12 12Zm0 8q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Z" />
                        </svg>
                    </div>
                    <div
                        class="mt-4 text-left text-rolling-stone-700 border-0 border-rolling-stone-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">Ein
                            Gefühl der Ruhe und Entspannung</h6>
                        <p
                            class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-rolling-stone-400 border-solid sm:mt-4">
                            Unlimited tasks that perform some of your most important applications functionality.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-span-3 text-rolling-stone-700 bg-rolling-stone-50 rounded-3xl" data-rounded="rounded-3xl"
                data-rounded-max="rounded-full">
                <div
                    class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 text-rolling-stone-700 border border-rolling-stone-200 rounded-full"
                        data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="leading-6 text-center text-rolling-stone-700 align-middle stroke-current w-7 h-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none" />
                            <path
                                d="M9 4.55a8 8 0 016 14.9M15 15v5h5M5.63 7.16v.01M4.06 11v.01M4.63 15.1v.01M7.16 18.37v.01M11 19.94v.01" />
                        </svg>
                    </div>
                    <div
                        class="mt-4 text-left text-rolling-stone-700 border-0 border-rolling-stone-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                            Verbessertes Gleichgewicht und Koordination</h6>
                        <p
                            class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-rolling-stone-400 border-solid sm:mt-4">
                            Set it, and forget it. Our automated tools will allow you to automate your workflow.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-span-3 text-rolling-stone-700 bg-rolling-stone-50 rounded-3xl" data-rounded="rounded-3xl"
                data-rounded-max="rounded-full">
                <div
                    class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 text-rolling-stone-700 border border-rolling-stone-200 rounded-full"
                        data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="leading-6 text-center text-rolling-stone-700 align-middle stroke-current w-7 h-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none" />
                            <path
                                d="M3 12h3M12 3v3M7.8 7.8L5.6 5.6M16.2 7.8l2.2-2.2M7.8 16.2l-2.2 2.2M12 12l9 3-4 2-2 4-3-9" />
                        </svg>
                    </div>
                    <div
                        class="mt-4 text-left text-rolling-stone-700 border-0 border-rolling-stone-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                            Verbesserte Flexibilität und Beweglichkeit</h6>
                        <p
                            class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-rolling-stone-400 border-solid sm:mt-4">
                            We've built one of the simplest tools to integrate into your current system.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 5 -->
            <div class="col-span-3 text-rolling-stone-700 bg-rolling-stone-50 rounded-3xl" data-rounded="rounded-3xl"
                data-rounded-max="rounded-full">
                <div
                    class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 text-rolling-stone-700 border border-rolling-stone-200 rounded-full"
                        data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="leading-6 text-center text-rolling-stone-700 align-middle stroke-current w-7 h-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none" />
                            <path d="M13 3v7h6l-8 11v-7H5l8-11" />
                        </svg>
                    </div>
                    <div
                        class="mt-4 text-left text-rolling-stone-700 border-0 border-rolling-stone-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                            Glück und Wohlbefinden</h6>
                        <p
                            class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-rolling-stone-400 border-solid sm:mt-4">
                            We have the fastest response times than any other service in our industry.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 6 -->
            <div class="col-span-3 text-rolling-stone-700 border-0 bg-rolling-stone-50 rounded-3xl"
                data-rounded="rounded-3xl" data-rounded-max="rounded-full">
                <div
                    class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                    <div class="flex-shrink-0 p-3 text-rolling-stone-700 border border-rolling-stone-200 rounded-full"
                        data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="leading-6 text-center text-rolling-stone-700 align-middle stroke-current w-7 h-7"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M0 0h24v24H0z" stroke="none" />
                            <rect x="3" y="4" width="18" height="8" rx="3" />
                            <rect x="3" y="12" width="18" height="8" rx="3" />
                            <path d="M7 8v.01M7 16v.01" />
                        </svg>
                    </div>
                    <div
                        class="mt-4 text-left text-rolling-stone-700 border-0 border-rolling-stone-200 sm:mt-2 sm:ml-4">
                        <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                            Verbesserte allgemeine Gesundheit</h6>
                        <p
                            class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-rolling-stone-400 border-solid sm:mt-4">
                            We pride ourselves in our up-time metrics. We focus a lot of our energy on being reliable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blob Top Left -->
    <div class="absolute top-0 left-0 -ml-56 opacity-25 w-96 h-96">
        <svg class="text-pink-500 opacity-50 fill-current w-88 h-88" data-primary="pink-500" viewBox="0 0 200 200"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M25.5,-24.7C35.8,-15.2,48.9,-7.6,50.6,1.7C52.3,11,42.6,22,32.3,31.2C22,40.4,11,47.8,-1.9,49.8C-14.9,51.7,-29.7,48.1,-41.1,38.9C-52.5,29.7,-60.5,14.9,-60.3,0.3C-60,-14.3,-51.5,-28.6,-40,-38.1C-28.6,-47.6,-14.3,-52.3,-3.4,-48.9C7.6,-45.5,15.2,-34.2,25.5,-24.7Z"
                transform="translate(100 100)" />
        </svg>
    </div>
    <!-- Blob Top Right -->
    <div class="absolute top-0 right-0 -mb-56 opacity-25 w-96 h-96 -mr-72">
        <svg class="w-full h-full text-yellow-500 opacity-50 fill-current" data-primary="yellow-500"
            viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M44.3,-48.3C55.3,-33.4,60.4,-16.7,62.2,1.8C64,20.3,62.5,40.6,51.6,55.3C40.6,70,20.3,79,2.3,76.7C-15.7,74.4,-31.4,60.7,-46.7,46C-62,31.4,-76.9,15.7,-78.5,-1.6C-80,-18.8,-68.2,-37.6,-52.9,-52.5C-37.6,-67.5,-18.8,-78.5,-1.1,-77.5C16.7,-76.4,33.4,-63.3,44.3,-48.3Z"
                transform="translate(100 100)" />
        </svg>
    </div>
</div>
