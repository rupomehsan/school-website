<link rel="shortcut icon" type="image/x-icon" href="{{$meta->fabicon ?? asset(setting(key:'fabicon')) }}">

<meta name="robots" content="index, follow">
<!-- <meta http-equiv="refresh" content="5"> -->

<meta name="logo" content="/{{$meta->logo ?? ''}}">
<meta name="Classification" content="Website">
<meta name="identifier-URL" content="{{url('')}}">
<meta name="directory" content="submission">
<meta name="category" content="Internet">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="target" content="all">
<meta name="HandheldFriendly" content="True">
<meta name="author" content="{{$meta->author ?? ''}}">
<meta name="developer" content="{{$meta->developer ?? ''}}">
<meta name="developer-email" content="{{$meta->developer_email ?? ''}}">
<meta name="developer-company" content="{{$meta->developer_company ?? ''}}">
<meta name="copyright" content="{{url('')}}">
<meta name="price" content="Call for price - {{$meta->contact_number ?? ''}}">

<meta name="keywords" content="{{$seo->keywords ?? setting(key: " keywords", multiple: false)}}">
<meta name="description" content="{{ $seo->description ?? setting(key: " description", multiple: false)}}">

<title>{{$seo->title ?? setting(key: "title", multiple: false)}}</title>
<meta property="og:title" content="{{ $seo->title ?? setting(key: " title", multiple: false)}}" />
<meta property="og:site_name" content="{{ $meta->site_name ?? ''}}" />
<meta property="og:description" content="{{ $seo->description ?? setting(key: " description", multiple: false)}}" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="{{url('')}}" />
<meta property="og:image" content="{{$seo->image??setting(key: " header_logo", multiple: false)}}" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="400" />

<meta name="twitter:title" content="{{ $seo->title ?? setting(key: " title", multiple: false)}}">
<meta name="twitter:description" content="{{ $seo->description ?? setting(key: " description", multiple: false)}}">
<meta name="twitter:image" content="{{ $seo->image ?? setting(key: " header_logo", multiple: false)}}">
<meta name="twitter:card" content="summary_large_image">
