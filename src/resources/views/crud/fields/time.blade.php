<!-- html5 time input -->
@include('stoke-crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('stoke-crud::fields.inc.translatable_icon')
    <input
    	type="time"
    	name="{{ $field['name'] }}"
        value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
        @include('stoke-crud::fields.inc.attributes')
    	>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('stoke-crud::fields.inc.wrapper_end')
