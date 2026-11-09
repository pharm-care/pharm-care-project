@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    @vite('resources/css/homepage.css')
@endpush

@section('content')

{{-- 1. HERO + SEARCH --}}
<section class="hero">
    <div class="container hero__inner">
        <h1 class="hero__title">Welcome back, Nimal</h1>
        <p class="hero__subtitle">Order medicines online. Upload your doctor-approved prescription for Rx items.</p>

        <form class="search" role="search">
            <label for="medicineSearch" class="sr-only">Search medicines</label>
            <input type="search" id="medicineSearch" placeholder="Search medicines...">
            <button type="button" class="btn">Search</button>
        </form>
    </div>
</section>

{{-- 2. QUICK ACTIONS --}}
<section class="section">
    <div class="container quick-actions">
        <a class="quick-card" href="#">
            <span class="quick-card__icon" aria-hidden="true">&#128196;</span>
            <span><strong>Upload Prescription</strong><small>Send a doctor-approved receipt</small></span>
        </a>
        <a class="quick-card" href="#">
            <span class="quick-card__icon" aria-hidden="true">&#8635;</span>
            <span><strong>Reorder</strong><small>Repeat your last order</small></span>
        </a>
        <a class="quick-card" href="#">
            <span class="quick-card__icon" aria-hidden="true">&#128666;</span>
            <span><strong>Track My Order</strong><small>See delivery status</small></span>
        </a>
        <a class="quick-card" href="#">
            <span class="quick-card__icon" aria-hidden="true">&#128203;</span>
            <span><strong>My Prescriptions</strong><small>View status and history</small></span>
        </a>
    </div>
</section>

{{-- 3. CATEGORIES --}}
<section class="section section--tight">
    <div class="container">
        <h2 class="section__title">Shop by category</h2>
        <div class="chips">
            <button type="button" class="chip is-active">All</button>
            <button type="button" class="chip">Pain relief</button>
            <button type="button" class="chip">Antibiotics</button>
            <button type="button" class="chip">Allergy</button>
            <button type="button" class="chip">Diabetes</button>
            <button type="button" class="chip">Supplements</button>
            <button type="button" class="chip">Baby care</button>
        </div>
    </div>
</section>

{{-- 4. FEATURED MEDICINES --}}
<section class="section">
    <div class="container">
        <div class="section__head">
            <h2 class="section__title">Featured medicines</h2>
            <a class="link" href="#">View all &rarr;</a>
        </div>

        <div class="product-grid">
            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Paracetamol 500mg</h3>
                    <p class="product-card__category">Pain relief</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 120</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Amoxicillin 250mg</h3>
                    <p class="product-card__category">Antibiotics</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 450</span>
                        <span class="badge badge--rx">Rx required</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Cetirizine 10mg</h3>
                    <p class="product-card__category">Allergy</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 95</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Metformin 500mg</h3>
                    <p class="product-card__category">Diabetes</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 310</span>
                        <span class="badge badge--rx">Rx required</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Vitamin C 1000mg</h3>
                    <p class="product-card__category">Supplements</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 780</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Ibuprofen 400mg</h3>
                    <p class="product-card__category">Pain relief</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 140</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Baby Cough Syrup</h3>
                    <p class="product-card__category">Baby care</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 560</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-card__img" aria-hidden="true"></div>
                <div class="product-card__body">
                    <h3 class="product-card__name">Azithromycin 500mg</h3>
                    <p class="product-card__category">Antibiotics</p>
                    <div class="product-card__row">
                        <span class="product-card__price">Rs. 890</span>
                        <span class="badge badge--rx">Rx required</span>
                    </div>
                    <button type="button" class="btn btn--block">Add to Cart</button>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- 5. HOW IT WORKS --}}
<section class="section section--alt">
    <div class="container">
        <h2 class="section__title section__title--center">How ordering works</h2>
        <ol class="steps">
            <li class="step"><span class="step__no">1</span><strong>Choose medicines</strong><p>Search or browse by category and add items to your cart.</p></li>
            <li class="step"><span class="step__no">2</span><strong>Upload prescription</strong><p>For Rx medicines, upload a doctor-approved receipt at checkout.</p></li>
            <li class="step"><span class="step__no">3</span><strong>We verify and deliver</strong><p>Our pharmacist approves your order and it is delivered to you.</p></li>
        </ol>
    </div>
</section>

@endsection