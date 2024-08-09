<x-app-layout>


    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm text-black sm:rounded-lg">
                <center>
                    <h1 class="text-5xl">SUPPLY MANAGEMENT SYSTEM</h1>
                </center>
            </div>
        </div>
    </div>


    <div x-data="{
        openTab: 1,
        activeClasses: 'border-l border-t border-r rounded-t text-black underline ',
        inactiveClasses: 'text-primary hover:text-blue-800 '
    }" class="mx-auto sm:px-6 lg:px-8 ">
        <ul class="flex justify-center">
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                <a :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                    Property Acknowledgement Report
                </a>
            </li>
            <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                <a :class="openTab === 2 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Requsition Slip</a>
            </li>
            <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                <a :class="openTab === 3 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Purchace order</a>
            </li>
            <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                <a :class="openTab === 4 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Acknowledgement Report</a>
            </li>
            <li @click="openTab = 5" :class="{ '-mb-px': openTab === 5 }" class="mr-1">
                <a :class="openTab === 5 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Condemning of Equipment</a>
            </li>
        </ul>
        <div class="w-full pt-4 text-black flex justify-center">
            <div x-show="openTab === 1">Tab #1</div>
            <div x-show="openTab === 2">Tab #2</div>
            <div x-show="openTab === 3">Tab #3</div>
            <div x-show="openTab === 4">Tab #4</div>
            <div x-show="openTab === 5">Tab #5</div>
        </div>
    </div>

</x-app-layout>
