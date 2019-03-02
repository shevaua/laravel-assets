@foreach ($assets as $asset)
  @switch($asset->getType())
    @case('js')
  <script src="{{ $asset->getUri() }}"></script>
@break
    @case('css')
  <link rel="stylesheet" type="text/css" href="{{ $asset->getUri() }}"/>
@break
  @endswitch
@endforeach
