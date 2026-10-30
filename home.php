<?php
ob_start();
?>
 

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="d-flex align-items-center gap-2 mb-3 text-primary">
                <i class="bi bi-briefcase fs-2"></i>
                <span class="fw-semibold">AquaShield</span>
            </div>
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold mb-2">AquaShield Systems</h1>
                <p class="lead text-muted mb-3">
                    Centralized back-office system for inventory management, customer profiles, staff management, and sales order processing for premium <strong>Waterproof Dry Bags &amp; Outdoor Accessories</strong>.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="product.php" class="btn btn-primary">
                        <i class="bi bi-tablet me-1"></i>Explore Products
                    </a>
                    <a href="orders.php" class="btn btn-outline-primary">
                        <i class="bi bi-cart me-1"></i>View Orders
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center d-none d-lg-block">
                <i class="bi bi-briefcase text-primary" style="font-size: 8rem;"></i>
            </div>

        </div>
    </div>

</div>

<div class="container mb-5">
  <h2 class="border-bottom pb-2 mb-3">Coming Soon Product</h2>
  <div class="row g-4">
 
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100">
        <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
          <span><i class="bi bi-droplet me-2"></i> 10L Series</span>
          <span class="badge bg-primary">Featured</span>
        </div>
        <div class="card-body">
          <h5 class="card-title">10L Essential Dry Bag</h5>
          <p class="card-text">
            A lightweight, compact 10L dry bag built with tear-resistant PVC. Perfect for keeping your phone,
             wallet, and a change of clothes dry during kayaking or day trips.
          </p>
          <a href="#" class="btn btn-primary">View Product</a>
        </div>
        <div class="card-footer text-muted">
          Expected Release: November 2026
        </div>
      </div>
    </div>
 
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100">
        <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
          <span><i class="bi bi-backpack me-2"></i> 30L Series</span>
          <span class="badge bg-success">In Production</span>
        </div>
        <div class="card-body">
          <h5 class="card-title">30L Pro Dry Backpack</h5>
          <p class="card-text">
            Heavy-duty 30L waterproof backpack featuring padded ergonomic shoulder straps,
             external mesh pockets, and a roll-top closure for longer outdoor adventures.
          </p>
          <a href="#" class="btn btn-primary">View Product</a>
        </div>
        <div class="card-footer text-muted">
          Expected Release: December 2026
        </div>
      </div>
    </div>
 
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100">
        <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
          <span><i class="bi bi-phone me-2"></i> Accessories</span>
          <span class="badge bg-warning text-dark">Prototyping</span>
        </div>
        <div class="card-body">
          <h5 class="card-title">Submersible Phone Pouch</h5>
          <p class="card-text">
            A transparent, touch-sensitive waterproof phone pouch with a secure dual-lock seal and breakaway
             lanyard. Safe for full submersion and underwater photography.
          </p>
          <a href="#" class="btn btn-primary">View Product</a>
        </div>
        <div class="card-footer text-muted">
          Expected Release: February 2027
        </div>
      </div>
    </div>
 
  </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-lg-12">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="card-title mb-0">About Us</h5>
            </div>
            <div class="card-body p-4">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: #93c5fd;"></button>
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: #93c5fd;"></button>
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: #93c5fd;"></button>
                    </div>
                    <div class="carousel-inner rounded-3 text-white p-4" style="min-height: 240px; background-color: #0f172a;">

                        <div class="carousel-item active text-center py-4">
                            <span class="badge bg-primary mb-2">Our Story</span>
                            <h3 class="fw-bold">Born from the Outdoors</h3>
                            <p class="text-white-50 px-md-5">AquaShield was founded by outdoor enthusiasts who needed gear they could truly trust. From river crossings to tropical downpours, we set out to build waterproof solutions that never let you down.</p>
                        </div>
                        <div class="carousel-item text-center py-4">
                            <span class="badge bg-success mb-2">Our Mission</span>
                            <h3 class="fw-bold">Gear You Can Count On</h3>
                            <p class="text-white-50 px-md-5">We engineer every dry bag and accessory to withstand the harshest conditions — so you can focus on the adventure, not your equipment. Quality, durability, and reliability in every product.</p>
                          
                        </div>
                        <div class="carousel-item text-center py-4">
                            <span class="badge bg-warning text-dark mb-2">Why Choose Us</span>
                            <h3 class="fw-bold">Trusted by Adventurers</h3>
                            <p class="text-white-50 px-md-5">From weekend hikers to professional divers, thousands of customers rely on AquaShield every day. We back every product with a satisfaction guarantee and a dedicated local support team.</p>
                            
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>