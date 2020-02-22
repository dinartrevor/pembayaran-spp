@extends('admin._include.master')

@section('content')
<div class="app-page-title">
	<div class="page-title-wrapper">
		<div class="page-title-heading">
			<div class="page-title-icon">
				<i class="pe-7s-rocket icon-gradient bg-mean-fruit">
				</i>
			</div>
			<div>Analytics Dashboard
				<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-xl-4">
			<div class="card mb-3 widget-content bg-midnight-bloom">
					<div class="widget-content-wrapper text-white">
							<div class="widget-content-left">
									<div class="widget-heading">Total Siswa</div>
									<div class="widget-subheading">Last year expenses</div>
							</div>
							<div class="widget-content-right">
									<div class="widget-numbers text-white"><span>1896</span></div>
							</div>
					</div>
			</div>
	</div>
	<div class="col-md-6 col-xl-4">
			<div class="card mb-3 widget-content bg-arielle-smile">


					<div class="widget-content-wrapper text-white">
							<div class="widget-content-left">
							<div class="widget-heading">Total Petugas</div>

							</div>
							<div class="widget-content-right">
							<div class="widget-numbers text-white"><span>50</span></div>
							</div>
					</div>

			</div>
	</div>
	<div class="col-md-6 col-xl-4">
	<div class="card mb-3 widget-content bg-grow-early">
			<div class="widget-content-wrapper text-white">
					<div class="widget-content-left">
							<div class="widget-heading">Total Kelas</div>
							<div class="widget-subheading">People Interested</div>
					</div>
					<div class="widget-content-right">
							<div class="widget-numbers text-white"><span>46</span></div>
					</div>
			</div>
	</div>
    </div>
    <a href="#" class="btn btn-success btn-block">LAPORAN</a>
</div>
@endsection
