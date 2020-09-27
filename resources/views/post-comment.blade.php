<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Comment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 pb-2">
                <div class="flex">
                    <div class="w-3/4">
                        <!-- Posts -->
                        {{-- <iframe 
                            width="100%" 
                            height="430" 
                            src="https://www.youtube.com/embed/xat1GVnl8-k"
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                        <div class="flex mt-2">
                            <svg 
                                class="mx-2 w-6 h-6 text-green-400" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path 
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                            </svg>
                            <div class="text-sm text-gray-600">99k</div>
                            <svg 
                                class="mx-2 w-6 h-6 text-gray-400 transform rotate-180" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path 
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                            </svg>
                            <div class="text-sm text-gray-600">290</div>
                        </div>

                        <div class="flex my-2">
                            <div class="w-1/4 pr-2">
                                <button type="button" class="text-left no-border">
                                    <img 
                                        class="w-full h-40" 
                                        src="https://i.ytimg.com/vi/jl9xKw_xEas/maxresdefault.jpg">
                                    <div class="text-sm font-black">Tony Igy - Astronomia (Official Video)</div>
                                </a>
                                <a href="#"><div class="text-xs font-gray-600">OneSevenMusic</div></a>
                            </div>
                            <div class="w-1/4 px-1">
                                <button type="button" class="text-left no-border">
                                    <img 
                                        class="w-full h-40" 
                                        src="https://i.ytimg.com/vi/IwzUs1IMdyQ/hqdefault.jpg">
                                    <div class="text-sm font-black">Vitas - The 7th Element</div>
                                </a>
                                <a href="#"><div class="text-xs font-gray-600">VITAS</div></a>
                            </div>
                            <div class="w-1/4 px-1">
                                <button type="button" class="text-left no-border">
                                    <img 
                                        class="w-full h-40" 
                                        src="https://i0.wp.com/souvienstoi.net/wp-content/uploads/2020/06/Afroman-Because-I-Got-High.jpg?fit=400%2C225&ssl=1&resize=1280%2C720">
                                    <div class="text-sm font-black">Afroman - Because I Got High (Official Video)</div>
                                </a>
                                <a href="#"><div class="text-xs font-gray-600">ogafroman</div></a>
                            </div>
                            <div class="w-1/4 pl-2">
                                <button type="button" class="text-left no-border">
                                    <img 
                                        class="w-full h-40" 
                                        src="https://i.ytimg.com/vi/r_0JjYUe5jo/maxresdefault.jpg">
                                    <div class="text-sm font-black">Eminem - Godzilla ft. Juice WRLD (Dir. by @_ColeBennett_)</div>
                                </a>
                                <a href="#"><div class="text-xs font-gray-600">Lyrical Lemonade</div></a>
                            </div>
                        </div> --}}
                        <!-- End Posts -->
                        <livewire:posts />
                    </div>
                    <div class="pl-3 w-1/4">
                        <div class="text-sm font-extrabold">Bloodhound Gang - The Bad Touch (Official Video)</div>
                        <div class="text-sm border-solid border-bottom pb-2">
                            <span class="italic">Uploaded By:</span> Luis Carbonel
                        </div>
                        <div class="w-full">
                            <div class="mt-2 font-extrabold">3 Comments</div>
                            <!-- Comment Card -->
                            <div class="flex my-4 w-auto">
                                <div class="w-1/6">
                                    <div class="h-10 w-10 flex items-center justify-center">
                                        <img class="rounded-full" src="data:image/jpeg;base64,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" alt="">
                                    </div>
                                </div>
                                <div class="w-5/6">
                                    <form method="POST">
                                        <textarea 
                                            class="pl-2 resize-y overflow-hidden text-sm text-gray-700 outline-none w-full border-solid border-bottom"
                                            placeholder="Add a public comment"
                                            ></textarea>

                                        <button 
                                            type="submit" 
                                            class="ml-1 float-right text-sm bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded disabled:opacity-50 cursor-not-allowed" disabled>
                                            Send
                                        </button>
                                        <button 
                                            type="button" 
                                            class="float-right text-sm bg-gray-400 hover:bg-gray-700 text-white font-bold py-1 px-3 rounded">
                                            Cancel
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Comment Card -->

                            <!-- Comentaries -->
                            <div class="w-auto px-1 overflow-auto" style="height: 450px">
                                <div class="flex mt-2 w-auto">
                                    <div class="w-1/6">
                                        <div class="h-10 w-10 flex items-center justify-center">
                                            <img class="rounded-full" src="https://previews.123rf.com/images/yupiramos/yupiramos1606/yupiramos160612689/58682996-avatar-ni%C3%B1o-sonriente-con-ropa-de-colores-azules-vista-frontal-sobre-fondo-aislado-ilustraci%C3%B3n-vectorial.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="w-5/6">
                                        <div class="w-full">
                                            <div class="flex">
                                                <span class="text-xs font-black ml-1">Denis Guzman</span>

                                                <svg 
                                                    class="ml-1 w-4 h-4 text-green-700" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round" 
                                                        stroke-linejoin="round" 
                                                        stroke-width="2" d="M5 13l4 4L19 7">
                                                    </path>
                                                </svg>

                                                <span class="ml-1 text-xs text-gray-700">right now</span>
                                            </div>

                                            <div class="text-sm text-gray-800 ml-1">Ay Caray! ...</div>
                                            <div class="text-gray-800 font-black text-sm"><a href="#">Read More</a></div>

                                            <div class="flex">
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-gray-400" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">1</div>
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-red-400 transform rotate-180" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">100</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex mt-2 w-auto">
                                    <div class="w-1/6">
                                        <div class="h-10 w-10 flex items-center justify-center">
                                            <img class="rounded-full" src="https://scontent.flim16-2.fna.fbcdn.net/v/t1.0-9/428086_512861588736096_417988120_n.jpg?_nc_cat=109&_nc_sid=174925&_nc_ohc=KPUeS20VpAwAX9KqgyL&_nc_ht=scontent.flim16-2.fna&oh=32afa6ee540f63743f35013beede2a56&oe=5F9419F7" alt="">
                                        </div>
                                    </div>
                                    <div class="w-5/6">
                                        <div class="w-full">
                                            <div class="flex">
                                                <span class="text-xs font-black ml-1">Joao Loayza</span>

                                                <svg 
                                                    class="ml-1 w-4 h-4 text-green-700" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round" 
                                                        stroke-linejoin="round" 
                                                        stroke-width="2" d="M5 13l4 4L19 7">
                                                    </path>
                                                </svg>

                                                <span class="ml-1 text-xs text-gray-700">1 week ago</span>
                                            </div>

                                            <div class="text-sm text-gray-800 ml-1">Extraño sufrir con C# y JQuery &#x1F610;</div>
                                            <div class="text-gray-800 font-black text-sm"><a href="#">Read More</a></div>

                                            <div class="flex">
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-gray-400" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">1</div>
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-red-400 transform rotate-180" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">99M</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex mt-2 w-auto">
                                    <div class="w-1/6">
                                        <div class="h-10 w-10 flex items-center justify-center">
                                            <img class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRhAEyNHlj7-FbMoYlYxmt-tTQOBnAPoGfZxA&usqp=CAU" alt="">
                                        </div>
                                    </div>
                                    <div class="w-5/6">
                                        <div class="w-full">
                                            <div class="flex">
                                                <span class="text-xs font-black ml-1">Carlos Mesta</span>

                                                {{-- <svg 
                                                    class="ml-1 w-4 h-4 text-green-700" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round" 
                                                        stroke-linejoin="round" 
                                                        stroke-width="2" d="M5 13l4 4L19 7">
                                                    </path>
                                                </svg> --}}

                                                <span class="ml-1 text-xs text-gray-700">8 months ago</span>
                                            </div>

                                            <div class="text-sm text-gray-800 ml-1"><a href="#">@Denis Guzman</a> Callate Oe! &#128540; Go Go Go Chibarrio</div>
                                            <div class="text-gray-800 font-black text-sm"><a href="#">Read More</a></div>

                                            <div class="flex">
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-green-400" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">9k</div>
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-gray-400 transform rotate-180" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex mt-2 w-auto">
                                    <div class="w-1/6">
                                        <div class="h-10 w-10 flex items-center justify-center">
                                            <img class="rounded-full" src="https://imgv2-2-f.scribdassets.com/img/word_user/90035460/72x72/aaecc257a0/1601100006?v=1" alt="">
                                        </div>
                                    </div>
                                    <div class="w-5/6">
                                        <div class="w-full">
                                            <div class="flex">
                                                <span class="text-xs font-black ml-1">Andrei Aguirre</span>

                                                {{-- <svg 
                                                    class="ml-1 w-4 h-4 text-green-700" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round" 
                                                        stroke-linejoin="round" 
                                                        stroke-width="2" d="M5 13l4 4L19 7">
                                                    </path>
                                                </svg> --}}

                                                <span class="ml-1 text-xs text-gray-700">2 Years Ago</span>
                                            </div>

                                            <div class="text-sm text-gray-800 ml-1">:) :# ... Como hago emoticons?</div>
                                            <div class="text-gray-800 font-black text-sm"><a href="#">Read More</a></div>

                                            <div class="flex">
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-green-400" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">9k</div>
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-gray-400 transform rotate-180" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex mt-2 w-auto">
                                    <div class="w-1/6">
                                        <div class="h-10 w-10 flex items-center justify-center">
                                            <img class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTzH08eisurAkWxVLBa3j8kAVhvwLyh1-zbxA&usqp=CAU" alt="">
                                        </div>
                                    </div>
                                    <div class="w-5/6">
                                        <div class="w-full">
                                            <div class="flex">
                                                <span class="text-xs font-black ml-1">Rocky Blanco</span>

                                                {{-- <svg 
                                                    class="ml-1 w-4 h-4 text-green-700" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round" 
                                                        stroke-linejoin="round" 
                                                        stroke-width="2" d="M5 13l4 4L19 7">
                                                    </path>
                                                </svg> --}}

                                                <span class="ml-1 text-xs text-gray-700">4 Years Ago</span>
                                            </div>

                                            <div class="text-sm text-gray-800 ml-1">.</div>
                                            <div class="text-gray-800 font-black text-sm"><a href="#">Read More</a></div>

                                            <div class="flex">
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-green-400" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">9k</div>
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-gray-400 transform rotate-180" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex mt-2 w-auto">
                                    <div class="w-1/6">
                                        <div class="h-10 w-10 flex items-center justify-center">
                                            <img class="rounded-full" src="https://dummyimage.com/800x800/777/fff" alt="">
                                        </div>
                                    </div>
                                    <div class="w-5/6">
                                        <div class="w-full">
                                            <div class="flex">
                                                <span class="text-xs font-black ml-1">Random Guy</span>

                                                {{-- <svg 
                                                    class="ml-1 w-4 h-4 text-green-700" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round" 
                                                        stroke-linejoin="round" 
                                                        stroke-width="2" d="M5 13l4 4L19 7">
                                                    </path>
                                                </svg> --}}

                                                <span class="ml-1 text-xs text-gray-700">7 Years Ago</span>
                                            </div>

                                            <div class="text-sm text-gray-800 ml-1">Please ignore me.</div>
                                            <div class="text-gray-800 font-black text-sm"><a href="#">Read More</a></div>

                                            <div class="flex">
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-green-400" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">9k</div>
                                                <svg 
                                                    class="mx-2 w-4 h-4 text-gray-400 transform rotate-180" 
                                                    fill="none" 
                                                    stroke="currentColor" 
                                                    viewBox="0 0 24 24" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path 
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <div class="text-xs text-gray-600">2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comentaries -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>