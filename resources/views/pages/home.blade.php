@extends('app')
	
@section('template_title')
	Welcome {{ Auth::user()->name }}
@endsection

@section('content')
 <div class="nav-container">
            <a id="top"></a>
            <nav>
                <div class="nav-bar">
                    <div class="module left">
                        <a href="index.html">
                            <img class="logo logo-light" alt="INFLUINDEX" src="img/logo-light.png" />
                            <img class="logo logo-dark" alt="INFLUINDEX" src="img/logo-dark.png" />
                        </a>
                        <p class="text-logo">A DATA DRIVEN APPROACH TO INFLUENCER DISOVERY</p>
                    </div>
                    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="module-group right">
                        <div class="module left">
                            <ul class="menu">

                                <li class="has-dropdown">
                                    <a href="#">
                                        BRAND COMPANY
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                KANA DIGITAL
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                SONAR PLATFORM
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--end of menu module-->
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>
  <div class="main-container">
            <section>
                <div class="container-fluid data-filter">
                                       
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="table-responsive"> 

                            <!-- Initialization 
                            * js-dynamitable => dynamitable trigger (table)
                            -->
                                <table class="js-dynamitable table table-bordered table-filtered">

                                    <!-- table heading -->
                                    <thead>

                                    <!-- Sortering
                                        * js-sorter-asc => ascending sorter trigger
                                        * js-sorter-desc => desending sorter trigger
                                    -->
                                    <tr>
                                        <th>Price Range <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                                        <th>Category <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                                        <th>Username <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                                        <th>Age <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                                        <th>Marriage Status <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                                        <th>Location <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                                    </tr>

                                    <!-- Filtering
                                        * js-filter => filter trigger (input, select)
                                    -->
                                    <tr>
                                        <th> <!-- select filter -->
                                            <select class="js-filter minimal">
                                                <option value=""></option>
                                                <option value="krueger">krueger</option>
                                                <option value="jackie">jackie</option>
                                                <option value="bruce">bruce</option>
                                                <option value="east">east</option>  
                                                <option value="peter">peter</option>
                                            </select>
                                        </th>
                                        <th> <!-- select filter -->
                                            <select class="js-filter minimal">
                                                <option value=""></option>
                                                <option value="civilization">civilization</option>
                                                <option value="technology">technology</option>
                                                <option value="sports">sports</option>
                                                <option value="science">science</option>  
                                                <option value="fantasy">fantasy</option>
                                            </select>
                                        </th>
                                        <th><!-- input filter -->
                                            <input class="js-filter minimal" type="text" value="">
                                        </th>
                                        <th> <!-- select filter -->
                                            <select class="js-filter minimal">
                                                <option value=""></option>
                                                <option value="23">23</option>
                                                <option value="500">500</option>
                                                <option value="850">850</option>
                                                <option value="55">55</option>  
                                                <option value="5">5</option>
                                            </select>
                                        </th>
                                        <th> <!-- select filter -->
                                            <select class="js-filter minimal">
                                                <option value=""></option>
                                                <option value="married">married</option>
                                                <option value="divorced">divorced</option>
                                                <option value="single">single</option>
                                                <option value="law">law</option>  
                                                <option value="common">common</option>
                                            </select>
                                        </th>
                                        <th> <!-- select filter -->
                                            <select class="js-filter minimal">
                                                <option value=""></option>
                                                <option value="Tokyo">Tokyo</option>
                                                <option value="London">London</option>
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="New York">New York</option>  
                                                <option value="Milan">Milan</option>
                                            </select>
                                        </th>
                                    </tr>
                                    </thead>

                                    
                                    <tbody>
                                    <tr>
                                        <td>Freddy Krueger</td>
                                        <td>civilization</td>
                                        <td>windbag</td>
                                        <td>2300</td>
                                        <td>Married</td>
                                        <td>Jakarta</td>
                                    </tr>
                                    <tr>
                                        <td>Clint Eastwood</td>
                                        <td>technology</td>
                                        <td>fanny</td>
                                        <td>48500</td>
                                        <td>Widowed</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Peter Parker</td>
                                        <td>sports</td>
                                        <td>redneck</td>
                                        <td>210</td>
                                        <td>Separated</td>
                                        <td>New York</td>
                                    </tr>
                                    <tr>
                                        <td>Bruce Wayne</td>
                                        <td>technology</td>
                                        <td>milksop</td>
                                        <td>8500</td>
                                        <td>Divorced</td>
                                        <td>Tokyo</td>
                                    </tr>
                                    <tr>
                                        <td>Jackie Chan</td>
                                        <td>civilization</td>
                                        <td>pansy</td>
                                        <td>250.55</td>
                                        <td>Single</td>
                                        <td>Paris</td>
                                    </tr>
                                    <tr>
                                        <td>Bruce Lee</td>
                                        <td>fantasy</td>
                                        <td>gannet</td>
                                        <td>510</td>
                                        <td>Living common law</td>
                                        <td>Milan</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="pt0">
                <div class="container-fluid data-sorter">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="tabbed-content button-tabs">
                                <ul class="tabs">
                                    <li class="active">
                                        <div class="tab-title">
                                            <i class="ti-instagram" style="color:#e01575 !important"></i>
                                            <span style="margin-left:10px;">Instagram</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-title">
                                            <i class="ti-facebook" style="color:#0b3f94 !important"></i> 
                                            <span style="margin-left:10px;">Facebook</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-title">
                                            <i class="ti-twitter-alt" style="color:#19aee5 !important"></i>
                                            <span style="margin-left:10px;">Twitter</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-title">
                                            <i class="ti-youtube" style="color:#dc5043 !important"></i>
                                            <span style="margin-left:10px;">Youtube</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="content">
                                    <li class="active">
                                        <div class="tab-content">
                                            <table class="js-dynamitable sorted-data table table-striped table-bordered table-responsive" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Profile
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Engagement Rate
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Follower
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Category
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Likes
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Comment
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Price
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-01.jpg">
                                                            <span>Koskas</span>
                                                            <span>Community</span>
                                                        </td>
                                                        <td>64%</td>
                                                        <td>1,221</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Sepeda</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>31</span>
                                                            <span>Likes/Post</span>
                                                        </td>
                                                        <td>
                                                            <span>28</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-02.jpg">
                                                            <span>Timothy Felix</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>72%</td>
                                                        <td>20,2 K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">200,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">5,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-03.jpg">
                                                            <span>Laura Angelia</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            71%
                                                        </td>
                                                        <td>37.5K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Beauty</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                            </td>
                                                        <td>
                                                            <p><span class="color-green">1,500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-04.jpg">
                                                            <span>Kevin Kosasih</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            58%
                                                        </td>
                                                        <td>20.7K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                               <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>4,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">1,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-05.jpg">
                                                            <span>Lipupil</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-06.jpg">
                                                            <span>Lucky Oetama</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            10%
                                                        </td>
                                                        <td>40.1K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Automotive</li>
                                                                <li>Lifestyle</li>
                                                                <li>Adventure</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>12</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>75</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">8,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">110</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-07.jpg">
                                                            <span>Maureen</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            90%
                                                        </td>
                                                        <td>39.4K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Fashion</li>
                                                                <li>Travelling</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>812</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>73</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">3,900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-08.jpg">
                                                            <span>Antik Arifani</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>2.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Adventure</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,016</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>177</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">205</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-09.jpg">
                                                            <span>Khalida Makmoer</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,112</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>165</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">700,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-10.jpg">
                                                            <span>Anastasia Siantar</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>33.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,111</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>765</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">100,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">4,500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-content">
                                            <table class="js-dynamitable sorted-data table table-striped table-bordered table-responsive" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Profile
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Engagement Rate
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Follower
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Category
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Likes
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Comment
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Price
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-09.jpg">
                                                            <span>Khalida Makmoer</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,112</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>165</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">700,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-01.jpg">
                                                            <span>Koskas</span>
                                                            <span>Community</span>
                                                        </td>
                                                        <td>64%</td>
                                                        <td>1,221</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Sepeda</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>31</span>
                                                            <span>Likes/Post</span>
                                                        </td>
                                                        <td>
                                                            <span>28</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-02.jpg">
                                                            <span>Timothy Felix</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>72%</td>
                                                        <td>20,2 K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">200,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">5,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-03.jpg">
                                                            <span>Laura Angelia</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            71%
                                                        </td>
                                                        <td>37.5K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Beauty</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                            </td>
                                                        <td>
                                                            <p><span class="color-green">1,500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-04.jpg">
                                                            <span>Kevin Kosasih</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            58%
                                                        </td>
                                                        <td>20.7K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                               <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>4,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">1,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-05.jpg">
                                                            <span>Lipupil</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-06.jpg">
                                                            <span>Lucky Oetama</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            10%
                                                        </td>
                                                        <td>40.1K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Automotive</li>
                                                                <li>Lifestyle</li>
                                                                <li>Adventure</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>12</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>75</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">8,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">110</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-07.jpg">
                                                            <span>Maureen</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            90%
                                                        </td>
                                                        <td>39.4K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Fashion</li>
                                                                <li>Travelling</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>812</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>73</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">3,900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-08.jpg">
                                                            <span>Antik Arifani</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>2.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Adventure</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,016</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>177</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">205</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-10.jpg">
                                                            <span>Anastasia Siantar</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>33.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,111</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>765</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">100,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">4,500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-content">
                                            <table class="js-dynamitable sorted-data table table-striped table-bordered table-responsive" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Profile
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Engagement Rate
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Follower
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Category
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Likes
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Comment
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Price
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-08.jpg">
                                                            <span>Antik Arifani</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>2.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Adventure</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,016</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>177</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">205</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-02.jpg">
                                                            <span>Timothy Felix</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>72%</td>
                                                        <td>20,2 K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">200,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">5,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-03.jpg">
                                                            <span>Laura Angelia</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            71%
                                                        </td>
                                                        <td>37.5K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Beauty</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                            </td>
                                                        <td>
                                                            <p><span class="color-green">1,500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-01.jpg">
                                                            <span>Koskas</span>
                                                            <span>Community</span>
                                                        </td>
                                                        <td>64%</td>
                                                        <td>1,221</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Sepeda</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>31</span>
                                                            <span>Likes/Post</span>
                                                        </td>
                                                        <td>
                                                            <span>28</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-04.jpg">
                                                            <span>Kevin Kosasih</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            58%
                                                        </td>
                                                        <td>20.7K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                               <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>4,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">1,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-05.jpg">
                                                            <span>Lipupil</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-06.jpg">
                                                            <span>Lucky Oetama</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            10%
                                                        </td>
                                                        <td>40.1K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Automotive</li>
                                                                <li>Lifestyle</li>
                                                                <li>Adventure</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>12</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>75</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">8,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">110</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-07.jpg">
                                                            <span>Maureen</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            90%
                                                        </td>
                                                        <td>39.4K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Fashion</li>
                                                                <li>Travelling</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>812</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>73</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">3,900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-09.jpg">
                                                            <span>Khalida Makmoer</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,112</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>165</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">700,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-10.jpg">
                                                            <span>Anastasia Siantar</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>33.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,111</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>765</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">100,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">4,500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-content">
                                            <table class="js-dynamitable sorted-data table table-striped table-bordered table-responsive" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Profile
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Engagement Rate
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Follower
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Category
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Likes
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Comment
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                        <th>Price
                                                            <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span>
                                                            <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-10.jpg">
                                                            <span>Anastasia Siantar</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>33.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,111</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>765</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">100,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">4,500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-01.jpg">
                                                            <span>Koskas</span>
                                                            <span>Community</span>
                                                        </td>
                                                        <td>64%</td>
                                                        <td>1,221</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Sepeda</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>31</span>
                                                            <span>Likes/Post</span>
                                                        </td>
                                                        <td>
                                                            <span>28</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-02.jpg">
                                                            <span>Timothy Felix</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>72%</td>
                                                        <td>20,2 K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">200,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">5,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-03.jpg">
                                                            <span>Laura Angelia</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            71%
                                                        </td>
                                                        <td>37.5K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Advertising</li>
                                                                <li>Beauty</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>3,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>675</span>
                                                            <span>Comment/Post</span>
                                                            </td>
                                                        <td>
                                                            <p><span class="color-green">1,500,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,000</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-04.jpg">
                                                            <span>Kevin Kosasih</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            58%
                                                        </td>
                                                        <td>20.7K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                               <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>4,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">1,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,000,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-05.jpg">
                                                            <span>Lipupil</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,012</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>175</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-06.jpg">
                                                            <span>Lucky Oetama</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            10%
                                                        </td>
                                                        <td>40.1K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Automotive</li>
                                                                <li>Lifestyle</li>
                                                                <li>Adventure</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>12</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>75</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">8,300,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">110</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-07.jpg">
                                                            <span>Maureen</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            90%
                                                        </td>
                                                        <td>39.4K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Fashion</li>
                                                                <li>Travelling</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>812</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>73</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">3,900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">1,200</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-08.jpg">
                                                            <span>Antik Arifani</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            45%
                                                        </td>
                                                        <td>2.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Food</li>
                                                                <li>Adventure</li>
                                                                <li>Fashion</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,016</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>177</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">900,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">205</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="img/img-profile-data-09.jpg">
                                                            <span>Khalida Makmoer</span>
                                                            <span>25 Years old | Single</span>
                                                        </td>
                                                        <td>
                                                            60%
                                                        </td>
                                                        <td>30.6K</td>
                                                        <td>
                                                            <ul>
                                                                <li>Lifestyle</li>
                                                                <li>Fashion</li>
                                                                <li>Food</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <span>1,112</span>
                                                            <span>Like/post</span>
                                                        </td>
                                                        <td>
                                                            <span>165</span>
                                                            <span>Comment/Post</span>
                                                        </td>
                                                        <td>
                                                            <p><span class="color-green">700,000</span><br>/Photo Post</p>
                                                            <p><span class="color-green">500</span><br>/Video Post</p>
                                                        </td>
                                                    </tr>
                                                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
        </div>
@endsection
