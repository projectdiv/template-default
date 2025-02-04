<x-layouts.main title="Home">
    <main class="px-4 py-8 mx-auto max-w-2xl">
        <div class="flex flex-col items-start mb-10">
            <img src="{{ $my->avatar }}" alt="Profile picture" class="object-cover mb-4 w-20 h-20 rounded-full">
            <h1 class="text-lg font-medium">{{ $my->name }}</h1>
            <h2 class="text-xl font-medium text-gray-600">{{ $my->title_headline }}</h2>
        </div>

        <div class="">
            <h1 class="text-4xl font-bold">Hey, I'm {{ explode(' ', $my->name)[0] }}.</h1>
            <h2 class="mb-8 text-3xl font-medium text-gray-500">{{ $my->description }}</h2>

            <p class="mb-3 text-lg text-gray-600">
                This is an example of the content that you can update by visiting the homepage link and clicking edit. If you want tl learn more about how to use Div, be sure to visit the Tour Guide, and you'll learn all about how you can use Div to carve your own corner of the internet.
            </p>


            <div class="flex flex-wrap gap-4 pt-4">
                <a href="mailto:your-email@example.com" class="inline-flex items-center px-4 py-2 text-white bg-black rounded-md transition-colors hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email
                </a>
                <a href="https://twitter.com/yourusername" class="inline-flex items-center px-4 py-2 rounded-md border border-gray-300 transition-colors hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                    </svg>
                    Twitter
                </a>
                <a href="https://linkedin.com/in/yourusername" class="inline-flex items-center px-4 py-2 rounded-md border border-gray-300 transition-colors hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    LinkedIn
                </a>
            </div>
        </div>
    </main>
</x-layouts.main>