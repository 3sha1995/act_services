
<section class="template_about_section">
    <div class="template_about_container">

    <div class="template_about_header template_scroll-fade">
    <div class="template_about_ontop_title">ABOUT US</div>
    <h2 class="template_about_title">SPECIAL NEEDS</h2>
    <div class="template_about_divider"></div>
    </div>


        <div class="template_about_content template_scroll-fade">
            <div class="template_about_image">
                <img src="../imgs/student_affairs.jpg" alt="WMSU Health Center">
            </div>

            <div class="template_about_text">
                <p class="template_about_description">
               Sports Development Programs are programs designed for the physical fitness and wellness of students.
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
            <img src="../imgs/sa_m.jpg" alt="WMSU Mission">
            <div class="template_mv_overlay_mission"></div>
            <div class="template_mv_content">
                <h2 class="template_mv_title">MISSION</h2>
                <div class="template_mv_show_more">
                <span class="template_show_more_icon">+</span>
                    <span class="template_show_more_text">SHOW MORE</span>
                </div>
                <div class="template_mv_full_content">
                    <p> In line with the University's mission, the Student Affairs and Services shall thrive to provide quality and relevant services in the significant areas of: Student
Welfare Services, Student Development Services, and Institutional Student Programs and Services.</p>
                </div>
            </div>
        </div>

        <div class="template_mv_box_vision" onclick="expandSection(this, 'vision')">
            <img src="../imgs/sa_v.jpg" alt="WMSU Vision">
            <div class="template_mv_overlay_vision"></div>
            <div class="template_mv_content">
                <h2 class="template_mv_title">VISION</h2>
                <div class="template_mv_show_more">
                    <span class="template_show_more_icon">+</span>
                    <span class="template_show_more_text">SHOW MORE</span>
                </div>
                <div class="template_mv_full_content">
                    <p>  The Department of Education dearty states its vision for children with special needs in consonance with the philosophy of inclusive education, thus:
The State, community and family hold a common vision for the Filipino children with special needs. By the 21" century, it is envisioned that he/ she could be adequately provided with basic education. This education should fully realize his/her own potentials for development and productivity as well as being capable of self- expression of his/her rights in society. More importantly, he/she is God- loving and proud of being a Filipino.
It is also envisioned that the child with special needs will get full parental and community support for his/her education without discrimination of any kind.
This special child should also be provided with a healthy environment along with leisure and recreation and societal security measures.' (Department of Education Handbook on Inclusive Education, 2000)</p>
                </div>
            </div>
        </div>
    </section>
    </section>

    <section class="template_objectives_section">
    <div class="template_objectives_container">
        <h2 class="template_objectives_title">OUR OBJECTIVES</h2>
        <div class="template_objectives_divider"></div>

        <div class="template_objectives_content">
           

                <ul class="template_objectives_list">
                    <li> Identify the present needs of the students and responses appropriate to them</li>
                    <li> Guide students to use resources efficiently in the achievement of the university mission and goals</li>
                    <li> Hone students potential both in academic and extra-curricular undertakings</li>
                    <li> Develop student leaders by attendance and exposure to local and national conferences and seminars</li>
                    <li>Mediate conflict observing due to process towards a fair and expedient conflict resolution</li>
                    <li>Evaluate, improve or revise guidelines and policies in the delivery of the services to the students.</li>
                </ul>
        </div>
    </div>
</section>

