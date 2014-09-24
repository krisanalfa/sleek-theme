@section('content')
<div class="contain-area">
    <h2 class="title-content">
        Delete
    </h2>

    <form action="" method="POST" class="confirm-area">
        <fieldset>
            <input type="hidden" name="confirm" value="1">
            <p>
                Are you sure want to delete?
            </p>

            <div class="row">
                <ul class="flat">
                    <li><input type="submit" value="OK" class="button delete"></li>
                    <li><a href="{{ f('controller.url') }}" class="button">Cancel</a></li>
                </ul>
            </div>
        </fieldset>
    </form>
</div>
@endsection
