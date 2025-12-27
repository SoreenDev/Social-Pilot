@props([
    'title' => 'title',
    'name' => 'name',
    'headers' => 'headers'
])
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">{{ $title }}</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                @foreach($headers as $header)
                                    <th>{{ $header }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            {{$slot}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