<section class="template_functions_section">
    <div class="template_functions_container">
        <h2 class="template_functions_title">KEY FUNCTIONS</h2>
        <div class="template_functions_divider"></div>

        <div class="template_functions_content">
            
         <ul class="template_objectives_list">
    <ul class="template_objectives_list">
    
        <ul>
            <li>Monitor the welfare of exceptional students</li>
            
        </ul>
 


        </div>
    </div>
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
  Athletes Training
      </p>
    </div>
  </div>
  <div class="template_service_card">
    <div class="template_service_content">
      <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
        <p class="template_service_description">
    	Coaches Training
      </p>
    </div>
  </div>
 <div class="template_service_card">
    <div class="template_service_content">
      <h3 class="template_service_title"><span class="template_bullet">●</span></h3>
        <p class="template_service_description">
      Designing fitness and wellness of Faculty, Staff, Administrative Personnel, Students, and Walk-in Clients
    </div>
  </div>
 

       
    </div>
    <div id="templateServicesPagination" class="template_pagination"></div>


</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const servicesPerPage = 6;
    const serviceContainer = document.querySelector('.template_services_grid');
    const pagination = document.getElementById('templateServicesPagination');

    if (!serviceContainer) return;

    const services = Array.from(serviceContainer.querySelectorAll('.template_service_card'));

    if (services.length === 0) return;

    function showPage(page) {
        const start = (page - 1) * servicesPerPage;
        const end = start + servicesPerPage;

        services.forEach((service, index) => {
            if (index >= start && index < end) {
                service.style.display = "flex";  // Assuming your cards use flexbox layout
            } else {
                service.style.display = "none";
            }
        });

        renderPagination(page);

        // Smooth scroll to top of the services container ONLY when clicking pagination buttons (not on initial page load)
        if (!initialLoad) {
            serviceContainer.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    }

    function renderPagination(currentPage) {
        const totalPages = Math.ceil(services.length / servicesPerPage);
        pagination.innerHTML = '';

        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.className = 'pagination-btn';
            if (i === currentPage) btn.classList.add('active');
            btn.addEventListener('click', () => {
                initialLoad = false;
                showPage(i);
            });
            pagination.appendChild(btn);
        }
    }

    // Flag to detect if it’s the first page load (to prevent scrolling on initial load)
    let initialLoad = true;

    showPage(1);
});

</script>



