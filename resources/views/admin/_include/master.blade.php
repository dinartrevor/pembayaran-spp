<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
	<meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">
	<link href="{{ asset('assets-admin/main.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('DataTables/datatables.css') }}">
 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="{{ asset('assets-admin/scripts/jquery-3.4.1.js') }}"></script>
	<script src="{{ asset('DataTables/datatables.js') }}"></script>
	<style type="text/css">
		/* Chart.js */
		@-webkit-keyframes chartjs-render-animation{
			from{
				opacity:0.99}to{opacity:1}
					}
			@keyframes chartjs-render-animation{
				from{opacity:0.99}to{opacity:1}
				}
			.chartjs-render-monitor{
				-webkit-animation:chartjs-render-animation 0.001s;
				animation:chartjs-render-animation 0.001s;
				}
		/* CKEditor */
		.ck-editor__editable{
			min-height: 300px;
		}
		.help-block{
			color: red;
		}
</style>
</head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		@include('admin._include.header')
		<div class="app-main">
			@include('admin._include.sidebar')
			<div class="app-main__outer">
				<div class="app-main__inner">
					@yield('content')
				</div>
				<div class="app-wrapper-footer">
					<div class="app-footer">
						<div class="app-footer__inner">
							<div class="app-footer-left">
								<ul class="nav">
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
										CopyRight Dinar
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@yield('footer')
<div class="jvectormap-tip"></div>
<script type="text/javascript" src="{{ asset('assets-admin/scripts/main.js') }}"></script>
<script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#dataTables').DataTable([{
			responsive : true
		}]);
  });
</script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script>
	$( "#datepicker" ).datepicker({dateFormat:"dd MM yy"}).datepicker("setDate",new Date());
</script>
</body>
</html>