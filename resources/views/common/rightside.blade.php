
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">সর্বশেষ খবর</a></li>
    <li><a data-toggle="tab" href="#menu1">শীর্ষ খবর</a></li>

</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">

        @foreach($grobal as $gol)
            <div class="getup">
                <a href="{{url('/categoryD/'.$gol->id)}}">
                    <h4>{{ \Illuminate\Support\Str::words($gol->title, 6,'...')  }}</h4>

                    <img style="max-width: 100%;" src="{{url($gol->photo)}}" alt="">
                </a>

            </div>

        @endforeach
    </div>
    <div id="menu1" class="tab-pane fade">
        <ul class="topnews">
            <p>জাতীয়</p>

            @foreach($nationalTops as $nationalTop)
                <a href="{{url('/categoryD/'.$nationalTop->id)}}">
                    <li>{{$nationalTop->title}}</li>
                </a>
            @endforeach
        </ul>


        <ul class="topnews">
            <p>আন্তজাতিক</p>

            @foreach($internationalTops as $internationalTop)
                <a href="{{url('/categoryD/'.$nationalTop->id)}}">
                    <li>{{ $internationalTop->title }}</li>
                </a>
            @endforeach
        </ul>



        <ul class="topnews">
            <p>রাজনীতি</p>

            @foreach($politicsTops as $politicsTop)
                <a href="{{url('/categoryD/'.$nationalTop->id)}}">
                    <li>{{$politicsTop->title}}</li>
                </a>
            @endforeach
        </ul>



        <ul class="topnews">
            <p>খেলা</p>

            @foreach($sportsTops as $sportsTop)
                <a href="{{url('/categoryD/'.$nationalTop->id)}}">
                    <li>{{ $sportsTop->title }}</li>
                </a>
            @endforeach
        </ul>









    </div>

</div>