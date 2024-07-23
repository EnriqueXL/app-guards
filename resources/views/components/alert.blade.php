{{-- Default --}}
@props(['type' => 'info'])

@php
    switch ($type) {
        case 'primary':
            $class = 'alert alert-primary';
            break;

        case 'secondary':
            $class = 'alert alert-secondary';
            break;

        case 'info':
            $class = 'alert alert-info';
            break;

        case 'danger':
            $class = 'alert alert-danger';
            break;

        case 'success':
            $class = 'alert alert-success';
            break;

        case 'warning':
            $class = 'alert alert-warning';
            break;

        case 'dark':
            $class = 'alert alert-dark';
            break;

        case 'light':
            $class = 'alert alert-light';
            break;

        default:
            $class = 'alert alert-info';
            break;
    }
@endphp

<div {{ $attributes->merge([ 'class' =>  $class]) }} role="alert">
    <h4 class="alert-heading"> {{ $title ?? 'Sin titulo' }} </h4>
    <p>{{ $slot }}</p>
</div>
