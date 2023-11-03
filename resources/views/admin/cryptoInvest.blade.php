@extends('layout.admin')

@section('content')
<div class="user">

    <!-- user invest page design starts here -->

    <div class="Investment-history">
      Cryptocurrency Investment History <br>
      <small>Manage Cryptocurency investment history and view proof of payment here</small>
    </div>

    <!-- investment table/div starts here -->
        <div class="accordion-box-div">
            <div class="accordion accordion-flush" id="accordionFlushExample">

                @forelse ($cryptocurrency as $crypto)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            {{ $crypto->username }}
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><small>Made a payment of <strong>{{ $crypto->amount }} {{ $crypto->type }}</strong> on {{ $crypto->created_at }} </small><code><a href="{{ asset('storage/'.$crypto->proof) }}">View Proof of payment</a></code></div>
                        </div>
                    </div>
                @empty
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Demo data
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                @endforelse
                </div>
            </div>
        </div>
    <!-- investment table div ends here -->

  </div>
@endsection
