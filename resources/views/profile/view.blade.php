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

            @foreach ($posts as $post)
                {{-- post view --}}
                <a href="" >
                    <div class="container my-3 mx-auto">
                        <div class="bg-white border rounded-lg shadow p-6">
                            <div class="flex items-center" >
                                <a href="javascript:void(0);" class="w-12 h-12 block rounded-full bg-blue-100 overflow-hidden d-flex justify-center items-center" >
                                    <img class="w-auto h-auto" src="https://i.redd.it/snoovatar/avatars/1be74877-5bfa-41b5-8805-90297e8d8af3.png" />
                                </a>
                                <div class="mx-3 text-gray-500" >
                                    <h6>{{ $post->user['name'] }}</h6>
                                    <span>{{ $post->created_at->diffForHumans() }}</span>
                                </div>

                            </div>
                            
                            <div class="mt-6">
                                <div class="w-auto h-auto">
                                    {{ $post->title }}
                                </div>
                            </div>

                            <div class="flex items-center mt-2" >
                                <a href="javascript:void(0);" class="bg-gray-100 border rounded-md
                                px-3 py-1 mx-2 me-2" ><i class="fa-solid fa-thumbs-up"></i> Like</a>
                                <a href="javascript:void(0);" class="bg-gray-100 border rounded-md
                                px-3 py-1 mx-2 ms-2"  ><i class="fa-solid fa-message"></i> Comment</a>
                            </div>
                        </div>    
                    </div>
                </a>    
            @endforeach

        </div>

    </div>

</div>

@endsection