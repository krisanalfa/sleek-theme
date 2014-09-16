<div class="row container alert-container">
    @foreach($messages as $message)
        <div class="alert {{ $options['level'] }}">
            <p>
                {{ $message['message'] }}
            </p>
        </div>
    @endforeach
</div>
