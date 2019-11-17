@extends('layout/main')
@section('content')


<!--end::Search-->
</div>
</div>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-body__content">
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title ">
						Dashboard
					</h3>
				</div>
				<div>
					<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
						<span class="m-subheader__daterange-label">
							<span class="m-subheader__daterange-title"></span>
							<span class="m-subheader__daterange-date m--font-brand"></span>
						</span>
						<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
							<i class="la la-angle-down"></i>
						</a>
					</span>
				</div>
			</div>
		</div>
		<!-- END: Subheader -->
		<div class="m-content">
			<!--Begin::Main Portlet-->
			<div class="m-portlet">
				<div class="m-portlet__body  m-portlet__body--no-padding">
					<div class="row m-row--no-padding m-row--col-separator-xl">
						<div class="col-xl-6">
							<!--begin:: Widgets/Daily Sales-->
							<div class="m-widget14">
								<div class="m-widget14__header m--margin-bottom-30">
									<h3 class="m-widget14__title">
										Weekly point gain
									</h3>
									<span class="m-widget14__desc">
										Check out each collumn for more details
									</span>
								</div>
								<div class="m-widget14__chart" style="height:120px;">
									<canvas id="m_chart_daily_sales"></canvas>
								</div>
							</div>
							<!--end:: Widgets/Daily Sales-->
						</div>
						<div class="col-xl-6">
							<!--begin:: Widgets/Revenue Change-->
							<div class="m-widget14">
								<div class="m-widget14__header">
									<h3 class="m-widget14__title">
										Trash by type
									</h3>
									<span class="m-widget14__desc">
										Trash by type and overall trash (Kg)
									</span>
								</div>
								<div class="row  align-items-center">
									<div class="col">
										<div id="m_chart_revenue_change" class="m-widget14__chart1" style="height: 180px"></div>
									</div>
									<div class="col">
										<div class="m-widget14__legends">
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-accent"></span>
												<span class="m-widget14__legend-text">
													Glass
												</span>
											</div>
											
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-danger"></span>
												<span class="m-widget14__legend-text">
													Plastic
												</span>
											</div>
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-brand"></span>
												<span class="m-widget14__legend-text">
													Organic
												</span>
											</div>
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-success"></span>
												<span class="m-widget14__legend-text">
													Paper
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end:: Widgets/Revenue Change-->
						</div>
					</div>
				</div>
			</div>
			<!--End::Main Portlet-->
			<!--Begin::Main Portlet-->
			<div class="row">
				<div class="col-xl-12">
					<!--begin:: Widgets/Product Sales-->
					<div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height  m-portlet--rounded">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text">
										Trash recycled by you
										<span class="m-portlet__head-desc">
											Total trash recycled by type
										</span>
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="m-widget25">
								<span class="m-widget25__price m--font-brand">
									5,000Kg
								</span>
								<span class="m-widget25__desc">
									Total trash
								</span>
								<div class="m-widget25--progress">
									<div class="m-widget25__progress">
										<span class="m-widget25__progress-number">
											63%
										</span>
										<div class="m--space-10"></div>
										<div class="progress m-progress--sm">
											<div class="progress-bar m--bg-accent" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="m-widget25__progress-sub">
										Glass
										</span>
									</div>
									<div class="m-widget25__progress">
										<span class="m-widget25__progress-number">
											39%
										</span>
										<div class="m--space-10"></div>
										<div class="progress m-progress--sm">
											<div class="progress-bar m--bg-danger" role="progressbar" style="width: 39%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="m-widget25__progress-sub">
										Plastic
										</span>
									</div>
									<div class="m-widget25__progress">
										<span class="m-widget25__progress-number">
											54%
										</span>
										<div class="m--space-10"></div>
										<div class="progress m-progress--sm">
											<div class="progress-bar m--bg-brand" role="progressbar" style="width: 54%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="m-widget25__progress-sub">
										Organic
										</span>
									</div>
									<div class="m-widget25__progress">
										<span class="m-widget25__progress-number">
											54%
										</span>
										<div class="m--space-10"></div>
										<div class="progress m-progress--sm">
											<div class="progress-bar m--bg-success" role="progressbar" style="width: 54%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="m-widget25__progress-sub">
										Paper
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end:: Widgets/Product Sales-->
				</div>
			</div>
			<!--End::Main Portlet-->
			<!--Begin::Main Portlet-->
			<div class="row">
				<div class="col-xl-12">
					<!--begin::Portlet-->
					<div class="m-portlet" id="m_portlet">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="flaticon-map-location"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Calendar
									</h3>
								</div>
							</div>
							<div class="m-portlet__head-tools">
								<ul class="m-portlet__nav">
									<li class="m-portlet__nav-item">
										<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
											<span>
												<i class="la la-plus"></i>
												<span>
													Add Event
												</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="m-portlet__body">
							<div id="m_calendar"></div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>
			<!--End::Main Portlet-->
			<!--Begin::Main Portlet-->
			<div class="row">
				<div class="col-xl-12">
					<!--begin:: Widgets/Application Sales-->
					<div class="m-portlet m-portlet--full-height  m-portlet--rounded">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text">
										Application Sales
									</h3>
								</div>
							</div>
							<div class="m-portlet__head-tools">
								<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
									<li class="nav-item m-tabs__item">
										<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
											Last Month
										</a>
									</li>
									<li class="nav-item m-tabs__item">
										<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
											All Time
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="tab-content">
								<div class="tab-pane active" id="m_widget11_tab1_content">
									<!--begin::Widget 11-->
									<div class="m-widget11">
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table">
												<!--begin::Thead-->
												<thead>
													<tr>
														<td class="m-widget11__label">
															#
														</td>
														<td class="m-widget11__app">
															Application
														</td>
														<td class="m-widget11__sales">
															Sales
														</td>
														<td class="m-widget11__change">
															Change
														</td>
														<td class="m-widget11__price">
															Avg Price
														</td>
														<td class="m-widget11__total m--align-right">
															Total
														</td>
													</tr>
												</thead>
												<!--end::Thead-->
												<!--begin::Tbody-->
												<tbody>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Vertex 2.0
															</span>
															<span class="m-widget11__sub">
																Vertex To By Again
															</span>
														</td>
														<td>
															19,200
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
															</div>
														</td>
														<td>
															$63
														</td>
														<td class="m--align-right m--font-brand">
															$14,740
														</td>
													</tr>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Metronic
															</span>
															<span class="m-widget11__sub">
																Powerful Admin Theme
															</span>
														</td>
														<td>
															24,310
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
															</div>
														</td>
														<td>
															$39
														</td>
														<td class="m--align-right m--font-brand">
															$16,010
														</td>
													</tr>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Apex
															</span>
															<span class="m-widget11__sub">
																The Best Selling App
															</span>
														</td>
														<td>
															9,076
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
															</div>
														</td>
														<td>
															$105
														</td>
														<td class="m--align-right m--font-brand">
															$37,200
														</td>
													</tr>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Cascades
															</span>
															<span class="m-widget11__sub">
																Design Tool
															</span>
														</td>
														<td>
															11,094
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
															</div>
														</td>
														<td>
															$16
														</td>
														<td class="m--align-right m--font-brand">
															$8,520
														</td>
													</tr>
												</tbody>
												<!--end::Tbody-->
											</table>
											<!--end::Table-->
										</div>
										<div class="m-widget11__action m--align-right">
											<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
												Generate Report
											</button>
										</div>
									</div>
									<!--end::Widget 11-->
								</div>
								<div class="tab-pane" id="m_widget11_tab2_content">
									<!--begin::Widget 11-->
									<div class="m-widget11">
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table">
												<!--begin::Thead-->
												<thead>
													<tr>
														<td class="m-widget11__label">
															#
														</td>
														<td class="m-widget11__app">
															Application
														</td>
														<td class="m-widget11__sales">
															Sales
														</td>
														<td class="m-widget11__change">
															Change
														</td>
														<td class="m-widget11__price">
															Avg Price
														</td>
														<td class="m-widget11__total m--align-right">
															Total
														</td>
													</tr>
												</thead>
												<!--end::Thead-->
												<!--begin::Tbody-->
												<tbody>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Loop
															</span>
															<span class="m-widget11__sub">
																CRM System
															</span>
														</td>
														<td>
															19,200
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
															</div>
														</td>
														<td>
															$63
														</td>
														<td class="m--align-right m--font-brand">
															$34,740
														</td>
													</tr>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Selto
															</span>
															<span class="m-widget11__sub">
																Powerful Website Builder
															</span>
														</td>
														<td>
															24,310
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
															</div>
														</td>
														<td>
															$39
														</td>
														<td class="m--align-right m--font-brand">
															$46,010
														</td>
													</tr>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Jippo
															</span>
															<span class="m-widget11__sub">
																The Best Selling App
															</span>
														</td>
														<td>
															9,076
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
															</div>
														</td>
														<td>
															$105
														</td>
														<td class="m--align-right m--font-brand">
															$67,800
														</td>
													</tr>
													<tr>
														<td>
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</td>
														<td>
															<span class="m-widget11__title">
																Verto
															</span>
															<span class="m-widget11__sub">
																Web Development Tool
															</span>
														</td>
														<td>
															11,094
														</td>
														<td>
															<div class="m-widget11__chart" style="height:50px; width: 100px">
																<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
															</div>
														</td>
														<td>
															$16
														</td>
														<td class="m--align-right m--font-brand">
															$18,520
														</td>
													</tr>
												</tbody>
												<!--end::Tbody-->
											</table>
											<!--end::Table-->
										</div>
										<div class="m-widget11__action m--align-right">
											<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
												Generate Report
											</button>
										</div>
									</div>
									<!--end::Widget 11-->
								</div>
							</div>
						</div>
					</div>
					<!--end:: Widgets/Application Sales-->
				</div>
			</div>
			<!--End::Main Portlet-->

			@endsection