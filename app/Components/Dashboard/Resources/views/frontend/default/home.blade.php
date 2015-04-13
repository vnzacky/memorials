@extends('Dashboard::frontend.default.master')

@section('title')
Welcome to Memorials
@stop

@section('content')

    <section id="section-banner" class="section">
        <div class="container-fluid">
            <div class="row">
                <img src="{{get_template_directory() .'/images/slider.jpg'}}" alt="" width="100%"/>
            </div>
        </div>
    </section><!-- /#section-banner -->

    <section id="section-search" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-offset-2 col-lg-offset-2">
                    <div class="block search-memorial-form">
                        <form action="#" method="post">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="Search for Memorial Page">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                  </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /#section-search -->

    <section id="section-memorials" class="section">
        <div class="container">
            <div class="row">
                <div class="block block-new-memorials">
                    <div class="block-header title-center">
                        <h3 class="block-title">New Memorial Sites</h3>
                        <div class="block-icon"><span><i class="fa fa-group"></i></span></div>
                    </div>
                    <div class="block-content">
                        <div class="memorial-lists row">
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="memorial-teaser">
                                    <img src="{{get_template_directory() . '/images/mem1.jpg'}}" alt="Tom"/>
                                    <h3 class="title">Marino Jonas Johnsson</h3>
                                    <a href="#" class="btn btn-default">View Profile</a>
                                    <ul class="memorial-date date-group list-unstyled list-inline">
                                        <li class="birthday">11. 12. 1920</li>
                                        <li class="death">09. 06. 2014</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="memorial-teaser">
                                    <img src="{{get_template_directory() . '/images/mem2.jpg'}}" alt="Tom"/>
                                    <h3 class="title">Marino Jonas Johnsson</h3>
                                    <a href="#" class="btn btn-default">View Profile</a>
                                    <ul class="memorial-date date-group list-unstyled list-inline">
                                        <li class="birthday">11. 12. 1920</li>
                                        <li class="death">09. 06. 2014</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="memorial-teaser">
                                    <img src="{{get_template_directory() . '/images/mem1.jpg'}}" alt="Tom"/>
                                    <h3 class="title">Marino Jonas Johnsson</h3>
                                    <a href="#" class="btn btn-default">View Profile</a>
                                    <ul class="memorial-date date-group list-unstyled list-inline">
                                        <li class="birthday">11. 12. 1920</li>
                                        <li class="death">09. 06. 2014</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="memorial-teaser">
                                    <img src="{{get_template_directory() . '/images/mem2.jpg'}}" alt="Tom"/>
                                    <h3 class="title">Marino Jonas Johnsson</h3>
                                    <a href="#" class="btn btn-default">View Profile</a>
                                    <ul class="memorial-date date-group list-unstyled list-inline">
                                        <li class="birthday">11. 12. 1920</li>
                                        <li class="death">09. 06. 2014</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #section-memorial -->

    <section id="section-users" class="section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sign-up-block block">
                       <div class="sign-up-header">
                           <h3>Sign Up </h3>
                           <div class="login">
                               <p>Already a memeber Sign in</p>
                                <a href="#" class="btn btn-default">CLICK HERE</a>
                           </div>
                       </div>
                        <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor.</p>
                        <div class="sign-up-form">
                            <form action="#">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group-lg">
                                    <input type="submit" class="btn-submit form-control" value="SIGNUP NOW">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="block new-memorials">
                        <div class="block-header title-center">
                            <h3 class="block-title">Create New Memorial Page</h3>
                            <div class="block-icon white-black"><span>Get 90 Days Free Trial</span></div>
                        </div>
                        <div class="block-content">
                            <form action="#" class="form-create-page">
                                <h2 class="text-center"><i class="fa fa-user"></i><br />
                                    Profile page Screenshot
                                </h2>
                                <input type="submit" class="btn-submit form-control" value="Create new page">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- '#users -->

    <section id="section-introduction" class="section bg-blue">
        <div class="container">
            <div class="row">
                <div class="block block-introduction">
                    <div class="block-header">
                        <h2 class="block-title"><strong>QR-Code</strong> for Gravestone</h2>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
                                <a href="#" class="btn btn-default btn-slg">PRICING</a> <a href="#" class="btn btn-black btn-slg">SINGUP NOW</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /#introduction -->

@stop