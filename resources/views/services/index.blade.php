<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HireMe</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        :root {
            ::-webkit-scrollbar {
                height: 10px;
                width: 10px
            }

            ::-webkit-scrollbar-track {
                background: #efefef;
                border-radius: 6px
            }

            ::-webkit-scrollbar-thumb {
                background: #d5d5d5;
                border-radius: 6px
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #c4c4c4
            }
    </style>
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">

    <!--Header-->
    <div class="w-full m-0 p-0 bg-cover bg-bottom"
        style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
        <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
            <!--Title-->
            <p class="text-white font-extrabold text-3xl md:text-5xl">
                👻 HireMe
            </p>
            <p class="text-xl md:text-2xl text-gray-500">Local Services</p>
        </div>
    </div>

    <!--Container-->
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <!--Nav-->
            <nav class="mt-0 w-full">
                <div class="container mx-auto flex items-center">

                    <div class="flex w-1/2 pl-4 text-sm">
                        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                            <li class="mr-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2"
                                    href="{{ route('service.create') }}">Create</a>
                            </li>
                            
                        </ul>
                    </div>


                    <div class="flex w-1/2 justify-end content-center">
        
                        <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                 
                        </a>
                    </div>

                </div>
            </nav>

            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

                <!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6">
                @foreach ($services as $service)
                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <img src="https://source.unsplash.com/collection/225/800x600"
                                    class="h-64 w-full rounded-t pb-6">
                                <div
                                    class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden p-6">
                                    <div class="flex items-center justify-between">
                                        <div></div>
                                        <p class="text-gray-600 text-xs md:text-sm">Category: 
                                            {{ $service->displayCategory->name }}</p>
                                    </div>
                                </div>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Title: {{ $service->title }} </div>
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">Cost: {{ $service->cost }}</p>
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6" >Name: 
                                    {{ $service->displayName->name}}</p>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">Description: 
                                    {{ $service->description }}
                                </p>
                            </div>
                            <div
                                class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name"
                                        src="http://i.pravatar.cc/300" alt="Avatar of Author">
                                    <p class="text-gray-600 text-xs md:text-sm">Last update: {{ $service->updated_at }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
					</div>


            </div>
        </div>


        <footer class="bg-gray-900">
            <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

                <div class="w-full mx-auto flex flex-wrap items-center">
                    <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                        <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
                            👻 <span class="text-base text-gray-200">HireMe</span>
                        </a>
                    </div>
                    <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                        <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                    href="{{ route('service.create') }}">Create</a>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </footer>

        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>
        <script>
            //Init tooltips
            tippy('.avatar')
        </script>
</body>

</html>


