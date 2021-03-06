@extends('layout')

@section('title',"Organization_detail")

@section('content')

    <div class="region region-content" style=" min-height: 150px;">
        <div class="container">
            <h1 class="page-header" style="color:#464646; text-align: center;margin-top: 100px;">

            </h1>
            <span
                style="color: #707070; font-size: 20px;font-family: Open Sans,sans-serif,arial; ">{{$organization->organization_name}}</span>

            <div class="ad_img_cont cons " style="border-bottom: 1px solid #E4E4E4;border-top: 1px solid #E4E4E4;">
                <div class="ad_rht_cont" style="padding: 18px 0 10px; ">
                    <div class="ad_auth_sec" style=" display: flex;">
                        <div class="tm_dtl ad_mbtm">
                            <a href="#" rel="author" style="color: #006699;">{{$organization->address}}</a>
                        </div>
                        <div class="tm_dtl ad_mbtm1">
                            <i class="fa fa-email"></i>
                            <span style="font-weight: 400">{{$organization->email}}</span>
                        </div>
                        <div class="tm_dtl vw">
                            <i class="fa fa-eye"></i>
                            <span class="caps">24K</span>
                        </div>
                        <div class="art_solk sv_but com_lgt" style="color: #006699;">
                            <a href="#" id="shrtId" class="bk_mrk">
                                <span id="shrtSpanId">
                                <i class="fa fa-bookmark-o"></i>
                                 </span>
                                <span class="sv_ltr">Lưu lại xem sau</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="art_solk st_one soc_fst" style="width: 35%;display: block;">

                </div>
            </div>
        </div>

    </div>


    <!--================School detail =================-->
    <section class="blog_area single-post-area p_120" style="padding-top:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12" style="padding-bottom:30px">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{asset($organization->thumbnail)}}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2 style="padding-bottom: 30px;">{{$organization->organization_name}}</h2>
                            <p class="excert" style="font-weight: 500">
                                Ideal scholarships for candidates who have more than 5 years of work experience and
                                aspirations to bring positive impacts on the development of the community.
                            </p>
                            <a href="{{url("/project/all")}}"><p style="color: #61ba6d;">
                                    >> 6 programs for short-term scholarships for international students
                                </p></a>

                            <h6 style="font-weight: 500">Tổng quan </h6>
                            <p>{{$organization->desc}}</p>
                        </div>


                        <!--================Comment Area=================-->
                        <div class="comments-area " style=" border: 1px solid #eee;
                    padding: 5px 5px; margin-top: 50px; ">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0951822985844!2d105.77955771424534!3d21.02887719315175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1586629471851!5m2!1svi!2s"
                                width="400" height="210" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>

                    </div>
                    <div class="comment-form-area wow fadeInUp" style="margin-top: 48px;">
                        <div class="comment-form">
                            <h4 style="padding-bottom: 30px;">Maybe you are interested</h4>
                            <div class="row">
                                @foreach($relatedSchools as $school)
                                    <div class="col-lg-4">
                                        <div class="img-responsive">
                                            <img src="{{asset($school->image)}}" alt="" srcset="">
                                        </div>
                                        <div class="info">
                                            <a href="{{url("school/detail/{$school->id}")}}">
                                                <h6>{{$school->school_name}}</h6>
                                            </a>
                                            <p>
                                                {{\Str::limit($school->desc, 50, "...")}}
                                            </p>
                                        </div>
                                        <a class="btn academy-btn" href="{{url("school/detail/{$school->id}")}}">See more</a>
                                        {{--                                        <pre>{{var_dump($school)}}</pre>--}}
                                    </div>
                                @endforeach
                            </div>


                            {{--                            <form action="#" method="post">--}}
                            {{--                                @csrf--}}
                            {{--                                <div class="form-group form-inline">--}}
                            {{--                                    <div class="form-group col-lg-6 col-md-6 name">--}}
                            {{--                                        <input type="text" class="form-control" id=" name" placeholder="Enter Name"--}}
                            {{--                                               required>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="form-group col-lg-6 col-md-6 email">--}}
                            {{--                                        <input type="email" class="form-control" id="email"--}}
                            {{--                                               placeholder="Enter email address" required>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                <textarea name="message" class="form-control mb-10" id="" cols="30" rows="5"--}}
                            {{--                                          required></textarea>--}}
                            {{--                                </div>--}}
                            {{--                                <a href="#" class="primary-btn submit_btn">Submit</a>--}}
                            {{--                            </form>--}}
                        </div>
                    </div>

                </div>


                <div class="col-lg-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Categories</h5>
                            <ul>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-1.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Courses for you</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-2.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>A great way to start</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-3.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Courses for you</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-4.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Start your training</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact us! Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Contact us!</h5>
                            <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <form action="#" method="post">
                                    <input type="text" class="form-control" id="name" style="margin-bottom: 20px;"
                                           placeholder="Name" required>
                                    <input type="email" class="form-control" id="email" style="margin-bottom: 20px;"
                                           placeholder="E-mail" required>
                                    {{--                                    <input type="number" class="form-control" id="phone" placeholder="Phone" required>--}}
                                    <textarea name="message" class="form-control" id="message" rows="4"
                                              placeholder="Message" required></textarea>
                                    <button class="btn academy-btn mt-30" type="submit">Send</button>
                                </form>
                            </div>
                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget" style="padding-bottom: 35px">
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>

                        <!-- Tag Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Tags</h5>
                            <!-- Single tags -->
                            <span style="padding-left:20px">tag1</span>
                            <span style="padding-left:20px">tag2</span>
                            <span style="padding-left:20px">tag3</span>
                        </div>

                    </div>
                </div>

            </div>


        </div>


    </section>
    <!--================Blog Area =================-->



@endsection
