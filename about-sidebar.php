<style>
  .breadcrumb-area {
  min-height: 330px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 1;
  background-size: cover;
}

.breadcrumb-area::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.5); /* White overlay with 50% opacity */
  z-index: -1; /* Ensure the overlay is behind the content */
}

@media (max-width: 767px) {
  .breadcrumb-area {
    min-height: 300px;
  }
}
.breadcrumb-content {
  text-align: center;
}
.breadcrumb-title {
  color: var(--clr-body-heading);
  font-size: 50px;
  font-weight: 700;
  margin-bottom: 10px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .breadcrumb-title {
    font-size: 45px;
  }
}
@media (max-width: 767px) {
  .breadcrumb-title {
    font-size: 35px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .breadcrumb-title {
    font-size: 40px;
  }
}
.breadcrumb-list {
  display: flex;
  justify-content: center;
  gap: 10px;
}
.breadcrumb-list a {
  color: var(--clr-body-heading);
  display: block;
  position: relative;
  z-index: 1;
  font-size: 16px;
  font-weight: 500;
}
.breadcrumb-list a::after {
  display: inline-block;
  content: "/";
  font-size: 14px;
  font-weight: 400;
  margin-left: 10px;
}
.breadcrumb-list span {
  color: var(--clr-theme-primary);
  display: block;
  font-size: 16px;
  font-weight: 500;
}

.breadcrumb-shape {
  position: absolute;
  top: 70px;
  right: 31%;
  animation: animation-popup-1 4s linear 0s infinite alternate;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .breadcrumb-shape {
    right: 25%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .breadcrumb-shape {
    top: 60px;
    right: 20%;
  }
}
@media (max-width: 767px) {
  .breadcrumb-shape {
    top: 40px;
    right: 15%;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .breadcrumb-shape {
    right: 20%;
  }
}
</style>

<div class="col-md-3 col-lg-3">
    <!-- Sidebar -->
    <div class="left-sidebar">
    <a href="about-us.php" class="info-item">
    About SGGS
      <span class="arrow">➔</span>
    </a>
    <a class="info-item" href="why-sggs.php">Why SGGS ?
      <span class="arrow">➔</span>
    </a>
    <a class="info-item" href="general-instructions.php">General Instructions
      <span class="arrow">➔</span>
    </a>
    <a class="info-item" href="rules-regulations.php">Rules & Regulations
      <span class="arrow">➔</span>
    </a>
    <a class="info-item" href="discipline-codes.php">Discipline Codes
      <span class="arrow">➔</span>
    </a>
    <a class="info-item" href="disciplinary-measures.php">Disciplinary Measures
      <span class="arrow">➔</span>
    </a>
    <a class="info-item" href="child-care.php">Child Care and Protection Policies
      <span class="arrow">➔</span>
    </a>
   
  </div>
  </div>