@extends('layout.base')

@section('content')

    <section id="codeweek-toolkits-page" class="codeweek-page">

            <section class="codeweek-banner learn-teach">
                <div class="text">
                    <h2>#CodeWeek</h2>
                    <h1>@lang('menu.toolkits')</h1>
                </div>
                <div class="image">
                    <img src="/images/banner_learn_teach.svg" class="static-image">
                </div>
            </section>

            <div class="codeweek-content-wrapper">
                <ul>

                    <li>EU Code Week 2021 @lang('resources.communication_toolkit') (

                        @foreach($languages as $lang)
                            @if($lang === $locale)
                                <a href="https://codeweek-s3.s3-eu-west-1.amazonaws.com/docs/toolkits/2021/communications-toolkit-{{strtoupper($lang)}}.zip">@lang('base.languages.' . $lang)</a>

                            @endif
                        @endforeach

                        @if($locale !== 'en')
                            - <a href="https://codeweek-s3.s3-eu-west-1.amazonaws.com/docs/toolkits/2021/communications-toolkit-EN.zip">@lang('base.languages.en')</a>
                    @endif
                )
                    </li>


                    <li>EU Code Week 2021 @lang('resources.teachers_toolkit') (

                        @foreach($languages as $lang)
                            @if($lang === $locale)
                                <a href="https://codeweek-s3.s3-eu-west-1.amazonaws.com/docs/toolkits/2021/teachers-toolkit-{{strtoupper($lang)}}.zip">@lang('base.languages.' . $lang)</a>
                            @endif
                        @endforeach

                        @if($locale !== 'en')
                            -
                            <a href="https://codeweek-s3.s3-eu-west-1.amazonaws.com/docs/toolkits/2021/teachers-toolkit-EN.zip">@lang('base.languages.en')</a>
                        @endif
                    )
                    </li>

                    <li>EU Code Week 2021 @lang('resources.leaflet') (

                        @foreach($languages as $lang)
                            @if($lang === $locale)
                                <a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/leaflet/2021/Codeweek_2021_{{strtoupper($lang)}}.pdf">@lang('base.languages.' . $lang)</a>
                            @endif
                        @endforeach

                        @if($locale !== 'en')
                            -
                            <a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/leaflet/2021/Codeweek_2021_EN.pdf">@lang('base.languages.en')</a>
                        @endif
                    )
                    </li>
                    <li>
                        <a href="{{route("guide")}}">@lang('resources.how_to_organise_an_activity')</a>
                    </li>

                </ul>
            </div>

    </section>

@endsection