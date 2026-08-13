<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#151c24">
    <title>CollarCraft Industries | Premium Collar Manufacturing & Bulk Supply</title>
    <meta name="description"
        content="CollarCraft Industries manufactures premium collars for fashion, pet, uniform and industrial brands. Custom manufacturing, bulk orders and export-ready supply.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg cc-navbar fixed-top" id="ccNavbar">
        <div class="container">
            <a class="navbar-brand cc-brand" href="#top" aria-label="CollarCraft Industries home">
                <span class="cc-brand-mark">CC</span>
                <span class="cc-brand-text">
                    <strong>CollarCraft</strong>
                    <small>INDUSTRIES</small>
                </span>
            </a>

            <button class="navbar-toggler cc-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ccNav"
                aria-controls="ccNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ccNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#industries">Industries</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why-us">Why us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Contact</a></li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn cc-btn cc-btn-dark px-4" href="#products">Request a quote <i
                                class="bi bi-arrow-up-right ms-1"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="top">

        @if (session('success'))
            <div class="container cc-alert-wrap">
                <div class="alert alert-success cc-alert" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="container cc-alert-wrap">
                <div class="alert alert-danger cc-alert" role="alert">
                    <strong>Please check the form:</strong>
                    <ul class="mb-0 mt-1 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <section class="cc-hero">
            <div class="cc-hero-grid"></div>
            <div class="container position-relative">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <div class="cc-hero-copy">
                            <span class="cc-eyebrow"><span></span> B2B MANUFACTURING PARTNER</span>
                            <h1>Built for brands.<br><em>Made to scale.</em></h1>
                            <p class="cc-lead">
                                Premium collars manufactured to your specifications — from material and hardware to
                                colour, branding and packaging. One reliable production partner for your next bulk
                                order.
                            </p>

                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <a href="#products" class="btn cc-btn cc-btn-gold btn-lg px-4">
                                    Start an enquiry <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="#products" class="btn cc-btn cc-btn-light btn-lg px-4">Explore products</a>
                            </div>

                            <div class="cc-hero-proof">
                                <div><strong>500+</strong><span>MOQ available</span></div>
                                <i></i>
                                <div><strong>4</strong><span>Core industries</span></div>
                                <i></i>
                                <div><strong>Custom</strong><span>Specifications</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="cc-hero-product" aria-label="Premium custom collar manufacturing">

                            <div class="cc-orbit cc-orbit-one"></div>
                            <div class="cc-orbit cc-orbit-two"></div>

                            <div class="cc-3d-collar">

                                <model-viewer src="{{ asset('assets/3d/air-cooler.glb') }}"
                                    alt="Premium evaporative air cooler" camera-controls auto-rotate
                                    auto-rotate-delay="800" rotation-per-second="8deg" interaction-prompt="none"
                                    shadow-intensity="1" exposure="1.05" environment-image="neutral">
                                </model-viewer>

                            </div>

                            <div class="cc-floating-card cc-floating-card-main">
                                <span class="cc-floating-icon">
                                    <i class="bi bi-stars"></i>
                                </span>

                                <div>
                                    <strong>Made to specification</strong>
                                    <small>
                                        Material · colour · hardware · branding
                                    </small>
                                </div>
                            </div>

                            <div class="cc-floating-card cc-floating-card-mini">
                                <i class="bi bi-shield-check"></i>
                                <span>Quality checked</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cc-marquee" aria-label="Our manufacturing capabilities">
            <div class="container">
                <div class="cc-marquee-inner">
                    <span>FASHION</span><i></i><span>PET BRANDS</span><i></i><span>UNIFORMS</span><i></i>
                    <span>INDUSTRIAL</span><i></i><span>PRIVATE LABEL</span><i></i><span>EXPORT READY</span>
                </div>
            </div>
        </section>

        <section id="products" class="cc-section">
            <div class="container">
                <div class="cc-section-head row align-items-end gy-3">
                    <div class="col-lg-7">
                        <span class="cc-eyebrow"><span></span> PRODUCT RANGE</span>
                        <h2>One production floor.<br><em>Multiple possibilities.</em></h2>
                    </div>
                    <div class="col-lg-5">
                        <p>Choose from our core collar categories or send us your own specification. We manufacture for
                            repeatable, scalable production.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-xl-3">
                        <article class="cc-product-card">
                            <div class="cc-card-top"><span>01</span><i class="bi bi-person-badge"></i></div>
                            <h3>Fashion Collars</h3>
                            <p>Premium collars and trims for apparel labels, accessories and private-label collections.
                            </p>
                            <div class="cc-card-meta"><span>Custom finishes</span><span>Bulk ready</span></div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <article class="cc-product-card cc-product-card-featured">
                            <div class="cc-card-top"><span>02</span><i class="bi bi-heart"></i></div>
                            <h3>Pet Collars</h3>
                            <p>Durable, retail-ready collars with custom webbing, leather, hardware, colours and
                                branding.</p>
                            <div class="cc-card-meta"><span>Branding</span><span>Hardware options</span></div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <article class="cc-product-card">
                            <div class="cc-card-top"><span>03</span><i class="bi bi-person-vcard"></i></div>
                            <h3>Uniform Collars</h3>
                            <p>Consistent production for schools, hospitality, security, corporate and institutional
                                programs.</p>
                            <div class="cc-card-meta"><span>Repeat orders</span><span>Consistent sizing</span></div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <article class="cc-product-card">
                            <div class="cc-card-top"><span>04</span><i class="bi bi-gear-wide-connected"></i></div>
                            <h3>Industrial Collars</h3>
                            <p>Purpose-built components where material selection, strength and reliable production
                                matter.</p>
                            <div class="cc-card-meta"><span>Specification-led</span><span>QC focused</span></div>
                        </article>
                    </div>
                </div>

                <div class="cc-gallery-wrap mt-5">
                    <div class="cc-gallery-heading">
                        <div>
                            <span class="cc-eyebrow"><span></span> PRODUCT GALLERY</span>
                            <h3>Show us the product.<br><em>We’ll build around it.</em></h3>
                        </div>
                        <p>Add your real product photography here. Each card below is an image placeholder, so you can
                            simply replace the image path.</p>
                    </div>

                    <div class="cc-professional-gallery">

                        {{-- Featured Image --}}
                        <div class="cc-gallery-item cc-gallery-featured">
                            <div class="cc-image-slot">

                                <img src="{{ asset('assets/images/collar-01.jpg') }}"
                                    alt="CollarCraft featured product"
                                    onerror="this.style.display='none'; this.parentElement.classList.add('cc-image-missing')">

                                <div class="cc-image-placeholder">
                                    <i class="bi bi-image"></i>
                                    <strong>IMAGE 01</strong>
                                    <span>assets/images/collar-01.jpg</span>
                                </div>

                                <div class="cc-image-overlay"></div>

                                <span class="cc-image-label">
                                    01 · FEATURED COLLECTION
                                </span>

                            </div>
                        </div>


                        {{-- Image 02 --}}
                        <div class="cc-gallery-item">
                            <div class="cc-image-slot">

                                <img src="{{ asset('assets/images/collar-02.jpg') }}" alt="CollarCraft product 02"
                                    onerror="this.style.display='none'; this.parentElement.classList.add('cc-image-missing')">

                                <div class="cc-image-placeholder">
                                    <i class="bi bi-image"></i>
                                    <strong>IMAGE 02</strong>
                                    <span>assets/images/collar-02.jpg</span>
                                </div>

                                <div class="cc-image-overlay"></div>

                                <span class="cc-image-label">
                                    02 · PRODUCT
                                </span>

                            </div>
                        </div>


                        {{-- Image 03 --}}
                        <div class="cc-gallery-item">
                            <div class="cc-image-slot">

                                <img src="{{ asset('assets/images/collar-03.jpg') }}" alt="CollarCraft product 03"
                                    onerror="this.style.display='none'; this.parentElement.classList.add('cc-image-missing')">

                                <div class="cc-image-placeholder">
                                    <i class="bi bi-image"></i>
                                    <strong>IMAGE 03</strong>
                                    <span>assets/images/collar-03.jpg</span>
                                </div>

                                <div class="cc-image-overlay"></div>

                                <span class="cc-image-label">
                                    03 · PRODUCT
                                </span>

                            </div>
                        </div>


                        {{-- Image 04 --}}
                        <div class="cc-gallery-item">
                            <div class="cc-image-slot">

                                <img src="{{ asset('assets/images/collar-04.jpg') }}" alt="CollarCraft product 04"
                                    onerror="this.style.display='none'; this.parentElement.classList.add('cc-image-missing')">

                                <div class="cc-image-placeholder">
                                    <i class="bi bi-image"></i>
                                    <strong>IMAGE 04</strong>
                                    <span>assets/images/collar-04.jpg</span>
                                </div>

                                <div class="cc-image-overlay"></div>

                                <span class="cc-image-label">
                                    04 · PRODUCT
                                </span>

                            </div>
                        </div>


                        {{-- Image 05 --}}
                        <div class="cc-gallery-item">
                            <div class="cc-image-slot">

                                <img src="{{ asset('assets/images/collar-05.jpg') }}" alt="CollarCraft product 05"
                                    onerror="this.style.display='none'; this.parentElement.classList.add('cc-image-missing')">

                                <div class="cc-image-placeholder">
                                    <i class="bi bi-image"></i>
                                    <strong>IMAGE 05</strong>
                                    <span>assets/images/collar-05.jpg</span>
                                </div>

                                <div class="cc-image-overlay"></div>

                                <span class="cc-image-label">
                                    05 · Combo PRODUCT
                                </span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="industries" class="cc-section cc-section-dark">
            <div class="container">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-5">
                        <span class="cc-eyebrow cc-eyebrow-light"><span></span> WHO WE SERVE</span>
                        <h2 class="cc-h2-light">Designed around the way your business buys.</h2>
                        <p class="cc-dark-copy">Whether you are launching a collection, replenishing a proven SKU or
                            sourcing for an institutional program, our workflow is built for B2B purchasing.</p>
                        <a href="#products" class="cc-text-link">Discuss your requirement <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="col-lg-7">
                        <div class="cc-industry-grid">
                            <div class="cc-industry"><span>01</span>
                                <h3>Fashion labels</h3>
                                <p>Small-to-large production runs with brand-specific details.</p>
                            </div>
                            <div class="cc-industry"><span>02</span>
                                <h3>Pet brands</h3>
                                <p>Retail-ready products designed around your range.</p>
                            </div>
                            <div class="cc-industry"><span>03</span>
                                <h3>Institutions</h3>
                                <p>Uniform and program supply with repeatable specifications.</p>
                            </div>
                            <div class="cc-industry"><span>04</span>
                                <h3>Industrial buyers</h3>
                                <p>Functional, specification-led manufacturing for scale.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="cc-section cc-section-alt">
            <div class="container">
                <div class="cc-section-head text-center mx-auto">
                    <span class="cc-eyebrow"><span></span> HOW IT WORKS</span>
                    <h2>From brief to bulk order<br><em>without the guesswork.</em></h2>
                    <p>Clear stages, practical communication and production built around your approved specification.
                    </p>
                </div>

                <div class="cc-process">
                    <div class="cc-process-line"></div>
                    <div class="cc-process-step"><span>01</span>
                        <h3>Share your brief</h3>
                        <p>Tell us the product, quantity, materials, dimensions, branding and delivery requirements.</p>
                    </div>
                    <div class="cc-process-step"><span>02</span>
                        <h3>Confirm specification</h3>
                        <p>We align the details, samples and production requirements before the order moves forward.</p>
                    </div>
                    <div class="cc-process-step"><span>03</span>
                        <h3>Approve & produce</h3>
                        <p>Once approved, production follows the agreed specification and quantity.</p>
                    </div>
                    <div class="cc-process-step"><span>04</span>
                        <h3>Quality check</h3>
                        <p>Finished goods are checked against the agreed requirements before dispatch.</p>
                    </div>
                    <div class="cc-process-step"><span>05</span>
                        <h3>Dispatch</h3>
                        <p>Your completed bulk order is prepared for delivery or export according to the agreed plan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-us" class="cc-section">
            <div class="container">
                <div class="row align-items-end gy-3 mb-5">
                    <div class="col-lg-7">
                        <span class="cc-eyebrow"><span></span> WHY COLLARCRAFT</span>
                        <h2>Reliable manufacturing is<br><em>a competitive advantage.</em></h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="mb-0">We focus on the details that make B2B sourcing easier: consistency,
                            communication, customisation and production discipline.</p>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6 col-lg-3">
                        <div class="cc-feature"><i class="bi bi-sliders2"></i>
                            <h3>Custom specifications</h3>
                            <p>Materials, colours, dimensions, hardware and branding can be aligned to your requirement.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="cc-feature"><i class="bi bi-stack"></i>
                            <h3>Bulk production</h3>
                            <p>Production is structured for repeat orders and scalable quantities, not one-off retail
                                pieces.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="cc-feature"><i class="bi bi-check2-circle"></i>
                            <h3>Quality focused</h3>
                            <p>Specifications are confirmed before production and finished goods are checked before
                                dispatch.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="cc-feature"><i class="bi bi-chat-square-text"></i>
                            <h3>Direct communication</h3>
                            <p>A straightforward enquiry-to-production workflow keeps decisions clear and practical.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cc-section cc-quote-section">
            <div class="container">
                <div class="cc-quote-box">
                    <div class="cc-quote-mark">“</div>
                    <blockquote>Good manufacturing should make your next order easier than your last one.</blockquote>
                    <div class="cc-quote-rule"></div>
                    <span>COLLARCRAFT INDUSTRIES</span>
                </div>
            </div>
        </section>
    </main>

    <footer class="cc-footer">
        <div class="container">
            <div class="row g-4 py-5">
                <div class="col-lg-5">
                    <a class="cc-brand cc-brand-footer" href="#top">
                        <span class="cc-brand-mark">CC</span>
                        <span class="cc-brand-text"><strong>CollarCraft</strong><small>INDUSTRIES</small></span>
                    </a>
                    <p class="cc-footer-copy mt-3 mb-0">Premium collar manufacturing and bulk supply for brands,
                        institutions and industrial buyers.</p>
                </div>
                <div class="col-6 col-lg-2">
                    <h4>Explore</h4>
                    <a href="#products">Products</a>
                    <a href="#industries">Industries</a>
                    <a href="#process">Process</a>
                    <a href="#why-us">Why us</a>
                </div>
                <div class="col-6 col-lg-2">
                    <h4>Start</h4>
                    <a href="#products">Request a quote</a>
                    <a href="#products">Custom order</a>
                    <a href="#products">Bulk supply</a>
                </div>
                <div class="col-lg-3">
                    <h4>Business enquiries</h4>
                    <p class="mb-2"><i class="bi bi-envelope me-2"></i>Contact us through the enquiry form.</p>
                    <a href="#products" class="cc-footer-cta">Send an enquiry <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="cc-footer-bottom d-flex flex-column flex-md-row justify-content-between gap-2 py-3">
                <span>&copy; {{ date('Y') }} CollarCraft Industries. All rights reserved.</span>
                <span>Built for B2B manufacturing.</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
