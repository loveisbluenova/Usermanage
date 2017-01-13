@extends('app')

@section('template_title')
	{{ $user->name }}'s Profile
@endsection

@section('template_fastload_css')

	#map-canvas{
		min-height: 300px;
		height: 100%;
		width: 100%;
	}

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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="signup-influencer">
                                                INFLUENCER
                                            </a>
                                        </li>
                                        <li>
                                            <a href="signup-advertiser">
                                                ADVERTISER
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
            
            <section class="pb0">
                <div class="container-fluid">
                    <div class="page-header dark-blue mb72">
                        <h5>My Profile</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="profile-pic pb16">
                                 <img src="/uploads/avatars/{{ $user->avatar }}" style="width:292px; height:292px;">
                            </div>
                            <div class="block-green">
                                <a href="#">Change Profile Picture</a>
                               
                            </div>
                             <form enctype="multipart/form-data" action="../update_avatar" method="POST" class="form-changepicture">
                                    
                                    <input type="file" name="avatar">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <!-- <input type="submit" class="pull-right btn btn-sm btn-primary"> -->
                                </form>
                        </div>
                                             
                        <div class="col-md-6 col-md-offset-3 col-sm-5 col-sm-offset-1">
                            <h3 class="color-dark-blue">{{ Auth::user()->name }}</h3>
                            <div class="profile-data">
                                <ul>
                                    <li>JACYLNHILL@GMAIL.COM</li>
                                    <li>0821-123-4567</li>
                                    <li>www.jaclynhill.com</li>
                                    <li>Bergabung: December 2016</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="my-account pt0">
                <div class="container-fluid">
                    <div class="page-header dark-blue">
                        <h5>My Account</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="tabbed-content button-tabs social-accounts">
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
                                            <div class="tabbed-content button-tabs vertical mt24">
                                                <ul class="tabs">
                                                    <li class="active">
                                                        <div class="tab-title">
                                                            <span>General Info</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Let's Talk Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Promotion Fee</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Cool Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Engagement</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Shorter Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Follower</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Longer Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-content">
                                            <div class="tab-content">
                                            <div class="tabbed-content button-tabs vertical mt24">
                                                <ul class="tabs">
                                                    <li class="active">
                                                        <div class="tab-title">
                                                            <span>General Info</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Let's Talk Tabs</h5>
                                                            <hr>
                                                            <!--<dl class="dl-horizontal">
                                                                <dt>Instagram Account</dt>
                                                                <dd>JacylnHill</dd>
                                                                <dt>Display Name</dt>
                                                                <dd>Rachel Jacyln Hill</dd>
                                                                <dt>Category</dt>
                                                                <dd>
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="" id="" value="">
                                                                            Lifestyle
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="" id="" value="">
                                                                            Bicyle
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="" id="" value="">
                                                                            Advertising
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="" id="" value="">
                                                                            Quotes
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="" id="" value="">
                                                                            Information
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="" id="" value="">
                                                                            Public Figure
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="" id="" value="">
                                                                            Entertain
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </dd>
                                                            </dl>-->
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Promotion Fee</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Cool Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Engagement</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Shorter Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Follower</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Longer Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-content">
                                            <div class="tabbed-content button-tabs vertical mt24">
                                                <ul class="tabs">
                                                    <li class="active">
                                                        <div class="tab-title">
                                                            <span>General Info</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Let's Talk Tabs</h5>
                                                            <hr>
                                                            
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Promotion Fee</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Cool Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Engagement</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Shorter Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Follower</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Longer Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-content">
                                            <div class="tabbed-content button-tabs vertical mt24">
                                                <ul class="tabs">
                                                    <li class="active">
                                                        <div class="tab-title">
                                                            <span>General Info</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Let's Talk Tabs</h5>
                                                            <hr>
                                                            
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Promotion Fee</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Cool Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Engagement</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Shorter Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tab-title">
                                                            <span>Follower</span>
                                                        </div>
                                                        <div class="tab-content">
                                                            <h5 class="uppercase">Longer Tabs</h5>
                                                            <hr>
                                                            <p>
                                                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                            </p>
                                                            <p>
                                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          
        </div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">

						{{ Lang::get('profile.showProfileTitle',['username' => $user->name]) }}

					</div>
					<div class="panel-body">

						<dl class="user-info">

							<dt>
								{{ Lang::get('profile.showProfileUsername') }}
							</dt>
							<dd>
								{{ $user->name }}
							</dd>

							<dt>
								{{ Lang::get('profile.showProfileFirstName') }}
							</dt>
							<dd>
								{{ $user->first_name }}
							</dd>

							@if ($user->last_name)
								<dt>
									{{ Lang::get('profile.showProfileLastName') }}
								</dt>
								<dd>
									{{ $user->last_name }}
								</dd>
							@endif

							<dt>
								{{ Lang::get('profile.showProfileEmail') }}
							</dt>
							<dd>
								{{ $user->email }}
							</dd>

							@if ($user->profile)
								@if ($user->profile->location)
									<dt>
										{{ Lang::get('profile.showProfileLocation') }}
									</dt>
									<dd>
										{{ $user->profile->location }} <br />
										Latitude: <span id="latitude"></span> / Longitude: <span id="longitude"></span> <br />

										<div id="map-canvas"></div>

									</dd>
								@endif

								@if ($user->profile->bio)
									<dt>
										{{ Lang::get('profile.showProfileBio') }}
									</dt>
									<dd>
										{{ $user->profile->bio }}
									</dd>
								@endif

								@if ($user->profile->twitter_username)
									<dt>
										{{ Lang::get('profile.showProfileTwitterUsername') }}
									</dt>
									<dd>
										{!! HTML::link('https://twitter.com/'.$user->profile->twitter_username, $user->profile->twitter_username, array('class' => 'twitter-link', 'target' => '_blank')) !!}
									</dd>
								@endif

								@if ($user->profile->github_username)
									<dt>
										{{ Lang::get('profile.showProfileGitHubUsername') }}
									</dt>
									<dd>
										{!! HTML::link('https://github.com/'.$user->profile->github_username, $user->profile->github_username, array('class' => 'github-link', 'target' => '_blank')) !!}
									</dd>
								@endif
							@endif

						</dl>

						@if ($user->profile)
							@if (Auth::user()->id == $user->id)

								{!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-cog', Lang::get('titles.editProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

							@endif
						@else

							<p>{{ Lang::get('profile.noProfileYet') }}</p>
							{!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', Lang::get('titles.createProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

						@endif

					</div>
				</div>
			</div>
		</div>
	</div>


<div class="container">
    
</div>

@endsection
@section('template_scripts')

	@include('scripts.google-maps-geocode-and-map')

@endsection