<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ __('Menu') }}</div>
        <div class="card-body">
            <ul class="list-group">
                <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View Pizza</a>
                <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create Pizza</a>
            </ul>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="card mt-5">
            <div class="card-body">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br />
                    @endforeach
                </div>
            </div>
        </div>
    @endif()
</div>