{{-- @props(['type'])

@php
  switch ($type) {
    case 'success':
      $clases="alert-success border-left border-success";
      break;
    
    case 'warning':
      $clases="alert-warning border-left border-warning";
      break;
    
    default:
      $clases="alert-info border-left border-info";
      break;
  }   
@endphp
 --}}
{{-- @props(['title']) --}}

<article class="alert text-dark p-4" role="alert">
 {{--  <h4 class="font-weight-bold {{$clases}}">{{ $title }}</h4> --}}
  <hr>
  {{ $slot }}
</article> 


{{-- <article class="alert alert-success" role="alert">
  <h4 class="alert-heading">{{ $title }}</h4>
  <hr>
  {{ $slot }} 
</article>  --}}

