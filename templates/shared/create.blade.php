@section('content')
<div class="contain-area">
    <div class="container">
        <h2 class="title-content">{{ f('controller.name') }}: Create</h2>
        <form method="POST">
            <div class="nav-form">
                <div class="row">
                    <div class="span-12">
                        <ul class="flat pull-left">
                            <li>
                                <a href="{{ f('controller.url', '/') }}" class="button">Back</a>
                            </li>
                    </div>
                </div>
            </div>
            <fieldset class="register">
                @foreach (Norm::factory(f('controller.name'))->schema() as $name => $field)
                    @unless($field['generated'])
                        <div class="span-12">
                            <div class="row">
                                <div class="span-2">
                                    {{ $field->label() }}
                                </div>
                                <div class="span-10">
                                    {{ $field->formatInput(@$entry[$name], $entry) }}
                                </div>
                            </div>
                        </div>
                    @endunless
                @endforeach
            </fieldset>
            <div class="nav-form">
                <div class="row">
                    <div class="span-12">
                        <ul class="flat pull-right">
                            <li>
                                <input type="submit" value="Save">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
