
<section class="template_about_section">
    <div class="template_about_container">

    <div class="template_about_header template_scroll-fade">
    <div class="template_about_ontop_title">ABOUT US</div>
    <h2 class="template_about_title">Office of the Vice President for Student Affairs and Services</h2>
    <div class="template_about_divider"></div>
    </div>


        <div class="template_about_content template_scroll-fade">
            <div class="template_about_image">
                <img src="../imgs/sa_9.jpg" alt="WMSU Health Center">
            </div>

            <div class="template_about_text">
                <p class="template_about_description">
                The Office of the Vice President for Student Affairs and Services (VPSAS) oversees the conduct of plan, programs, and activities related to student welfare and development in consonance with the Vision, Mission, and Quality Policy of the Western Mindanao State University.
                </p>
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
      <h3 class="template_service_title"><span class="template_bullet">●</span> Accreditation of Student Organization</h3>
      
    </div>
  </div>
  <div class="template_service_card">
    <div class="template_service_content">
      <h3 class="template_service_title"><span class="template_bullet">●</span> Application for lost school ID</h3>
    </div>
  </div>
  <div class="template_service_card">
    <div class="template_service_content">
      <h3 class="template_service_title"><span class="template_bullet">●</span> Validation of School ID</h3>
    
    </div>
  </div>
   <div class="template_service_card">
    <div class="template_service_content">
      <h3 class="template_service_title"><span class="template_bullet">●</span> student Conduct and Discipline</h3>
    
    </div>
  </div>
   <div class="template_service_card">
    <div class="template_service_content">
      <h3 class="template_service_title"><span class="template_bullet">●</span> Endorsement and Monitoring of Student Programs and Activities</h3>
    
    </div>
  </div>
   <div class="template_service_card">
    <div class="template_service_content">
      <h3 class="template_service_title"><span class="template_bullet">●</span>	Non-academic Evaluation and Recognition</h3>
    
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
            <p class="template_facilities_description"></p>
        </div>


        <div class="template_facilities_grid">
            <div class="template_facility_card" data-category="social">
                <div class="template_facility_image">
                    <img src="../imgs/sa_office.jpg" alt="Student Lounge">
                    <div class="template_facility_overlay">
                    </div>
                </div>
              <div class="template_facility_content">
                    <h3 class="template_facility_title">Office of Vice President for Student Affairs and Services</h3>
                    <p class="template_facility_description"> Location: WMSU Campus A, Normal road, Baliwasan, Zamboanga City.
                        
                    </p>
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
                <h3 class="template_officer_name">Dr.Fredelind M. San Juan</h3>
                <p class="template_officer_position">Vice President for Student Affairs and Services</p>
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
        <p> WMSU Campus A, Normal road, Baliwasan, Zamboanga City.</p>
      </div>

      <div class="template-card">
        <div class="template-icon template-email"><i class="fas fa-envelope"></i></div>
        <h4>Email</h4>
        <p>wmsu.vpsas@gmail.com</p>
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