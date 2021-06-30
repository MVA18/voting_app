<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none placeholder-text-gray-900 px-4 py-2 pl-8">
            </input>
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div><!-- end filters -->

    <div class="ideas-container space-y-6 my-6">
        <div class="ideas-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 ht-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="test-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quasi non
                        repellat laudantium blanditiis doloribus ut nulla labore in unde dolorem officia
                        temporibus commodi, maxime nemo quis aliquam mollitia dolorum reprehenderit sequi
                        quisquam suscipit sed dignissimos. Consectetur distinctio nostrum aut quam eveniet
                        dolorem, quo deserunt cumque sit illum nihil! Tenetur dolore consequatur maxime
                        omnis harum et, minima repudiandae amet, quibusdam accusantium, ipsam quos debitis
                        modi vero repellendus obcaecati vitae quasi quidem. Perspiciatis iure totam
                        aperiam eveniet veniam! Quibusdam ipsa sunt neque numquam totam maxime. Quibusdam,
                        excepturi suscipit beatae aliquid nulla culpa, doloribus fugiat officia ullam
                        qui voluptatem. Iste, optio facilis!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end ideas-container -->
        <div class="ideas-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500 background-blue">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-blue border border-grey-200 text-white hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voted</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?woman&crop=woman&v=1" alt="avatar" class="w-14 ht-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="test-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quasi non
                        repellat laudantium blanditiis doloribus ut nulla labore in unde dolorem officia
                        temporibus commodi, maxime nemo quis aliquam mollitia dolorum reprehenderit sequi
                        quisquam suscipit sed dignissimos. Consectetur distinctio nostrum aut quam eveniet
                        dolorem, quo deserunt cumque sit illum nihil! Tenetur dolore consequatur maxime
                        omnis harum et, minima repudiandae amet, quibusdam accusantium, ipsam quos debitis
                        modi vero repellendus obcaecati vitae quasi quidem. Perspiciatis iure totam
                        aperiam eveniet veniam! Quibusdam ipsa sunt neque numquam totam maxime. Quibusdam,
                        excepturi suscipit beatae aliquid nulla culpa, doloribus fugiat officia ullam
                        qui voluptatem. Iste, optio facilis!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-xxs font-bold uppercase leading-none rounded-full text-center text-white w-28 h-7 py-2 px-4">In Progress</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end ideas-container -->
        <div class="ideas-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?man&crop=man&v=1" alt="avatar" class="w-14 ht-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="test-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quasi non
                        repellat laudantium blanditiis doloribus ut nulla labore in unde dolorem officia
                        temporibus commodi, maxime nemo quis aliquam mollitia dolorum reprehenderit sequi
                        quisquam suscipit sed dignissimos. Consectetur distinctio nostrum aut quam eveniet
                        dolorem, quo deserunt cumque sit illum nihil! Tenetur dolore consequatur maxime
                        omnis harum et, minima repudiandae amet, quibusdam accusantium, ipsam quos debitis
                        modi vero repellendus obcaecati vitae quasi quidem. Perspiciatis iure totam
                        aperiam eveniet veniam! Quibusdam ipsa sunt neque numquam totam maxime. Quibusdam,
                        excepturi suscipit beatae aliquid nulla culpa, doloribus fugiat officia ullam
                        qui voluptatem. Iste, optio facilis!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-xxs font-bold uppercase leading-none rounded-full text-center text-white w-28 h-7 py-2 px-4">Closed</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end ideas-container -->
    </div> <!-- end ideas-container -->
</x-app-layout>