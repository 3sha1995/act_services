
<section class="template_about_section">
    <div class="template_about_container">

    <div class="template_about_header template_scroll-fade">
    <div class="template_about_ontop_title">ABOUT US</div>
    <h2 class="template_about_title">GUIDANCE AND COUNSELLING</h2>
    <div class="template_about_divider"></div>
    </div>


        <div class="template_about_content template_scroll-fade">
            <div class="template_about_image">
                <img src="../imgs/health.jpg" alt="WMSU Health Center">
            </div>

            <div class="template_about_text">
                <p class="template_about_description">
       The University Health Services Center provides medical and dental services which caters to both students and employees. It is composed of one (1) university physician, one (1) university dentist, six (6) nurses, and one (1) dental aide across the three main campuses of the university.
                </p>
                 <p class="template_about_description">
      The medical services include the conduct of students’ annual medical/physical exams, implementation of health programs (see below) for the university, and out-patient/walk-in medical consultations. These consultations commonly involve prescription of medication/s, dressing of wounds, and/or referral to a specialist physician as needed. The clinic also responds to medical emergencies during which it facilitates the patient’s transfer to a tertiary hospital via a request for ambulance services.
                </p>
                 <p class="template_about_description">
     The dental clinic provides an annual dental check-up and caters to consultations concerning oral health. Dental extractions, if deemed necessary, may be availed at the clinic at no cost to the student or employee.
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

  


<section class="template_activities_section">
  <div class="template_activities_container">
    <h2 class="template_activities_title">ACTIVITIES CALENDAR</h2>
    <div class="template_activities_divider"></div>

    <div class="template_activities_timeline">

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">Jan</span>
          <span class="template_event_day">09</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/guidance4.jpg" alt="Psychological Testing for Interns - BS Chem">
          </div>
          <div class="template_event_details">
            <h3>PSYCHOLOGICAL TESTING FOR INTERNS: CSM</h3>
          </div>
        </div>
      </div>

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">Jan</span>
          <span class="template_event_day">7-8-10</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/guidance.jpg" alt="Spirituality & Values – High School">
          </div>
          <div class="template_event_details">
            <h3>ISO WORKSHOP</h3>
          </div>
        </div>
      </div>

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">Jan</span>
          <span class="template_event_day">15</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/spirituality_elementary.jpg" alt="Spirituality & Values – Elementary">
          </div>
          <div class="template_event_details">
            <h3>PSYCHOLOGICAL TESTING FOR INTERNS: CCS</h3>
          </div>
        </div>
      </div>

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">Mar</span>
          <span class="template_event_day">21</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/spirituality_college.jpg" alt="Spirituality & Values – College">
          </div>
          <div class="template_event_details">
            <h3>Cultivating Inner Strength – College</h3>
          </div>
        </div>
      </div>

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">Mar</span>
          <span class="template_event_day">25</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/vocation.jpg" alt="Vocation Awareness Seminar">
          </div>
          <div class="template_event_details">
            <h3>Vocation Awareness – Graduating College Students</h3>
          </div>
        </div>
      </div>

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">Apr</span>
          <span class="template_event_day">08</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/career_orientation.jpg" alt="Career Orientation – Senior High">
          </div>
          <div class="template_event_details">
            <h3>Career Orientation – Senior High School</h3>
          </div>
        </div>
      </div>

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">May</span>
          <span class="template_event_day">09</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/mental_health.jpg" alt="Employee Mental Health Seminar">
          </div>
          <div class="template_event_details">
            <h3>Employee Mental Health & Wellness Seminar</h3>
          </div>
        </div>
      </div>

      <div class="template_event">
        <div class="template_event_date">
          <span class="template_event_month">May</span>
          <span class="template_event_day">14</span>
        </div>
        <div class="template_event_content">
          <div class="template_event_image">
            <img src="../imgs/work_culture.jpg" alt="Transforming Work Culture Workshop">
          </div>
          <div class="template_event_details">
            <h3>Transforming Work Culture – Admin Teams</h3>
          </div>
        </div>
      </div>

    </div>
    <div class="template_pagination" id="templatePagination"></div>
  </div>
</section>



<script>
document.addEventListener("DOMContentLoaded", function () {
    const eventsPerPage = 4;
    const eventContainer = document.querySelector('.template_activities_timeline');
    const pagination = document.getElementById('templatePagination');

    const events = Array.from(eventContainer.querySelectorAll('.template_event'));

    if (!eventContainer || events.length === 0) return;

    let currentPage = 1;

    function showPage(page, scroll = false) {
        const start = (page - 1) * eventsPerPage;
        const end = start + eventsPerPage;

        events.forEach((event, index) => {
            event.style.display = (index >= start && index < end) ? "flex" : "none";
        });

        renderPagination(page);

        if (scroll) {
            eventContainer.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    }

    function renderPagination(currentPage) {
        const totalPages = Math.ceil(events.length / eventsPerPage);
        pagination.innerHTML = '';

        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.className = 'pagination-btn';
            if (i === currentPage) btn.classList.add('active');

            btn.addEventListener('click', function () {
                showPage(i, true); // only scroll on button click
            });

            pagination.appendChild(btn);
        }
    }

    showPage(currentPage, false); // no scroll on initial load
});
</script>




<section class="template_facilities_section">
    <div class="template_facilities_container">
        <div class="template_facilities_header">
            <h2 class="template_facilities_title">OUR FACILITIES</h2>
            <div class="template_facilities_divider"></div>
            <p class="template_facilities_description"></p>
        </div>

        <div class="template_facilities_grid">
            <!-- Campus A Clinic -->
            <div class="template_facility_card" data-category="health">
                <div class="template_facility_image">
                    <img src="../imgs/guidance.jpg" alt="Campus A Clinic">
                    <div class="template_facility_overlay"></div>
                </div>
                <div class="template_facility_content">
                    <h3 class="template_facility_title">Office of Guidance and Counseling</h3>
                    <p class="template_facility_description">
                        Location: WMSU Campus A, Normal Road, Baliwasan, Zamboanga City<br>
                        
                    </p>
                    <div class="template_facility_operating_hours">
                        <h4><i class="fas fa-clock"></i> Clinic Hours</h4>
                        <ul>
                            <li><span>Monday - Friday:</span> 8:00 AM - 5:00 PM</li>
                           
                        </ul>
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
                <h3 class="template_officer_name">Dr. Fini Joy P. Buenafe</h3>
                <p class="template_officer_position">Director</p>
            </div>
        </div>
=

       

        
    </div>
</section>
<section class="template-contact-section">
  <h2>Get in Touch</h2>
  <p class="template-subheading"></p>

  <div class="template-contact-cards">
   

    <div class="template-card">
      <div class="template-icon template-location"><i class="fas fa-map-marker-alt"></i></div>
      <h4>Location</h4>
      <p> WMSU Campus A, Normal Road,  Baliwasan, Zamboanga City</p> <!-- Update this if needed -->
    </div>

    <div class="template-card">
      <div class="template-icon template-email"><i class="fas fa-envelope"></i></div>
      <h4>Email</h4>
      <p>gcc@wmsu.edu.ph</p>
    </div>

    <div class="template-card">
      <div class="template-icon template-facebook"><i class="fab fa-facebook-f"></i></div>
      <h4>Facebook</h4>
      <p><a href="https://web.facebook.com/wmsugcc" target="_blank">@WMSUHealthServices</a></p>
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