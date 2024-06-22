@extends('layouts.blog')
@section('content')
    <div class="px-2">
        <h1 class="font-semibold text-2xl mb-6 border-b-2">Bài viết mới</h1>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2 px-2">
        <div class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200">
            <a href="#">
                <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 max-h-52 ease-in-out transition duration-500"
                    src="https://images.unsplash.com/photo-1433838552652-f9a46b332c40?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">Post title... Post title... Post title... Post
                    title... Post title... Post title... Post title... Post title... </p>
                <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">ante eget velit sodales
                    commodo. Suspendisse lobortis aliquet pulvinar. Phasellus eget malesuada lacus, vitae volutpat felis.
                    Aliquam congue luctus est, maximus laoreet sem commodo ac. Nam mattis leo vitae lorem efficitur, mattis
                    malesuada lectus ultricies. Morbi accumsan nec nunc eu mollis.Mauris maximus nulla ut justo aliquam, in
                    rutrum enim tristique. Morbi quis magna vestibulum, dignissim velit eleifend, porta sapien. Praesent
                    vitae tempus orci. Fusce placerat dolor leo. Nam sit amet convallis tortor, vel auctor arcu. Sed
                    tristique egestas congue. Etiam at maximus eros, ac semper ligula. Pellentesque at hendrerit turpis.
                    Donec ullamcorper orci nec finibus dictum. Aliquam ullamcorper dolor a mi vulputate lobortis. Morbi
                    tincidunt, nibh nec congue dictum, elit orci tempor ipsum, vitae lacinia orci eros ut orci. Sed eget
                    lectus ac mi euismod posuere ut vitae dolor. Mauris non commodo sem, ac vehicula leo. In hac habitasse
                    platea dictumst. Fusce sit amet congue lectus. Donec odio enim, condimentum vel orci ac, aliquet
                    volutpat sapien.</p>
            </a>
            <div class="w-full px-2 my-1 pb-2">
                <a href="#">
                    <span
                        class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Lập
                        trình</span>
                </a>
                <a href="#">
                    <span
                        class="bg-green-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Mày
                        là thằng nào?</span>
                </a>
                <a href="#">
                    <span
                        class="bg-red-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Đố</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Tags</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Laravel</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Java</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">.NET</span>
                </a>
            </div>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">20-12-23 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1" src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
        <div class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200">
            <a href="#">
                <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 max-h-52 ease-in-out transition duration-500"
                    src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">Post title... Post title... Post title... Post
                    title... Post title... Post title... Post title... Post title... </p>
                <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">ante eget velit sodales
                    commodo. Suspendisse lobortis aliquet pulvinar. Phasellus eget malesuada lacus, vitae volutpat felis.
                    Aliquam congue luctus est, maximus laoreet sem commodo ac. Nam mattis leo vitae lorem efficitur, mattis
                    malesuada lectus ultricies. Morbi accumsan nec nunc eu mollis.Mauris maximus nulla ut justo aliquam, in
                    rutrum enim tristique. Morbi quis magna vestibulum, dignissim velit eleifend, porta sapien. Praesent
                    vitae tempus orci. Fusce placerat dolor leo. Nam sit amet convallis tortor, vel auctor arcu. Sed
                    tristique egestas congue. Etiam at maximus eros, ac semper ligula. Pellentesque at hendrerit turpis.
                    Donec ullamcorper orci nec finibus dictum. Aliquam ullamcorper dolor a mi vulputate lobortis. Morbi
                    tincidunt, nibh nec congue dictum, elit orci tempor ipsum, vitae lacinia orci eros ut orci. Sed eget
                    lectus ac mi euismod posuere ut vitae dolor. Mauris non commodo sem, ac vehicula leo. In hac habitasse
                    platea dictumst. Fusce sit amet congue lectus. Donec odio enim, condimentum vel orci ac, aliquet
                    volutpat sapien.</p>
            </a>
            <div class="w-full px-2 my-1 pb-2">
                <a href="#">
                    <span
                        class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Lập
                        trình</span>
                </a>
                <a href="#">
                    <span
                        class="bg-green-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Mày
                        là thằng nào?</span>
                </a>
                <a href="#">
                    <span
                        class="bg-red-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Đố</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Tags</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Laravel</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Java</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">.NET</span>
                </a>
            </div>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">20-12-23 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1" src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
        <div class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200">
            <a href="#">
                <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 max-h-52 ease-in-out transition duration-500"
                    src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">Post title... Post title... Post title... Post
                    title... Post title... Post title... Post title... Post title... </p>
                <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">ante eget velit sodales
                    commodo. Suspendisse lobortis aliquet pulvinar. Phasellus eget malesuada lacus, vitae volutpat felis.
                    Aliquam congue luctus est, maximus laoreet sem commodo ac. Nam mattis leo vitae lorem efficitur, mattis
                    malesuada lectus ultricies. Morbi accumsan nec nunc eu mollis.Mauris maximus nulla ut justo aliquam, in
                    rutrum enim tristique. Morbi quis magna vestibulum, dignissim velit eleifend, porta sapien. Praesent
                    vitae tempus orci. Fusce placerat dolor leo. Nam sit amet convallis tortor, vel auctor arcu. Sed
                    tristique egestas congue. Etiam at maximus eros, ac semper ligula. Pellentesque at hendrerit turpis.
                    Donec ullamcorper orci nec finibus dictum. Aliquam ullamcorper dolor a mi vulputate lobortis. Morbi
                    tincidunt, nibh nec congue dictum, elit orci tempor ipsum, vitae lacinia orci eros ut orci. Sed eget
                    lectus ac mi euismod posuere ut vitae dolor. Mauris non commodo sem, ac vehicula leo. In hac habitasse
                    platea dictumst. Fusce sit amet congue lectus. Donec odio enim, condimentum vel orci ac, aliquet
                    volutpat sapien.</p>
            </a>
            <div class="w-full px-2 my-1 pb-2">
                <a href="#">
                    <span
                        class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Lập
                        trình</span>
                </a>
                <a href="#">
                    <span
                        class="bg-green-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Mày
                        là thằng nào?</span>
                </a>
                <a href="#">
                    <span
                        class="bg-red-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Đố</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Tags</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Laravel</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Java</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">.NET</span>
                </a>
            </div>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">13-05-23 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1" src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
        <div class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200">
            <a href="#">
                <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 max-h-52 ease-in-out transition duration-500"
                    src="https://images.unsplash.com/photo-1707343848552-893e05dba6ac?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">Post title... Post title... Post title... Post
                    title... Post title... Post title... Post title... Post title... </p>
                <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">ante eget velit sodales
                    commodo. Suspendisse lobortis aliquet pulvinar. Phasellus eget malesuada lacus, vitae volutpat felis.
                    Aliquam congue luctus est, maximus laoreet sem commodo ac. Nam mattis leo vitae lorem efficitur, mattis
                    malesuada lectus ultricies. Morbi accumsan nec nunc eu mollis.Mauris maximus nulla ut justo aliquam, in
                    rutrum enim tristique. Morbi quis magna vestibulum, dignissim velit eleifend, porta sapien. Praesent
                    vitae tempus orci. Fusce placerat dolor leo. Nam sit amet convallis tortor, vel auctor arcu. Sed
                    tristique egestas congue. Etiam at maximus eros, ac semper ligula. Pellentesque at hendrerit turpis.
                    Donec ullamcorper orci nec finibus dictum. Aliquam ullamcorper dolor a mi vulputate lobortis. Morbi
                    tincidunt, nibh nec congue dictum, elit orci tempor ipsum, vitae lacinia orci eros ut orci. Sed eget
                    lectus ac mi euismod posuere ut vitae dolor. Mauris non commodo sem, ac vehicula leo. In hac habitasse
                    platea dictumst. Fusce sit amet congue lectus. Donec odio enim, condimentum vel orci ac, aliquet
                    volutpat sapien.</p>
            </a>
            <div class="w-full px-2 my-1 pb-2">
                <a href="#">
                    <span
                        class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Lập
                        trình</span>
                </a>
                <a href="#">
                    <span
                        class="bg-green-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Mày
                        là thằng nào?</span>
                </a>
                <a href="#">
                    <span
                        class="bg-red-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Đố</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Tags</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Laravel</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Java</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">.NET</span>
                </a>
            </div>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">22-08-23 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1" src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
        <div class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200">
            <a href="#">
                <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 max-h-52 ease-in-out transition duration-500"
                    src="https://images.unsplash.com/photo-1542856391-010fb87dcfed?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">Post title... Post title... Post title... Post
                    title... Post title... Post title... Post title... Post title... </p>
                <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">ante eget velit sodales
                    commodo. Suspendisse lobortis aliquet pulvinar. Phasellus eget malesuada lacus, vitae volutpat felis.
                    Aliquam congue luctus est, maximus laoreet sem commodo ac. Nam mattis leo vitae lorem efficitur, mattis
                    malesuada lectus ultricies. Morbi accumsan nec nunc eu mollis.Mauris maximus nulla ut justo aliquam, in
                    rutrum enim tristique. Morbi quis magna vestibulum, dignissim velit eleifend, porta sapien. Praesent
                    vitae tempus orci. Fusce placerat dolor leo. Nam sit amet convallis tortor, vel auctor arcu. Sed
                    tristique egestas congue. Etiam at maximus eros, ac semper ligula. Pellentesque at hendrerit turpis.
                    Donec ullamcorper orci nec finibus dictum. Aliquam ullamcorper dolor a mi vulputate lobortis. Morbi
                    tincidunt, nibh nec congue dictum, elit orci tempor ipsum, vitae lacinia orci eros ut orci. Sed eget
                    lectus ac mi euismod posuere ut vitae dolor. Mauris non commodo sem, ac vehicula leo. In hac habitasse
                    platea dictumst. Fusce sit amet congue lectus. Donec odio enim, condimentum vel orci ac, aliquet
                    volutpat sapien.</p>
            </a>
            <div class="w-full px-2 my-1 pb-2">
                <a href="#">
                    <span
                        class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Lập
                        trình</span>
                </a>
                <a href="#">
                    <span
                        class="bg-green-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Mày
                        là thằng nào?</span>
                </a>
                <a href="#">
                    <span
                        class="bg-red-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Đố</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Tags</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Laravel</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Java</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">.NET</span>
                </a>
            </div>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">25-12-22 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1" src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
        <div class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200">
            <a href="#">
                <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 max-h-52 ease-in-out transition duration-500"
                    src="https://plus.unsplash.com/premium_photo-1664361480872-6416aab14696?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">Post title... Post title... Post title... Post
                    title... Post title... Post title... Post title... Post title... </p>
                <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">ante eget velit sodales
                    commodo. Suspendisse lobortis aliquet pulvinar. Phasellus eget malesuada lacus, vitae volutpat felis.
                    Aliquam congue luctus est, maximus laoreet sem commodo ac. Nam mattis leo vitae lorem efficitur, mattis
                    malesuada lectus ultricies. Morbi accumsan nec nunc eu mollis.Mauris maximus nulla ut justo aliquam, in
                    rutrum enim tristique. Morbi quis magna vestibulum, dignissim velit eleifend, porta sapien. Praesent
                    vitae tempus orci. Fusce placerat dolor leo. Nam sit amet convallis tortor, vel auctor arcu. Sed
                    tristique egestas congue. Etiam at maximus eros, ac semper ligula. Pellentesque at hendrerit turpis.
                    Donec ullamcorper orci nec finibus dictum. Aliquam ullamcorper dolor a mi vulputate lobortis. Morbi
                    tincidunt, nibh nec congue dictum, elit orci tempor ipsum, vitae lacinia orci eros ut orci. Sed eget
                    lectus ac mi euismod posuere ut vitae dolor. Mauris non commodo sem, ac vehicula leo. In hac habitasse
                    platea dictumst. Fusce sit amet congue lectus. Donec odio enim, condimentum vel orci ac, aliquet
                    volutpat sapien.</p>
            </a>
            <div class="w-full px-2 my-1 pb-2">
                <a href="#">
                    <span
                        class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Lập
                        trình</span>
                </a>
                <a href="#">
                    <span
                        class="bg-green-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Mày
                        là thằng nào?</span>
                </a>
                <a href="#">
                    <span
                        class="bg-red-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Đố</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Tags</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Laravel</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Java</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">.NET</span>
                </a>
            </div>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">25-01-24 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1" src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
        <div class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200">
            <a href="#">
                <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 max-h-52 ease-in-out transition duration-500"
                    src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?q=80&w=1883&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">Post title... Post title... Post title... Post
                    title... Post title... Post title... Post title... Post title... </p>
                <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">ante eget velit sodales
                    commodo. Suspendisse lobortis aliquet pulvinar. Phasellus eget malesuada lacus, vitae volutpat felis.
                    Aliquam congue luctus est, maximus laoreet sem commodo ac. Nam mattis leo vitae lorem efficitur, mattis
                    malesuada lectus ultricies. Morbi accumsan nec nunc eu mollis.Mauris maximus nulla ut justo aliquam, in
                    rutrum enim tristique. Morbi quis magna vestibulum, dignissim velit eleifend, porta sapien. Praesent
                    vitae tempus orci. Fusce placerat dolor leo. Nam sit amet convallis tortor, vel auctor arcu. Sed
                    tristique egestas congue. Etiam at maximus eros, ac semper ligula. Pellentesque at hendrerit turpis.
                    Donec ullamcorper orci nec finibus dictum. Aliquam ullamcorper dolor a mi vulputate lobortis. Morbi
                    tincidunt, nibh nec congue dictum, elit orci tempor ipsum, vitae lacinia orci eros ut orci. Sed eget
                    lectus ac mi euismod posuere ut vitae dolor. Mauris non commodo sem, ac vehicula leo. In hac habitasse
                    platea dictumst. Fusce sit amet congue lectus. Donec odio enim, condimentum vel orci ac, aliquet
                    volutpat sapien.</p>
            </a>
            <div class="w-full px-2 my-1 pb-2">
                <a href="#">
                    <span
                        class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Lập
                        trình</span>
                </a>
                <a href="#">
                    <span
                        class="bg-green-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Mày
                        là thằng nào?</span>
                </a>
                <a href="#">
                    <span
                        class="bg-red-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Đố</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Tags</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Laravel</span>
                </a>
                <a href="#">
                    <span
                        class="bg-yellow-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">Java</span>
                </a>
                <a href="#">
                    <span
                        class="bg-indigo-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">.NET</span>
                </a>
            </div>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">21-12-23 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1" src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
    </div>
@endsection
