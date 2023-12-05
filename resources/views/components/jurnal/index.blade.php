<x-main>

<x-navigation/>


<div class="flex flex-col lg:px-20 py-10 gap-4">
    <div class="grid grid-cols-12 gap-x-44">
        <div class="grid col-span-6">
            <div class="inline-flex gap-4 max-w-2xl items-center">
                <div class="avatar">
                    <div class="w-36">
                        <img src="{{ asset('icon/waffle-menu.png') }}" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h2 class="text-2xl text-coklat font-bold uppercase">this is my journal....</h2>
                    <p class="text-sm text-coklat font-medium">
                        These are my public journals, a place where I document my life that might inspire you. I hope
                        you enjoy my journey.</p>
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

    <div class="grid grid-cols-12 gap-x-8">
        <div class="grid col-span-8">
            <div class="flex flex-col gap-y-2">
             @foreach ($journals as $journal)

             <div class="p-2 border border-coklat">
                <h4 class="text-lg text-coklat font-medium">{{ $journal->title }}</h4>
                <p class="text-sm text-coklat">{{ Str::words($journal->description, 10)}}</p>
                <div class="inline-flex items-center gap-1">
                    <x-healthicons-o-i-schedule-school-date-time class="w-7 h-7" />
                    <time class="text-xs text-coklat font-medium">{{date('j F Y', strtotime( $journal->date))}} </time>
                </div>
            </div>

             @endforeach
            </div>
        </div>

        <div class="grid col-span-4">
            <div class="flex flex-col gap-y-2">
                <h2 class="text-lg font-bold text-coklat uppercase -mt-2">my favorite jurnal</h2>
                <div class="p-2 border border-coklat">
                    <h4 class="text-lg text-coklat font-medium">My Goals Report - Juni 2025</h4>
                    <p class="text-sm text-coklat">The monthly post where I update you about my goals and how they’re
                        going.</p>
                    <div class="inline-flex items-center gap-1">
                        <x-healthicons-o-i-schedule-school-date-time class="w-7 h-7" />
                        <time class="text-xs text-coklat font-medium">11 October 2005 </time>
                    </div>
                </div>
                <div class="p-2 border border-coklat">
                    <h4 class="text-lg text-coklat font-medium">My Goals Report - Juni 2025</h4>
                    <p class="text-sm text-coklat">The monthly post where I update you about my goals and how they’re
                        going.</p>
                    <div class="inline-flex items-center gap-1">
                        <x-healthicons-o-i-schedule-school-date-time class="w-7 h-7" />
                        <time class="text-xs text-coklat font-medium">11 October 2005 </time>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</x-main>
