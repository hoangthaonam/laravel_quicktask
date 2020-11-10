@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger col-sm-10 col-sm-offset-1">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
