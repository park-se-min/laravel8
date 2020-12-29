@extends('layouts.master')

@section('content')
	자식뷰

	<br>
	{{ route('photo.index') }}
	<br>

	@include('partials.footer')
@endsection

@section('script')
	<script>
		alert('end1');
	</script>
@endsection


@section('end_script')
	<script>
		// alert('end');
	</script>
@endsection

@section('start_script')
	<script>
		// alert('1');
	</script>
@endsection