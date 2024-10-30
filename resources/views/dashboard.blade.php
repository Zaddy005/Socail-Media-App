{{-- <x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    {{ __("You're logged in!") }}


                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

{{-- @include("layouts.index") --}}
@extends("layouts.index")

@section('content')

    <div class="container mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <h1 class="text-2xl font-semibold mb-4">Dynamic Content</h1>
            <p>This section will contain the dynamic content that changes based on user interaction or routes. You can replace this with components, pages, or data fetched from an API.</p>
            
            <!-- Example of dynamic data -->
            <div class="mt-6">
                <div class="bg-blue-100 p-4 rounded-lg">Latest Post: "How to Build a Complex Layout with TailwindCSS"</div>
            </div>
        </div>
    </div>

@endsection