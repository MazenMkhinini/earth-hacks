<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>
		Heeco 
	</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Web font -->
	<script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Montserrat:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Web font -->
	<!--begin::Base Styles -->
	<!--begin::Page Vendors -->
	<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors -->
	<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/demo/demo4/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link rel="shortcut icon" href="img/logo.png" />
</head>
<!-- end::Head -->
<!-- end::Body -->

<body style="background-image: url(assets/app/media/img/bg/bg-1.jpg)" class="m-page--boxed m-body--fixed m-header--static m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- begin::Header -->
		<header class="m-grid__item	m-grid m-grid--desktop m-grid--hor-desktop  m-header ">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--hor-desktop m-container m-container--responsive m-container--xxl">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-header__wrapper">
					<!-- begin::Brand -->
					<div class="m-grid__item m-brand">
						<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
							<div class="m-stack__item m-stack__item--middle m-brand__logo">
								<a href="/" class="m-brand__logo-wrapper">
									<img style="width:200px;" alt="" src="img/logo3.png" />
								</a>
							</div>
						</div>
					</div>
					<!-- end::Brand -->
					<!-- begin::Topbar -->
					<div class="m-grid__item m-grid__item--fluid m-header-head" id="m_header_nav">
						<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-topbar__nav-wrapper">
								<ul class="m-topbar__nav m-nav m-nav--inline">
									<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
										<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
											<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
											<span class="m-nav__link-icon">
												<span class="m-nav__link-icon-wrapper">
													<i class="flaticon-music-2"></i>
												</span>
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
													<span class="m-dropdown__header-title">
														9 New
													</span>
													<span class="m-dropdown__header-subtitle">
														User Notifications
													</span>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<div class="tab-content">
															<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																	<div class="m-list-timeline m-list-timeline--skin-light">
																		<div class="m-list-timeline__items">
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																				<span class="m-list-timeline__text">
																					New item added to the dashboard
																				</span>
																				<span class="m-list-timeline__time">
																					Just now
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																				<span class="m-list-timeline__text">
																					Your items have been recieved
																				</span>
																				<span class="m-list-timeline__time">
																					Yesterday
																				</span>
																			</div>
																			
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																				<span class="m-list-timeline__text">
																					You haven't collected your trash in a while!
																				</span>
																				<span class="m-list-timeline__time">
																					11 Nov
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
																<div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																	<div class="m-list-timeline m-list-timeline--skin-light">
																		<div class="m-list-timeline__items">
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																				<a href="" class="m-list-timeline__text">
																					New order received
																				</a>
																				<span class="m-list-timeline__time">
																					Just now
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																				<a href="" class="m-list-timeline__text">
																					New invoice received
																				</a>
																				<span class="m-list-timeline__time">
																					20 mins
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																				<a href="" class="m-list-timeline__text">
																					Production server up
																				</a>
																				<span class="m-list-timeline__time">
																					5 hrs
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">
																					New order received
																				</a>
																				<span class="m-list-timeline__time">
																					7 hrs
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">
																					System shutdown
																				</a>
																				<span class="m-list-timeline__time">
																					11 mins
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">
																					Production server down
																				</a>
																				<span class="m-list-timeline__time">
																					3 hrs
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
																<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																	<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																		<span class="">
																			All caught up!
																			<br>
																			No new logs.
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-topbar__welcome m--hidden-tablet m--hidden-mobile">
												Hello,&nbsp;
											</span>
											<span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15">
												<span id="" class="m-link">
													Nick
												</span>
											</span>
											<span class="m-topbar__userpic">
												<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/bg/bg-1.jpg); background-size: cover;">
													<div class="m-card-user m-card-user--skin-dark">
														<div class="m-card-user__pic">
															<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
														</div>
														<div class="m-card-user__details">
															<span class="m-card-user__name m--font-weight-500">
																Mark Andre
															</span>
															<a href="" class="m-card-user__email m--font-weight-300 m-link">
																mark.andre@gmail.com
															</a>
														</div>
													</div>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav m-nav--skin-light">
															<li class="m-nav__section m--hide">
																<span class="m-nav__section-text">
																	Section
																</span>
															</li>
															<li class="m-nav__item">
																<a href="profile.html" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-profile-1"></i>
																	<span class="m-nav__link-title">
																		<span class="m-nav__link-wrap">
																			<span class="m-nav__link-text">
																				My Profile
																			</span>
																			<span class="m-nav__link-badge">
																				<span class="m-badge m-badge--success">
																					2
																				</span>
																			</span>
																		</span>
																	</span>
																</a>
															</li>

									</li>
									<li class="m-nav__separator m-nav__separator--fit"></li>
									<li class="m-nav__item">
										<a href="snippets/pages/user/login-1.html" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
											Logout
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				</li>
				
				</ul>
			</div>
	</div>
	</div>
	<!-- end::Topbar -->
	</div>
	</div>
	</header>
	<!-- end::Header -->
	<!-- begin::Body -->

	<div style="width:80%" class="m-grid__item m-grid__item--fluid m-grid m-grid m-grid--hor m-container m-container--responsive m-container--xxl">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
			<div class="m-grid__item m-body__nav">
				<div class="m-stack m-stack--ver m-stack--desktop">
					<!-- begin::Horizontal Menu -->
					<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
						<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
							<i class="la la-close"></i>
						</button>
						<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
							<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
								<li class="m-menu__item @if(request()->path()=='/')  m-menu__item--active @endif" aria-haspopup="true">
									<a href="/" class="m-menu__link ">
										<span class="m-menu__item-here"></span>
										<span class="m-menu__link-text">
											Home
										</span>
									</a>
								</li>
								<li class="m-menu__item @if(request()->path()=='collector-stats')  m-menu__item--active @endif" aria-haspopup="true">
									<a href="collector-stats" class="m-menu__link ">
										<span class="m-menu__item-here"></span>
										<span class="m-menu__link-text">
											Collectors stats
										</span>
									</a>
								</li>
								<li class="m-menu__item @if(request()->path()=='personal-stats')  m-menu__item--active @endif" aria-haspopup="true">
									<a href="personal-stats" class="m-menu__link ">
										<span class="m-menu__item-here"></span>
										<span class="m-menu__link-text">
											Personal stats
										</span>
									</a>
								</li>
								<li class="m-menu__item @if(request()->path()=='shop')  m-menu__item--active @endif" aria-haspopup="true">
									<a href="shop" class="m-menu__link ">
										<span class="m-menu__item-here"></span>
										<span class="m-menu__link-text">
											Shop
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- begin::Body -->
	<!-- begin::Footer -->
	<footer class="m-grid__item		m-footer ">
		<div class="m-container m-container--responsive m-container--xxl">
			<div class="m-footer__wrapper">
				<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
					<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
						<span class="m-footer__copyright">
							2017 &copy; Metronic theme by
							<a href="#" class="m-link">
								Keenthemes
							</a>
						</span>
					</div>
					<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
						<ul class="m-footer__nav m-nav m-nav--skin-dark m-nav--inline m--pull-right">
							<li class="m-nav__item">
								<a href="#" class="m-nav__link">
									<span class="m-nav__link-text">
										About
									</span>
								</a>
							</li>
							<li class="m-nav__item">
								<a href="#" class="m-nav__link">
									<span class="m-nav__link-text">
										Privacy
									</span>
								</a>
							</li>
							<li class="m-nav__item">
								<a href="#" class="m-nav__link">
									<span class="m-nav__link-text">
										T&C
									</span>
								</a>
							</li>
							<li class="m-nav__item">
								<a href="#" class="m-nav__link">
									<span class="m-nav__link-text">
										Purchase
									</span>
								</a>
							</li>
							<li class="m-nav__item m-nav__item--last">
								<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
									<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<!-- end:: Page -->
	<!-- begin::Scroll Top -->
	<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
		<i class="la la-arrow-up"></i>
	</div>
	<!-- end::Scroll Top -->
	<!--begin::Base Scripts -->
	<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="assets/demo/demo4/base/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Base Scripts -->
	<!--begin::Page Vendors -->
	<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<!--end::Page Vendors -->
	<!--begin::Page Snippets -->
	<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
	<script src="assets/js/main.js"></script>
	<!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>