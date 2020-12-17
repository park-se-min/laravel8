<?php
	// echo isset($name) ? "{$name}" : "h";
	// echo isset($name3) ? "{$name3}" : "<br>h";
	// $a  = 1;
?>

{{ $name or ' nnnnn' }}
{{ time() }}

<script>
	// alert('@{{ $name }}');
	// alert('{!! $name !!}');
	// alert('{{ $name }}');
</script>

{{-- foreach1 --}}
@foreach ($arr as $k=>$v)
	<div>{{ $k }} : {{ $v }}</div>
@endforeach

{{-- foreach2 --}}
@forelse ($arr2 as $k=>$v)
	<div>{{ $k }} : {{ $v }}</div>
@empty
	없다!!
@endforelse

{{-- foreach3 --}}
@forelse ($arr3 as $k)
	<div>{{ $k }} : {{ $v }}</div>
@empty
	없다!!
@endforelse