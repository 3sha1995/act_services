
<section class="template_about_section">
    <div class="template_about_container">

    <div class="template_about_header template_scroll-fade">
    <div class="template_about_ontop_title">ABOUT US</div>
    <h2 class="template_about_title">MULTI-FAITH SERVICES</h2>
    <div class="template_about_divider"></div>
    </div>


        <div class="template_about_content template_scroll-fade">
            <div class="template_about_image">
                <img src="../imgs/student_affairs.jpg" alt="WMSU Health Center">
            </div>

            <div class="template_about_text">
                <p class="template_about_description">
               Multi-Faith Services refer to the provision of an environment conducive to the free expression of one's religious orientation in accordance with institutional principles and policies.
            </div>
        </div>
    </div>
</section>

<script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll('.template_scroll-fade').forEach(el => {
        observer.observe(el);
    });
</script>

  
 
<section class="template_services_section">
    <div class="template_services_container">
        <div class="template_services_header">
            <h2 class="template_services_title">OUR SERVICES</h2>
            <div class="template_services_divider"></div>
            <p class="template_services_description">We provide a range of services to support the well-being of our university community.</p>
        </div>
        <div class="template_services_grid">
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Provide students the opportunity to express their faith in proper venues
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Strengthen and enrich students’ faith and spirituality for self-enhancement
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Promote camaraderie among students through spiritual and other socio-cultural activities
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Provide opportunities to learn from own and others' experiences through Bible sharing/Bible study and retreats
                    </p>
                </div>
            </div>
        </div>
       
    </div>
</section>







<section class="template_facilities_section">
    <div class="template_facilities_container">
        <div class="template_facilities_header">
            <h2 class="template_facilities_title">OUR FACILITIES</h2>
            <div class="template_facilities_divider"></div>
            <p class="template_facilities_description">Explore our comprehensive range of campus facilities designed to support your academic journey and personal growth.</p>
        </div>


        <div class="template_facilities_grid">
            <div class="template_facility_card" data-category="social">
                <div class="template_facility_image">
                    <img src="../imgs/sa_office.jpg" alt="Student Lounge">
                    <div class="template_facility_overlay">
                    </div>
                </div>
                <div class="template_facility_content">
                    <h3 class="template_facility_title">Office of Scholarships</h3>
                    <p class="template_facility_description">A comfortable space for students to relax, socialize, and collaborate between classes. Features comfortable seating, charging stations, and refreshment area.</p>
                    <div class="template_facility_operating_hours">
                        <h4><i class="fas fa-clock"></i> Operating Hours</h4>
                        <ul>
                            <li><span>Monday - Friday:</span> 8:00 AM - 5:00 PM</li>
                            <li><span>Saturday-Sunday:</span>CLOSED</li>
                            
                        </ul>
                    </div>
                </div>
            </div>

           
            </div>
    </div>
</section>



    <section class="template_officer_section">
    <h2 class="template_officer_title">Meet Our Officers</h2>
    <div class="template_officer_grid">
        <div class="template_officer_card">
            <div class="template_officer_image_wrapper">
                <img src="../imgs/unkown.png" alt="Officer 1" class="template_officer_image">
            </div>
            <div class="template_officer_info">
                <h3 class="template_officer_name">Alzid L. Ahmad</h3>
                <p class="template_officer_position">Coordinator, Islam Faith Services</p>
            </div>
        </div>

        <div class="template_officer_card">
            <div class="template_officer_image_wrapper">
                <img src="../imgs/unkown.png" alt="Officer 2" class="template_officer_image">
            </div>
            <div class="template_officer_info">
                <h3 class="template_officer_name">Melva A. Vilarta</h3>
                <p class="template_officer_position">Coordinator, Christian Faith Services</p>
            </div>
        </div>

        
    </div>
</section>
  <section class="template-contact-section">
    <h2>Get in Touch</h2>
    <p class="template-subheading"></p>
    
    <div class="template-contact-cards">
      

      <div class="template-card">
        <div class="template-icon template-location"><i class="fas fa-map-marker-alt"></i></div>
        <h4>Location</h4>
        <p>123 Business St<br>New York, NY 10001</p>
      </div>


      
    </div>
  </section>
   
    <script>
    function expandSection(element, section) {
        const container = document.querySelector('.template_mv_container'); // Renamed
        const boxes = document.querySelectorAll('.template_mv_box_mission, .template_mv_box_vision'); // Renamed

        boxes.forEach(box => {
            if (box === element) {
                box.classList.toggle('expanded');
                if (box.classList.contains('expanded')) {
                    container.classList.add('has-expanded');
                } else {
                    container.classList.remove('has-expanded');
                }
            } else {
                box.classList.remove('expanded');
            }
        });
    }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const serviceCards = document.querySelectorAll('.template_service_card'); // Renamed

        function animateServiceCards() {
            serviceCards.forEach((card, index) => {
                const cardPosition = card.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;

                if(cardPosition < screenPosition) {
                    setTimeout(() => {
                        card.classList.add('animated');
                    }, index * 150);
                }
            });
        }

        const timelineEvents = document.querySelectorAll('.template_event'); // Renamed

        function animateTimelineEvents() {
            timelineEvents.forEach((event, index) => {
                const eventPosition = event.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;

                if(eventPosition < screenPosition) {
                    setTimeout(() => {
                        event.classList.add('visible');
                    }, index * 200);
                }
            });
        }

        animateServiceCards();
        animateTimelineEvents();

        window.addEventListener('scroll', function() {
            animateServiceCards();
            animateTimelineEvents();
        });
    });
    </script>

<script>
    (function() {
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8
            );
        }

        function animateEvents() {
            const events = document.querySelectorAll('.template_event'); // Renamed

            events.forEach((event, index) => {
                if (isInViewport(event)) {
                    setTimeout(() => {
                        event.classList.add('visible');
                    }, index * 200);
                }
            });
        }

        function addStatusBadges() {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            const events = document.querySelectorAll('.template_event'); // Renamed

            events.forEach(event => {
                const dateString = event.getAttribute('data-date');
                if (!dateString) return;

                const itemDate = new Date(dateString);
                itemDate.setHours(0, 0, 0, 0);

                let status = '';
                let statusClass = '';

                if (itemDate.getTime() === today.getTime()) {
                    status = 'Today';
                    statusClass = 'today';
                } else if (itemDate < today) {
                    status = 'Recent';
                    statusClass = 'recent';
                } else {
                    status = 'Upcoming';
                    statusClass = 'upcoming';
                }

                if (!event.querySelector('.template_event_status_badge')) { // Check for new base badge class
                    const badge = document.createElement('div');
                    badge.className = `template_event_status_badge ${statusClass}`; // New base class, original state class
                    badge.textContent = status;

                    const detailsElement = event.querySelector('.template_event_details'); // Renamed
                    if (detailsElement) {
                        detailsElement.insertBefore(badge, detailsElement.firstChild);
                    }
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            addStatusBadges();
            animateEvents();
            window.addEventListener('scroll', animateEvents);
        });

        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            setTimeout(function() {
                addStatusBadges();
                animateEvents();
            }, 1);
        }
    })();
</script>