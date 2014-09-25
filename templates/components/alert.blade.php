@foreach($messages as $message)
    <div class="alert {{ $options['level'] }}">
        <p>
            {{ $message['message'] }}
            <i class="close fa fa-times "></i>
        </p>
    </div>
@endforeach
