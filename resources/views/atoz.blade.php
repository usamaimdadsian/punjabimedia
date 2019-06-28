@extends('layouts.master')
@section('title')
    <title>All Lists | Pakistani Stage Dramas</title> --}}
@endsection
@section('content')
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="/css/table-style.css" />
    <link rel="stylesheet" type="text/css" href="/css/basictable.css" />
    <script type="text/javascript" src="/js/jquery.basictable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table').basictable();
            $('#table-breakpoint').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint1').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint2').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint3').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint4').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint5').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint6').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint7').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint8').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint9').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint10').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint11').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint12').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint13').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint14').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint15').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint16').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint17').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint18').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint19').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint20').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint21').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint22').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint23').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint24').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint25').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint26').basictable({
                breakpoint: 768
            });
        });
    </script>
    <!-- //tables -->
    <div class="faq">
        <h4 class="latest-text w3_faq_latest_text w3_latest_text">Movies List</h4>
        <div class="container">
            <div class="agileits-news-top">
                <ol class="breadcrumb">
                    <li><a href="{{route('main.index')}}">Home</a></li>
                    <li class="active">List</li>
                </ol>
            </div>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
                            aria-controls="home" aria-expanded="true">0 - 9</a></li>
                    <li role="presentation"><a href="#a" role="tab" id="a-tab" data-toggle="tab" aria-controls="a">A</a>
                    </li>
                    <li role="presentation"><a href="#b" role="tab" id="b-tab" data-toggle="tab" aria-controls="b">B</a>
                    </li>
                    <li role="presentation"><a href="#c" role="tab" id="c-tab" data-toggle="tab" aria-controls="c">C</a>
                    </li>
                    <li role="presentation"><a href="#d" role="tab" id="d-tab" data-toggle="tab" aria-controls="d">D</a>
                    </li>
                    <li role="presentation"><a href="#e" role="tab" id="e-tab" data-toggle="tab" aria-controls="e">E</a>
                    </li>
                    <li role="presentation"><a href="#f" role="tab" id="f-tab" data-toggle="tab" aria-controls="f">F</a>
                    </li>
                    <li role="presentation"><a href="#g" role="tab" id="g-tab" data-toggle="tab" aria-controls="g">G</a>
                    </li>
                    <li role="presentation"><a href="#h" role="tab" id="h-tab" data-toggle="tab" aria-controls="h">H</a>
                    </li>
                    <li role="presentation"><a href="#i" role="tab" id="i-tab" data-toggle="tab" aria-controls="i">I</a>
                    </li>
                    <li role="presentation"><a href="#j" role="tab" id="j-tab" data-toggle="tab" aria-controls="j">J</a>
                    </li>
                    <li role="presentation"><a href="#k" role="tab" id="k-tab" data-toggle="tab" aria-controls="k">K</a>
                    </li>
                    <li role="presentation"><a href="#l" role="tab" id="l-tab" data-toggle="tab" aria-controls="l">L</a>
                    </li>
                    <li role="presentation"><a href="#m" role="tab" id="m-tab" data-toggle="tab" aria-controls="m">M</a>
                    </li>
                    <li role="presentation"><a href="#n" role="tab" id="n-tab" data-toggle="tab" aria-controls="n">N</a>
                    </li>
                    <li role="presentation"><a href="#o" role="tab" id="o-tab" data-toggle="tab" aria-controls="o">O</a>
                    </li>
                    <li role="presentation"><a href="#p" role="tab" id="p-tab" data-toggle="tab" aria-controls="p">P</a>
                    </li>
                    <li role="presentation"><a href="#q" role="tab" id="q-tab" data-toggle="tab" aria-controls="q">Q</a>
                    </li>
                    <li role="presentation"><a href="#r" role="tab" id="r-tab" data-toggle="tab" aria-controls="r">R</a>
                    </li>
                    <li role="presentation"><a href="#s" role="tab" id="s-tab" data-toggle="tab" aria-controls="s">S</a>
                    </li>
                    <li role="presentation"><a href="#t" role="tab" id="t-tab" data-toggle="tab" aria-controls="t">T</a>
                    </li>
                    <li role="presentation"><a href="#u" role="tab" id="u-tab" data-toggle="tab" aria-controls="u">U</a>
                    </li>
                    <li role="presentation"><a href="#v" role="tab" id="v-tab" data-toggle="tab" aria-controls="v">V</a>
                    </li>
                    <li role="presentation"><a href="#w" role="tab" id="w-tab" data-toggle="tab" aria-controls="w">W</a>
                    </li>
                    <li role="presentation"><a href="#x" role="tab" id="x-tab" data-toggle="tab" aria-controls="x">X</a>
                    </li>
                    <li role="presentation"><a href="#y" role="tab" id="y-tab" data-toggle="tab" aria-controls="y">Y</a>
                    </li>
                    <li role="presentation"><a href="#z" role="tab" id="z-tab" data-toggle="tab" aria-controls="z">Z</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_numb)}}</span></h4>
                            </div>
                            <table id="table-breakpoint">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_numb as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="a" aria-labelledby="a-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_a)}}</span></h4>
                            </div>
                            <table id="table-breakpoint1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_a as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="b" aria-labelledby="b-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_b)}}</span></h4>
                            </div>
                            <table id="table-breakpoint2">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_b as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="c" aria-labelledby="c-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_c)}}</span></h4>
                            </div>
                            <table id="table-breakpoint3">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_c as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="d" aria-labelledby="d-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_d)}}</span></h4>
                            </div>
                            <table id="table-breakpoint4">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_d as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="e" aria-labelledby="e-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_e)}}</span></h4>
                            </div>
                            <table id="table-breakpoint5">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_e as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="f" aria-labelledby="f-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_f)}}</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_f as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="g" aria-labelledby="g-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_g)}}</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_g as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="h" aria-labelledby="h-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_h)}}</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_h as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="i" aria-labelledby="i-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_i)}}</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_i as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="j" aria-labelledby="j-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_j)}}</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_j as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="k" aria-labelledby="k-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_k)}}</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_k as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="l" aria-labelledby="l-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_l)}}</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_l as $video)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}"
                                                    alt="" />
                                                <span>{{$video->name}}</span></a></td>
                                        <td>{{date('Y', strtotime($video->release_date))}}</td>
                                        <td>{{$video->quality}}</td>
                                        <td>{{$video->rating}}/5</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="m" aria-labelledby="m-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_m)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_m as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="n" aria-labelledby="n-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_n)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_n as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="o" aria-labelledby="o-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_o)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_o as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="p" aria-labelledby="p-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_p)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_p as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="q" aria-labelledby="q-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_q)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_q as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="r" aria-labelledby="r-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_r)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_r as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="s" aria-labelledby="s-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_s)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_s as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="t" aria-labelledby="t-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_t)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_t as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="u" aria-labelledby="u-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_u)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_u as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="v" aria-labelledby="v-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_v)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_v as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="w" aria-labelledby="w-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_w)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_w as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="x" aria-labelledby="x-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_x)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_x as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="y" aria-labelledby="y-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_y)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_y as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="z" aria-labelledby="z-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>{{sizeof($videos_start_z)}}</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach ($videos_start_z as $video)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td class="w3-list-img"><a href="{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}"><img style="width: 115px;height: 175px;" src="{{$video->image_link}}" alt="" />
                                                    <span>{{$video->name}}</span></a></td>
                                            <td>{{date('Y', strtotime($video->release_date))}}</td>
                                            <td>{{$video->quality}}</td>
                                            <td>{{$video->rating}}/5</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection