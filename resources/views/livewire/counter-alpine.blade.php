{{--Alpine Version--}}
<div
    x-data="{ count : 0 }"
    class="flex flex-col items-center justify-center p-4 gap-4"
>
    <div class="flex items-center gap-12">
        <button
            x-on:click="count--"
            class="bg-amber-400 text-4xl px-2 text-white rounded-md hover:bg-amber-500 transition-all hover:shadow-md"
        >-</button>
        <span
            x-text="count"
            class="bg-gray-300 p-5 rounded"
        ></span>
        <button
            x-on:click="count++"
            class="bg-amber-400 text-4xl px-2 text-white rounded-md hover:bg-amber-500 transition-all hover:shadow-md"
        >+</button>
    </div>
    <button
        x-on:click="count = 0"
        class="bg-red-500 text-2xl px-2 text-white rounded-md hover:bg-red-600 transition-all hover:shadow-md"
    >Reset</button>
</div>
