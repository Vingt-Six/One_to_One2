<section class="container">
    <div>
        @foreach ($users as $user)
            <div class="card mt-3 bg-danger" style="width: 23rem;">
                <div class="card-header text-light">
                    {{strtoupper($user->profile->name)}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nickname : {{$user->nickname}}</li>
                    <li class="list-group-item">Age : {{$user->profile->age}}</li>
                    <li class="list-group-item">Phone : {{$user->profile->phone}}</li>
                    <li class="list-group-item">Email : {{$user->email}}</li>
                </ul>
            </div>
        @endforeach
    </div>
</section>
