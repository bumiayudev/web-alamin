@extends('layout')
@section('content')

<div class="container px-6 py-16 mx-auto">
    <div class="items-center lg:flex">
        <div class="w-full lg:w-1/2">
            <div class="lg:max-w-lg">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Best place to choose <br> your <span class="text-blue-500 ">clothes</span></h1>

                <p class="mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>

            </div>
        </div>

        <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
            <img class="w-full h-full lg:max-w-3xl" src="{{ asset('images/Catalogue-pana.svg') }}" alt="inthemosque">
        </div>
    </div>
</div>
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Kegiatan
        </h1>

        <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
        </p>


        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3 mb-4">
            <div>
                <img class="object-cover w-full rounded-lg h-96 "
                    src="https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80"
                    alt="">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Best website
                    collections</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Website</p>
            </div>

            <div>
                <img class="object-cover w-full rounded-lg h-96 "
                    src="https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                    alt="">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Block of Ui kit
                    collections</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Ui kit</p>
            </div>

            <div>
                <img class="object-cover w-full rounded-lg h-96 "
                    src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Ton’s of mobile mockup
                </h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Mockups</p>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">Lihat Selengkapnya</a>
        </div>
    </div>
</section>
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
           Nasihat Ulama
        </h1>

        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error
            alias, adipisci rem similique, at omnis eligendi optio eos harum.
        </p>

        <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">
            <div class="p-8 border rounded-lg dark:border-gray-700">
                <p class="leading-loose text-gray-500 dark:text-gray-400">
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                    tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                    aperiam dolorum, obcaecati corrupti aspernatur a.”.
                </p>

                <div class="flex items-center mt-8 -mx-2">
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-gray-800 dark:text-white">Robert</h1>
                        <span class="text-sm text-gray-500">CTO, Robert Consultency</span>
                    </div>
                </div>
            </div>

            <div class="p-8 border rounded-lg dark:border-gray-700">
                <p class="leading-loose text-gray-500 dark:text-gray-400">
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                    tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                    aperiam dolorum, obcaecati corrupti aspernatur a.”.
                </p>

                <div class="flex items-center mt-8 -mx-2">
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-gray-800 dark:text-white">Jeny Doe</h1>
                        <span class="text-sm text-gray-500">CEO, Jeny Consultency</span>
                    </div>
                </div>
            </div>

            <div class="p-8 border rounded-lg dark:border-gray-700">
                <p class="leading-loose text-gray-500 dark:text-gray-400">
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                    tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                    aperiam dolorum, obcaecati corrupti aspernatur a.”.
                </p>

                <div class="flex items-center mt-8 -mx-2">
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700" src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-gray-800 dark:text-white">Ema Watson </h1>
                        <span class="text-sm text-gray-500">Marketing Manager at Stech</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
