<x-form {{$attributes->except('class')}} :method="$method">
    <button type="submit" class="{{$attributes->get('class')}}">
        {{$slot}}
    </button>
</x-form>