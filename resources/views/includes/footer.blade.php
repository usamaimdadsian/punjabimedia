<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Subscribe to us</h2>
                    <div class="w3ls_footer_grid_left1_pos">
                        <div class="sub-email-cont">
                            <input class="sub-email" type="email" name="email" placeholder="Your email..." required="">
                            <input class="sub-email-btn" type="submit" value="Send">
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('.sub-email-btn').on('click',function(){
                                    var data={
                                        "_token":{!! "'".csrf_token()."'" !!},
                                        "email":$('.sub-email').val(),
                                    };
                                    if(!$('.alert-message-cont').hasClass('hidden'))
                                    {
                                        $('.alert-message-cont').addClass('hidden');
                                    }
                                    var url={!! "'". route('email.user.ajax')."'" !!};
                                    $.ajax({
                                        url: url,
                                        type: 'POST',
                                        data: data,
                                        success: function(data){
                                            $('.sub-email').val(' ');
                                            $('.alert-message-cont').removeClass('hidden');
                                            if(data.success)
                                            {
                                                html=data.errors;
                                            }
                                            else
                                            {
                                                html='<ul>';
                                                data[0].email.forEach(function($d){
                                                    html+='<li>'+$d+'</li>';
                                                });
                                                html+='</ul>'
                                            }
                                            $('.alert-message').html(html);
                                        }
                                    });
                                });
                            });
                            </script>
                            </div>
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <a href="{{route('main.index')}}">
                    <h2>Pakistani<span>Stage Dramas</span></h2>
                    </a>
            </div>
            <div class="clearfix"> </div>
            </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>&copy; {{date('Y')}} Pakistani Stage Dramas. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> | Developed by <a target="_blank" href="http://usamasian.ml">Usama Imdad</a></p>
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
<!-- //footer -->

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
            );
        });
        </script>
        <!-- //Bootstrap Core JavaScript -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                easingType: 'linear'
            };
            */

           $().UItoTop({ easingType: 'easeOutQuart' });

            });
            </script>

