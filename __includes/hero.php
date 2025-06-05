<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WMSU Services</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<section class="hero-section-cont">

<div class="hero-image-container">

<img src="../imgs/cte.jpg" alt="WMSU Campus" class="hero-background-image active">
<img src="" alt="WMSU Campus" class="hero-background-image">

<div class="hero-gradient-overlay"></div>

</div>

<div class="hero-content-wrapper">

<div class="hero-branding">
<span class="hero-university">Western Mindanao State University</span>
</div>

<div class="hero-titles">
<h1 class="hero-title">
<span class="title-top">WMSU SERVICES</span>
</h1>
</div>

<div class="hero-cta">
<a href="#" class="hero-button" onclick="document.querySelector('.student_affairs_services_section').scrollIntoView({ behavior: 'smooth' }); return false;">
Services
</a>
</div>

</div>

</section>

<script>
const images = [
'../imgs/cte.jpg',
'../imgs/student_affairs.jpg',
'../imgs/scholar.jpg'
];

let currentIndex = 0;
const [img1, img2] = document.querySelectorAll('.hero-background-image');

setInterval(() => {
const nextIndex = (currentIndex + 1) % images.length;
const activeImg = img1.classList.contains('active') ? img1 : img2;
const nextImg = activeImg === img1 ? img2 : img1;

nextImg.src = images[nextIndex];
nextImg.classList.add('active');
activeImg.classList.remove('active');

currentIndex = nextIndex;
}, 1000);
</script>

</body>
</html>
