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

    <div class="w-full flex flex-col mx-auto sm:px-6 lg:px-8 text-black ">
        <div class="w-full flex flex-row justify-between bg-text p-4 rounded-lg ">
            <div class="flex items-center space-x-2">
                <span class="material-symbols-outlined">
                    person
                </span>
                <h1 class="text-xl">Users</h1>
            </div>
            <div
                class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center text-xl font-bold border-1 border-gray-600">
                3
            </div>
        </div>

        <div class="bg-text p-4 rounded-lg w-full mt-12">

            <div class="flex items-center space-x-2 pb-2">
                <span class="material-symbols-outlined text-red-600">
                    warning
                </span>
                <h1 class="text-xl">Low on Stock</h1>
            </div>
            <table class="w-full border-2 border-secondary border-spacing-1 table-auto">
                <thead class="bg-text">
                    <tr>
                        <th class="border border-secondary w-1/12">STOCK ID</th>
                        <th class="border border-secondary w-8/12">STOCK NAME</th>
                        <th class="border border-secondary w-1/12">QUANTITY</th>
                        <th class="border border-secondary w-1/12">ACTION</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="border border-secondary">1</td>
                        <td class="border border-secondary">Stock 1</td>
                        <td class="border border-secondary">10</td>
                        <td class="border border-secondary"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
