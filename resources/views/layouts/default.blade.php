<!DOCTYPE html>
<html lang="zh-TW">
<head>
    {{-- meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Tab's Blog">
    <meta name="keywords" content="Tab, 部落格">

    {{-- link --}}
    <link rel='canonical' href="{{ $head['link']['canonical'] ?? '' }}">
    @section('header-link')
    @show

    {{-- Header JavaScript --}}
    @section('header-javascript')
    @show

    {{-- TODO: OG --}}
    {{-- TODO: Structured Data --}}
    <title>{{ config('app.name') }}</title>
</head>
<body>
@section('header')
    <div>Default Header</div>
@endsection

@section('content')
    Default content
@endsection

@section('footer')
    <div>Default Footer</div>
@endsection

{{-- Footer JavaScript --}}
@section('footer-javascript')
@show
</body>
</html>