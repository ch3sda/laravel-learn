@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="mb-4">Dashboard 📊</h1>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center p-4 shadow-sm">
                <h5>Users</h5>
                <h2 class="counter" data-target="1500">0</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center p-4 shadow-sm">
                <h5>Projects</h5>
                <h2 class="counter" data-target="75">0</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center p-4 shadow-sm">
                <h5>Revenue</h5>
                <h2 class="counter" data-target="50000">$0</h2>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h3>Recent Activity</h3>
        <ul class="list-group">
            <li class="list-group-item animate__animated animate__fadeInUp">New User Registered</li>
            <li class="list-group-item animate__animated animate__fadeInUp">Project "Alpha" Completed</li>
            <li class="list-group-item animate__animated animate__fadeInUp">Payment Received: $2,000</li>
        </ul>
    </div>
</div>

<script>
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        counter.innerText = '0';
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const c = +counter.innerText;

            const increment = target / 200;

            if (c < target) {
                counter.innerText = `${Math.ceil(c + increment)}`;
                setTimeout(updateCounter, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCounter();
    });
</script>
@endsection
