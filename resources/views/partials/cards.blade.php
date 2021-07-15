<div class="container">
    <section class="travels">
        @foreach ($vacations as $vacation)
            <div class="travel">
                <h3 class="destination">{{ $vacation->destination }}</h3>
                <h5 class="price">price: {{ number_format($vacation->ticket_price, 2) . "$" }}</h5>
                <h5 class="departure">departure: {{ $vacation->departure }}</h5>
                <h5 class="return">return: {{ $vacation->return }}</h5>
            </div>
        @endforeach
    </section>
</div>