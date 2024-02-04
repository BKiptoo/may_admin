<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Blog List</h5>
                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img src="{{ $blog['photo'] }}" class="card-img-top" alt="{{ $blog['name'] }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $blog['name'] }}</h5>
                                            <p class="card-text">{{ $blog['description'] }}</p>
                                            <!-- Add any other fields you want to display -->
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
