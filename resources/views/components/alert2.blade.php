{{-- Componentes de clase --}}
<div {{ $attributes->merge([ 'class' =>  $class]) }} role="alert">
    <h4 class="alert-heading"> {{ $title ?? 'Sin titulo' }} </h4>
    <p>{{ $slot }}</p>
</div>
