<x-main>

<x-navigation/>

<div class="flex flex-col lg:px-20 py-10 gap-4">
    <div class="grid grid-cols-12 gap-x-44">
        <div class="grid col-span-6">
            <div class="inline-flex gap-4 max-w-2xl items-center">
                <div class="avatar">
                    <div class="w-40">
                        <img src="{{ asset('icon/waffle-menu.png') }}" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h2 class="text-2xl text-coklat font-bold uppercase">this is my book notes</h2>
                    <p class="text-sm text-coklat font-medium">I enjoy reading and get through more books than I can
                        count. Here's some of the notes I've taken on the best books I've read.</p>
                </div>
            </div>
        </div>
        <div class="grid col-span-6">
            <div class="avatar">
                <div class="w-40 rounded-md">
                    <img src="https://i.ibb.co/V378yPr/306437432-779888926592889-2931651291612590748-n.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 border-t border-coklat">

        @foreach ($books as $book)

         <div class=" grid col-span-12 lg:col-span-6 py-10">
            <div class="flex gap-4">
                <div class="avatar w-52">
                    <img src="{{ $book->getFirstMediaUrl('book') }}" alt="" class="object-contain">
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col space-y-0">
                            <h2 class="text-xl font-bold text-coklat">{{ $book->title}}</h2>
                        </div>
                        <p class="text-gray-600 text-sm">
                          {{$book->description}}
                        </p>
                    </div>

                </div>
            </div>
         </div>
        @endforeach
    </div>


</div>


</x-main>
