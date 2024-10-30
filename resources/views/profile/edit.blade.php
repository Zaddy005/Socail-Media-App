<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div class="py-[100px]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg ">
                {{-- <form action="" method="POST" > --}}
                    @csrf


                    <div class=" text-center bg-slate-100 font-semibold rounded-md px-3 py-2 my-2" >
                        <label for="image" class="md:text-normal" >Choose Image</label>
                        <input type="file" name="image" id="image" class="border-0 focus:outline-none" hidden />
                    </div>

                    <div>
                        <button type="submit" class="bg-gray-800 text-white rounded-md font-semibold text-xs uppercase tracking-widest border border-transparent px-3 py-2 hover:bg-gray-700 active:bg-gray-700 focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150 "  > Save </button>
                    </div>
                {{-- </form> --}}
            </div>


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
