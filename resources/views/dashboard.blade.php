<x-app-layout>
    <div class="md:flex md:min-h-screen w-full ">
        <div @click.away="open = false"
            class="flex flex-col w-full md:w-64 text-gray-500 text-lg bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 bg-blue-800"
            x-data="{ open: false }">
            <div class="w-full text-center flex justify-center mt-11 mb-8">
                <img class="h-32 w-32"
                    src="https://secure.gravatar.com/avatar/17364d3da6022fc9311dfb3221404a90?s=256&d=mm&r=g">
            </div>
            <div class="bg-blue-700	 ">
                <div class="text-opacity-100" style="color: #25AAE2">
                    <p class="ml-10 my-4 " href="#">Panel de control </a>
                </div>
            </div>
            <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block pb-4 md:pb-0 md:overflow-y-auto">
                <div class="flex flex-col w-full">
                    <a class="ml-10 my-4" href="#">Cursos </a>

                    <a class="ml-10 my-4" href="#">Alumnes</a>
                </div>
            </nav>
        </div>
        <div style="font-size: 32px">
            <p class="text-gray-700 ml-4 my-6">Control panel</p>
        </div>
    </div>
</x-app-layout>