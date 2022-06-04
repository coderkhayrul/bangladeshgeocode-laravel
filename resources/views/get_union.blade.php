@foreach ($unions as $union)
<option value="{{ $union->id }}">{{ $union->name }}</option>
@endforeach
