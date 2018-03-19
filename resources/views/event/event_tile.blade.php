<div class="col-md-4">
    <div class="thumbnail">
        <div class="title"><a href="{{$event->path()}}">{{$event->title}}</a> ({{$event->status}})</div>
        <div class="img-link">
            <a href="">

                {{--<img src="{{ event.picture.url }}" alt="{{ event.title }} image">--}}

                <img src="{{asset('img/event_default_picture.png')}}" alt="Code Week event">

            </a>
        </div>

        <div class="caption">
            <p>{{str_limit($event->description,100)}}</p>


            <a href="{{$event->path()}}"
               class="btn btn-primary btn-directional fa-arrow-right btn-sm"
               role="button">View</a>

            <span class="countdown pull-right">

                @component('event.time_to_event', ['event'=>$event])
                @endcomponent

			</span>

        </div>
    </div>
</div>