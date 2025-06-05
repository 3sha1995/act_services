
<section class="template_about_section">
    <div class="template_about_container">

    <div class="template_about_header template_scroll-fade">
    <div class="template_about_ontop_title">ABOUT US</div>
    <h2 class="template_about_title">UNIVERSITY HEALTH SERVICES CENTER</h2>
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

  
    <section class="template_mv_wrapper">
        <h2 class="template_mv_main_title">MISSION AND VISION</h2>
        <div class="template_mv_divider"></div>
    <section class="template_mv_container">
        <div class="template_mv_box_mission" onclick="expandSection(this, 'mission')">
            <img src="../imgs/health1.jpg" alt="WMSU Mission">
            <div class="template_mv_overlay_mission"></div>
            <div class="template_mv_content">
                <h2 class="template_mv_title">MISSION</h2>
                <div class="template_mv_show_more">
                <span class="template_show_more_icon">+</span>
                    <span class="template_show_more_text">SHOW MORE</span>
                </div>
                <div class="template_mv_full_content">
                    <p>The Western Mindanao State University Health Services Center is committed to: <br>
- Delivering timely and responsive health services that meet the common medical and dental needs of the university community; <br>
- Establishing and maintaining adequate treatment and diagnostic procedures;<br>
- Expanding healthcare access across all WMSU campuses; and <br>
- Strengthening external collaborations with health agencies and partners to enhance service delivery and community wellness.</p>

                </div>
            </div>
        </div>

        <div class="template_mv_box_vision" onclick="expandSection(this, 'vision')">
            <img src="../imgs/health2.jpg" alt="WMSU Vision">
            <div class="template_mv_overlay_vision"></div>
            <div class="template_mv_content">
                <h2 class="template_mv_title">VISION</h2>
                <div class="template_mv_show_more">
                    <span class="template_show_more_icon">+</span>
                    <span class="template_show_more_text">SHOW MORE</span>
                </div>
                <div class="template_mv_full_content">
                    <p>  To be a leading university-based health services center that provides comprehensive, quality, and accessible medical and dental care to students, faculty, staff, and nearby communities—anchored on service excellence, compassion, and continuous development.</p>
                </div>
            </div>
        </div>
    </section>
    </section>
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
                        Walk-in Medical Consultations
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Issuance of Health Clearances and Medical Certifications
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Mental Health Assistance and Referral Services
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Emergency Response Protocols & Referral System
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Dental Services
                    </p>
                </div>
            </div>
            <div class="template_service_card">
                <div class="template_service_content">
                    <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
                    <p class="template_service_description">
                        Health Programs Implementation
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="template_activities_section">
    <div class="template_activities_container">
        <h2 class="template_activities_title">ACTIVITIES CALENDAR</h2>
        <div class="template_activities_divider"></div>

        <div class="template_activities_timeline">

            <!-- All Year -->
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">All Year</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Medical & Dental Examination for Employees</h3>
                        <p>Conducted year-round</p>
                    </div>
                </div>
            </div>
            
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">All Year</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Mental Health Referral System & Assistance Program</h3>
                        <p>Ongoing throughout the year</p>
                    </div>
                </div>
            </div>
            
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">All Year</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Free HIV Testing (Screening) & Counselling</h3>
                        <p>Available all year round</p>
                    </div>
                </div>
            </div>
            
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">All Year</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Mandatory Random Drug Testing</h3>
                        <p>For College, Postgraduate, and Postbaccalaureate students</p>
                    </div>
                </div>
            </div>
            
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">All Year</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Weight Improvement Program for Employees</h3>
                        <p>Ongoing wellness program for employee health</p>
                    </div>
                </div>
            </div>

            <!-- Seasonal -->
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">Seasonal</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Disease Awareness Campaigns</h3>
                        <p>Based on outbreaks or seasonal trends (e.g. Dengue, HFMD)</p>
                    </div>
                </div>
            </div>

            <!-- January (and combinations) -->
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">Jan–May</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Annual Medical & Dental Examination for Elementary & High School Students</h3>
                        <p>Conducted every 2nd Semester from January to May</p>
                    </div>
                </div>
            </div>
            
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">Jan & Jul</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>“Balik Eskwela” Campus Sanitation</h3>
                        <p>Conducted at the start of each semester</p>
                    </div>
                </div>
            </div>

            <!-- February -->
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">Feb</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Basic Life Support (BLS) & First Aid Training for Employees</h3>
                        <p>Conducted every February</p>
                    </div>
                </div>
            </div>

            <!-- June–September -->
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">Jun–Sep</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Pre-enrollment Health Assessment for Incoming Freshmen</h3>
                        <p>Conducted every 1st Semester from June to September</p>
                    </div>
                </div>
            </div>

            <!-- TBA -->
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">TBA</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>University-Wide Flu & Pneumococcal Vaccination</h3>
                        <p>Conducted based on resource availability</p>
                    </div>
                </div>
            </div>
            
            <div class="template_event">
                <div class="template_event_date">
                    <span class="template_event_month">TBA</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_details">
                        <h3>Surgical Mission</h3>
                        <p>Includes circumcision, excision of benign soft tissue masses; subject to resource availability</p>
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
                    <img src="../imgs/health3.jpg" alt="Campus A Clinic">
                    <div class="template_facility_overlay"></div>
                </div>
                <div class="template_facility_content">
                    <h3 class="template_facility_title">Campus A Clinic (Main Campus)</h3>
                    <p class="template_facility_description">
                        Location: WMSU Campus A, Normal Road, Baliwasan, Zamboanga City<br>
                        Contact: <br>
                        Telephone: (062) 991-6736<br>
                        Email: healthservices@wmsu.edu.ph
                    </p>
                    <div class="template_facility_operating_hours">
                        <h4><i class="fas fa-clock"></i> Clinic Hours</h4>
                        <ul>
                            <li><span>Monday - Friday:</span> 8:00 AM - 7:00 PM</li>
                            <li><span>Saturday:</span> 8:00 AM - 5:00 PM</li>
                            <li><span>Sunday:</span> CLOSED</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Campus B Clinic -->
            <div class="template_facility_card" data-category="health">
                <div class="template_facility_image">
                    <img src="../imgs/health4.jpg" alt="Campus B Clinic">
                    <div class="template_facility_overlay"></div>
                </div>
                <div class="template_facility_content">
                    <h3 class="template_facility_title">Campus B Clinic</h3>
                    <p class="template_facility_description">
                        Location: WMSU Campus B, Normal Road, Baliwasan, Zamboanga City
                    </p>
                    <div class="template_facility_operating_hours">
                        <h4><i class="fas fa-clock"></i> Clinic Hours</h4>
                        <ul>
                            <li><span>Monday - Friday:</span> 8:00 AM - 5:00 PM</li>
                            <li><span>Saturday - Sunday:</span> CLOSED</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Campus C Clinic -->
            <div class="template_facility_card" data-category="health">
                <div class="template_facility_image">
                    <img src="../imgs/no.jpg" alt="Campus C Clinic">
                    <div class="template_facility_overlay"></div>
                </div>
                <div class="template_facility_content">
                    <h3 class="template_facility_title">Campus C Clinic</h3>
                    <p class="template_facility_description">
                        Location: WMSU Campus C, San Ramon, Zamboanga City
                    </p>
                    <div class="template_facility_operating_hours">
                        <h4><i class="fas fa-clock"></i> Clinic Hours</h4>
                        <ul>
                            <li><span>Monday - Friday:</span> 8:00 AM - 5:00 PM</li>
                            <li><span>Saturday - Sunday:</span> CLOSED</li>
                        </ul>
                    </div>
                </div>
            </div> <div class="template_facility_card" data-category="health">
                <div class="template_facility_image">
                    <img src="../imgs/health_dental.jpg" alt="Campus C Clinic">
                    <div class="template_facility_overlay"></div>
                </div>
                <div class="template_facility_content">
                    <h3 class="template_facility_title">Dental Clinic</h3>
                    <p class="template_facility_description">
                        Location: WMSU Campus A, Normal Road, Baliwasan, Zamboanga City
                    </p>
                    <div class="template_facility_operating_hours">
                        <h4><i class="fas fa-clock"></i> Clinic Hours</h4>
                        <ul>
                            <li><span>Monday - Friday:</span> 8:00 AM - 5:00 PM</li>
                            <li><span>Saturday - Sunday:</span> CLOSED</li>
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
                <h3 class="template_officer_name">Dr. Filicitas Asuncion C. Elago</h3>
                <p class="template_officer_position">Medical Officer</p>
            </div>
        </div>

        <div class="template_officer_card">
            <div class="template_officer_image_wrapper">
                <img src="../imgs/unkown.png" alt="Officer 2" class="template_officer_image">
            </div>
            <div class="template_officer_info">
                <h3 class="template_officer_name">Dr. Pearly Ruby Cariage</h3>
                <p class="template_officer_position">University Denstist</p>
            </div>
        </div>

        
    </div>
</section>
<section class="template-contact-section">
  <h2>Get in Touch</h2>
  <p class="template-subheading"></p>

  <div class="template-contact-cards">
    <div class="template-card">
      <div class="template-icon template-phone"><i class="fas fa-phone"></i></div>
      <h4>Phone</h4>
      <p>(062) 991-6736</p>
    </div>

    <div class="template-card">
      <div class="template-icon template-location"><i class="fas fa-map-marker-alt"></i></div>
      <h4>Location</h4>
      <p> WMSU Campus A, Normal Road,  Baliwasan, Zamboanga City</p> <!-- Update this if needed -->
    </div>

    <div class="template-card">
      <div class="template-icon template-email"><i class="fas fa-envelope"></i></div>
      <h4>Email</h4>
      <p>healthservices@wmsu.edu.ph</p>
    </div>

    <div class="template-card">
      <div class="template-icon template-facebook"><i class="fab fa-facebook-f"></i></div>
      <h4>Facebook</h4>
      <p><a href="https://web.facebook.com/WMSUHealthServices" target="_blank">@WMSUHealthServices</a></p>
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