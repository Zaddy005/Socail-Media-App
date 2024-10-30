@extends("layouts.index")

@section('content')

<div class="mx-8" >

    <a href="{{route('dashboard')}}" class="bg-gray-500 text-white tracking-wide rounded-md px-3 py-2" > Back </a>


    <div class="mt-5" >

        <div class="container mx-auto">
            <div class="flex items-center" >
                <a href="javascript:void(0);" class="w-20 h-20 block rounded-full bg-blue-100 overflow-hidden d-flex justify-center items-center" >
                    <img class="w-auto h-auto" src="https://i.redd.it/snoovatar/avatars/1be74877-5bfa-41b5-8805-90297e8d8af3.png" />
                </a>
                <div class="mx-3 text-gray-500" >
                    <h6 class="text-bold" >{{ Auth::user()->name }}</h6>
                    <p> 0 follower  </p>
                </div>

            </div>

            <div class="border rounded-md px-2 py-2 my-2" >
                <ul class="flex" >
                    <li class="font-bold hover:bg-blue-100 active:bg-blue-100 rounded-md px-2 py-1 mx-2" ><a href="javascript:void(0)" >Posts</a></li>
                    <li class="font-bold hover:bg-blue-100 rounded-md px-2 py-1 mx-2" ><a href="javascript:void(0)" >Followers</a></li>
                    <li class="font-bold hover:bg-blue-100 rounded-md px-2 py-1 mx-2" ><a href="javascript:void(0)" >Followings</a></li>
                    <li class="font-bold hover:bg-blue-100 rounded-md px-2 py-1 mx-2" ><a href="javascript:void(0)" >Photos</a></li>
                </ul>
            </div>

            <div class="container my-2 mx-auto">
                <div class="bg-white border rounded-lg shadow p-6">
                    <div class="flex items-center" >
                        <a href="javascript:void(0);" class="w-12 h-12 block rounded-full bg-blue-100 overflow-hidden d-flex justify-center items-center" >
                            <img class="w-auto h-auto" src="https://i.redd.it/snoovatar/avatars/1be74877-5bfa-41b5-8805-90297e8d8af3.png" />
                        </a>
                        <div class="mx-3 text-gray-500" >
                            <h6>{{ Auth::user()->name }}</h6>
                            <span> 0 follower  </span>
                        </div>
        
                    </div>
                    
                    <!-- Example of dynamic data -->
                    <div class="mt-6">
                        <div class="w-auto h-16 text-justify overflow-hidden break-words bg-blue-100 py-3 px-4 rounded-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                    </div>
                </div>
            </div>

            

        </div>

    </div>

</div>

@endsection