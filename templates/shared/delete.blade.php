@section('content')
<div class="contain-area">
    <div class="container">
        <h2 class="title-content">
            Delete
        </h2>

        <form action="" method="POST">
            <input type="hidden" name="confirm" value="1">
            <p>
                Are you sure want to delete?
            </p>

            <div class="row">
                <div class="span-12">
                    <ul class="flat">
                        <li><input type="submit" value="OK"></li>
                        <li><a href="{{ f('controller.url') }}" class="button">Cancel</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
