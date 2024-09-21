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

    {{-- <h1 class="text-primary">
        <center>This is the reports page</center>
    </h1> --}}
    <div class="text-black">
        <div x-data = "{open: false, toggle(){this.open = !this.open}}">
            <button @click="toggle()">Toggle Content</button>

            <div x-show="open">
                Content...
            </div>
        </div>
    </div>
</x-app-layout>
