@section('content')
<div class="contain-area">
    <h2 class="title-content">{{ f('controller.name') }}: Read</h2>
    <form method="POST">
        <div class="nav-form">
            <div class="row">
                <ul class="flat pull-left">
                    <li>
                        <a href="{{ f('controller.url', '/') }}" class="button">Back</a>
                    </li>
                </ul>
                <ul class="flat pull-right">
                    <li>
                        <a href="{{ URL::current() }}/update" class="button">Update</a>
                    </li>
                    <li>
                        <a href="{{ URL::current() }}/delete" class="button delete">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
        <fieldset>
            @foreach (Norm::factory(f('controller.name'))->schema() as $name => $field)
                @unless($field['generated'])
                    <div class="row">
                        <div class="span-2">
                            {{ $field->label() }}
                        </div>
                        <div class="span-10">
                            {{ $field->formatReadonly(@$entry[$name], $entry) }}
                        </div>
                    </div>
                @endunless
            @endforeach
        </fieldset>
    </form>
</div>
@endsection