<section class="template_activities_section">
    <div class="template_activities_container">
        <h2 class="template_activities_title">ACTIVITIES CALENDAR</h2>
        <div class="template_activities_divider"></div>

        <div class="template_activities_timeline">
        
            <div class="template_event" data-date="2023-08-10">
                <div class="template_event_date">
                    <span class="template_event_month">Feb</span>
                    <span class="template_event_day">13</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_image">
                        <img src="../imgs/blood.jpg" alt="Freshman Orientation Seminar">
                    </div>
                    <div class="template_event_details">
                        <h3>Blood Donation</h3>
                        <div class="template_event_meta">
                            <span><i class="fas fa-map-marker-alt"></i>WMSU Covered Court</span>
                            <span><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</span>
                        </div>
                        <p>Calling the Crimson Community!
                        Join us for a Blood Donation Drive.</p>
                    </div>
                </div>
            </div>

            <div class="template_event" data-date="2023-08-15">
                <div class="template_event_date">
                    <span class="template_event_month">Feb</span>
                    <span class="template_event_day">17</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_image">
                        <img src="../imgs/event1.jpg" alt="Student Leadership Conference">
                    </div>
                    <div class="template_event_details">
                        <h3>Love s in the Campus Air On Heart's Day</h3>
                        <div class="template_event_meta">
                            <span><i class="fas fa-map-marker-alt"></i> WMSU Field</span>
                            <span><i class="fas fa-clock"></i> 1:00 AM - 5:00 PM</span>
                        </div>
                        <p>Sweet trails of affection oozed from every corner of Western Mindanao State University (WMSU) as students embraced love on Valentine’s Day last February 14, 2025. </p>
                    </div>
                </div>
            </div>

            <div class="template_event" data-date="2025-08-20">
                <div class="template_event_date">
                    <span class="template_event_month">May</span>
                    <span class="template_event_day">28</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_image">
                        <img src="../imgs/sa3.jpg" alt="Career Development Workshop">
                    </div>
                    <div class="template_event_details">
                        <h3>Career Development Workshop</h3>
                        <div class="template_event_meta">
                            <span><i class="fas fa-map-marker-alt"></i> Career Services Center</span>
                            <span><i class="fas fa-clock"></i> 1:00 PM - 5:00 PM</span>
                        </div>
                        <p>Workshop focused on resume building, interview skills, and job search strategies for graduating students.</p>
                    </div>
                </div>
            </div>
                        <div class="template_event" data-date="2025-08-20">
                <div class="template_event_date">
                    <span class="template_event_month">May</span>
                    <span class="template_event_day">28</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_image">
                        <img src="../imgs/sa3.jpg" alt="Career Development Workshop">
                    </div>
                    <div class="template_event_details">
                        <h3>Career Development Workshop</h3>
                        <div class="template_event_meta">
                            <span><i class="fas fa-map-marker-alt"></i> Career Services Center</span>
                            <span><i class="fas fa-clock"></i> 1:00 PM - 5:00 PM</span>
                        </div>
                        <p>Workshop focused on resume building, interview skills, and job search strategies for graduating students.</p>
                    </div>
                </div>
            </div>
                        <div class="template_event" data-date="2025-08-20">
                <div class="template_event_date">
                    <span class="template_event_month">May</span>
                    <span class="template_event_day">28</span>
                </div>
                <div class="template_event_content">
                    <div class="template_event_image">
                        <img src="../imgs/sa3.jpg" alt="Career Development Workshop">
                    </div>
                    <div class="template_event_details">
                        <h3>Career Development Workshop</h3>
                        <div class="template_event_meta">
                            <span><i class="fas fa-map-marker-alt"></i> Career Services Center</span>
                            <span><i class="fas fa-clock"></i> 1:00 PM - 5:00 PM</span>
                        </div>
                        <p>Workshop focused on resume building, interview skills, and job search strategies for graduating students.</p>
                    </div>
                </div>
            </div>
        </div>
       <div class="template_pagination" id="templatePagination"></div>

    </div>
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
                    <h3 class="template_facility_title">Office of Student Affairs</h3>
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

 
<section class="student_affairs_logo_section">
    <div class="student_affairs_logo_container">
        <img src="../imgs/salogo1.png" alt="Health Services Logo" class="student_affairs_logo">
        <h2>Health Services</h2>
        <p>Western Mindanao State University</p>
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
                <h3 class="template_officer_name">Evelyn N. Angeles</h3>
                <p class="template_officer_position">Director</p>
            </div>
        </div>

        <div class="template_officer_card">
            <div class="template_officer_image_wrapper">
                <img src="../imgs/unkown.png" alt="Officer 2" class="template_officer_image">
            </div>
            <div class="template_officer_info">
                <h3 class="template_officer_name">Dr. Rochard Tarroza</h3>
                <p class="template_officer_position">Assistant Director</p>
            </div>
        </div>

        
    </div>
</section>
  <section class="template-contact-section">
    <h2>Get in Touch</h2>
    <p class="template-subheading">Ready to get started? Contact us today and let's build something amazing together.</p>
    
    <div class="template-contact-cards">
      <div class="template-card">
        <div class="template-icon template-phone"><i class="fas fa-phone"></i></div>
        <h4>Phone</h4>
        <p>+1 (555) 123-4567</p>
      </div>

      <div class="template-card">
        <div class="template-icon template-location"><i class="fas fa-map-marker-alt"></i></div>
        <h4>Location</h4>
        <p>123 Business St<br>New York, NY 10001</p>
      </div>

      <div class="template-card">
        <div class="template-icon template-email"><i class="fas fa-envelope"></i></div>
        <h4>Email</h4>
        <p>hello@logoname.com</p>
      </div>

      <div class="template-card">
        <div class="template-icon template-facebook"><i class="fab fa-facebook-f"></i></div>
        <h4>Facebook</h4>
        <p>@logoname</p>
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