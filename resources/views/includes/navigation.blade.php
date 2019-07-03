<!-- nav -->
<div class="movies_nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{route('main.index')}}">Home</a></li>
                        {{-- Actors --}}
                        <li class="dropdown {{ (request()->is('search/actor/*')) ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actors <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Amanullah Khan'])}}">Amanullah Khan</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Iftikhar Thakur'])}}">Khalid Abbas Dar</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Khalid Abbas Dar'])}}">Iftikhar Thakur</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Naseem Vickey'])}}">Naseem Vickey</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Nasir Chinyoti'])}}">Nasir Chinyoti</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Nargis'])}}">Nargis</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Sohail Ahmed'])}}">Sohail Ahmed</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Amanat Chan'])}}">Amanat Chan</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Umer Shareef'])}}">Umer Shareef</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Zafri Khan'])}}">Zafri Khan</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Tariq Teddy'])}}">Tariq Teddy</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Deedar'])}}">Deedar</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Mastana'])}}">Mastana</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Babbu Baral'])}}">Babbu Baral</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Sakhawat Naz'])}}">Sakhawat Naz</a></li>
                                        <li><a href="{{route('main.specified',['name'=>'actor','value'=>'Akram Udas'])}}">Akram Udas</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        {{-- Years --}}
                        <li class="dropdown {{ (request()->is('search/year/*')) ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Years <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <?php $year=date('Y'); ?>
                                            <?php $y=date('Y'); ?>
                                            @for ($i = $year; $i > ($year-8); $i--)
                                                <li><a href="{{route('main.specified',['name'=>'year','value'=>$i])}}">{{$i}}</a></li>
                                                <?php $y=$i; ?>
                                            @endfor
                                            <?php $year=$y; ?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            @for ($i = $year; $i > ($year-8); $i--)
                                                <li><a href="{{route('main.specified',['name'=>'year','value'=>$i])}}">{{$i}}</a></li>
                                                <?php $y=$i; ?>
                                            @endfor
                                            <?php $year=$y; ?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            @for ($i = $year; $i > ($year-8); $i--)
                                                <li><a href="{{route('main.specified',['name'=>'year','value'=>$i])}}">{{$i}}</a></li>
                                                <?php $y=$i; ?>
                                            @endfor
                                            <?php $year=$y; ?>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->is('atoz')? 'active':'' }}"><a href="{{route('main.atoz')}}">A - z list</a></li>
                        <li class="{{ request()->is('search/mostWatched/*')? 'active':'' }}"><a href="{{route('main.specified',['name'=>'mostWatched','value'=>'stageDramas'])}}">Most Watched</a></li>
                        <li class="{{ request()->is('search/topRated/*')? 'active':'' }}"><a href="{{route('main.specified',['name'=>'topRated','value'=>'stageDramas'])}}">Top Rated</a></li>
                        <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{route('main.contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->