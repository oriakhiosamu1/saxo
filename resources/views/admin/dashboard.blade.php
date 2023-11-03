@extends('layout.admin')

@section('content')

<div class="user">
    <div class="view-all-users">
      View all registered users here
      <div class="small">
        <small>Explore who have registered to saxotrade</small>
      </div>
    </div>

    <!-- user card starts here -->
    <div class="user-card-display-div">
        {{-- forelse loop that loops through all registered users --}}

        @forelse ($users as $user)
            <div class="user-card">
                <div class="image-position">
                    <img src="{{ $user->profile_picture ? asset('storage/'.$user->profile_picture) : asset('images/user-image 01.png') }}" alt="Profile picture" width="100">
                </div>

                <div class="user-name-and-email">
                {{ $user->username }}
                <div class="small">
                    <small>{{ $user->account_type }}</small>
                </div>
                </div>

                <div class="view-profile-link">
                <a href="profile/{{ $user->id }}">View Profile</a>
                </div>

            </div>
        @empty

        @endforelse
    </div>

  </div>

@endsection
