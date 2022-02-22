@extends('layout.base')

<x-tailwind></x-tailwind>
<x-alpine></x-alpine>

@section('content')

    <section id="codeweek-profile-page" class="codeweek-page">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
            <div class="max-w-6xl mx-auto">
                <div class="bg-blue-100 overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:p-6">


                        <div class="header">

                            <h1>Badges</h1>

                        </div>

                        <!-- Content goes here -->
                        <div class="text-base mt-4"><strong>Name:</strong> {{$user->fullName}}</div>

                        <div class="text-base mt-4"><strong>Bits earned
                                in {{$year}}</strong>: {{$user->getPoints($year)}}</div>
                        <div class="text-base mt-4"><strong>Reported events
                                for {{$year}}</strong>: {{$user->reported($year)}}</div>
                        <div class="text-base mt-4"><strong>Influencer Bits
                                for {{$year}}</strong>: {{$user->influence($year)}}</div>

                        <h2 class="mt-4">Organiser Badges</h2>



                        <div>
                            <div class="flex">
                                <div class="flex-none">
                                    <img class="w-5/6 shadow-lg rounded-lg pt-2"
                                         src="{{asset('images/placeholder.png')}}">
                                </div>

                                <div class="flex-1">
                                    <div class="text-base italic">
                                        Earn your title, from active to legendary organiser, by organising more and more
                                        Code
                                        Week activities and contributing to the map.
                                    </div>
                                    <div class="pt-6">
                                        <nav aria-label="Progress">
                                            <ol role="list" class="flex items-center">

                                                @foreach($organiserBadges as $achievement)
                                                    @if(!$loop->last)
                                                        <li class="relative pr-8 sm:pr-20">
                                                    @else
                                                        <li class="relative">
                                                            @endif
                                                            @if (in_array($achievement->modelKey(), $userAchievements->pluck('id')->all()))

                                                                <x-badges.completed :achievement="$achievement"></x-badges.completed>


                                                            @else

                                                                <x-badges.locked :achievement="$achievement"></x-badges.locked>

                                                            @endif
                                                        </li>
                                                        @endforeach
                                            </ol>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <h2 class="mt-4">Influencer Badges</h2>
                        <div>
                            <div class="flex">
                                <div class="flex-none">
                                    <img class="w-5/6 shadow-lg rounded-lg pt-2"
                                         src="{{asset('images/placeholder.png')}}">
                                </div>

                                <div class="flex-1">
                                    <div class="text-base italic">
                                        Become a Code Week Influencer, starting from a simple influencer to a legendary
                                        influencer, who will simply stay in the record books of Code Week legends. To
                                        earn points, simply rise and abuse of the Code Week Tag when organising and
                                        sharing it with others!.
                                    </div>
                                    <div class="pt-6">
                                        <nav aria-label="Progress">
                                            <ol role="list" class="flex items-center">

                                                @foreach($influencerBadges as $achievement)
                                                    @if(!$loop->last)
                                                        <li class="relative pr-8 sm:pr-20">
                                                    @else
                                                        <li class="relative">
                                                        @endif
                                                            @if (in_array($achievement->modelKey(), $userAchievements->pluck('id')->all()))

                                                                <x-badges.completed :achievement="$achievement"></x-badges.completed>


                                                            @else

                                                                <x-badges.locked :achievement="$achievement"></x-badges.locked>

                                                            @endif
                                                        </li>
                                                        @endforeach
                                            </ol>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>

@endsection
