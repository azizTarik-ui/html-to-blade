@extends('frontend.layouts.main')
<!-- Header Ends Here -->

@section('main-container')

    <!-- Search Area Starts Here -->
    <section class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center mx-auto">
                    <h4>‘Travel’ here’s what we’ve got</h4>
                    <form action="#">
                        <div class="form">
                            <div class="search-area-input">
                                <input type="text" placeholder="Travel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Area Ends Here -->

    <!-- Blog Item Starts Here -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="blog-item">
                        <div class="blog-item-image">
                            <a href="details.html">
                                <img src="{{ url('frontend/dist/images/01.jpg') }}" alt="Image">
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <span class="fs-6 has-line">Travels</span>
                            <h5><a href="details.html">How to Get Started With UI/UX in Figma</a></h5>
                            <div class="blog-item-info-release">
                                <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                            </div>
                            <a href="details.html" class="btn btn-link">Read Article
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0 mt-lg-0">
                    <div class="blog-item">
                        <div class="blog-item-image">
                            <a href="details.html">
                                <img src="{{ url('frontend/dist/images/02.jpg') }}" alt="Image">
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <span class="fs-6 has-line">Travels</span>
                            <h5><a href="details.html">Nulla facilisi. Pellentes dui ligula, varius non.</a></h5>
                            <div class="blog-item-info-release">
                                <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                            </div>
                            <a href="details.html" class="btn btn-link">Read Article
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <div class="blog-item">
                        <div class="blog-item-image">
                            <a href="details.html">
                                <img src="{{ url('frontend/dist/images/03.jpg') }}" alt="Image">
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <span class="fs-6 has-line">Travels</span>
                            <h5><a href="details.html">Top 10 beautiful Place in Bangladesh</a></h5>
                            <div class="blog-item-info-release">
                                <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                            </div>
                            <a href="details.html" class="btn btn-link">Read Article
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <div class="blog-item">
                        <div class="blog-item-image">
                            <a href="details.html">
                                <img src="{{ url('frontend/dist/images/04.jpg') }}" alt="Image">
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <span class="fs-6 has-line">Travels</span>
                            <h5><a href="details.html">How to Get Started With UI/UX in Figma</a></h5>
                            <div class="blog-item-info-release">
                                <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                            </div>
                            <a href="details.html" class="btn btn-link">Read Article
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Item Ends Here -->

    <!-- Footer Starts Here -->
   @endsection
