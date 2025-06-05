// Background image slideshow
document.addEventListener('DOMContentLoaded', function() {
    const images = [
        "../imgs/cte.jpg",
        "../imgs/cte.jpg",
        "../imgs/cte.jpg"
    ];
    
    const slideshowContainer = document.querySelector(".student_affairs_about_background");
    const overlay = document.querySelector(".student_affairs_about_overlay");
    
    if (!slideshowContainer || !overlay) {
        console.error("Required elements not found for slideshow");
        return;
    }
    
    // Clear any existing images
    const existingImages = slideshowContainer.querySelectorAll(".student_affairs_about_background");
    existingImages.forEach(img => img.remove());
    
    // Create initial images
    images.forEach((src, index) => {
        const img = document.createElement("img");
        img.src = src;
        img.alt = "WMSU Campus";
        img.classList.add("student_affairs_about_background");
        if (index === 0) {
            img.classList.add("active");
        }
        
        // Add error handling
        img.onerror = function() {
            console.error("Failed to load image:", src);
            this.src = "../imgs/cte.jpg"; // Fallback image
        };
        
        slideshowContainer.insertBefore(img, overlay);
    });
    
    let currentIndex = 0;
    
    function nextImage() {
        // Remove active class from current image
        const currentImage = slideshowContainer.querySelector(".student_affairs_about_bg_image.active");
        if (currentImage) {
            currentImage.classList.remove("active");
        }
        
        // Move to next image
        currentIndex = (currentIndex + 1) % images.length;
        
        // Add active class to new current image
        const nextImage = slideshowContainer.querySelectorAll(".student_affairs_about_bg_image")[currentIndex];
        if (nextImage) {
            nextImage.classList.add("active");
        }
    }
    
    // Change image every 5 seconds
    setInterval(nextImage, 5000);
});

function expandSection(element, type) {
    // Get all boxes
    const missionBox = document.querySelector('.student_affair_mv_box_mission');
    const visionBox = document.querySelector('.student_affair_mv_box_vision');
    
    // Remove expanded class from all boxes
    missionBox.classList.remove('expanded');
    visionBox.classList.remove('expanded');
    
    // Add expanded class to clicked box
    element.classList.add('expanded');
}

function toggleServiceInfo(serviceId) {
    const serviceBox = document.querySelector(`[onclick="toggleServiceInfo('${serviceId}')"]`);
    const allServiceBoxes = document.querySelectorAll('.student_affairs_services_box');
    
    // Close all other service boxes
    allServiceBoxes.forEach(box => {
        if (box !== serviceBox) {
            box.classList.remove('active');
        }
    });
    
    // Toggle the clicked service box
    serviceBox.classList.toggle('active');
}

function toggleBox(clickedBox) {
    let boxes = document.querySelectorAll('.student_affair_mv_box_mission');
    boxes.forEach(box => {
        if (box !== clickedBox) {
            box.classList.remove('active');
        }
    });
    clickedBox.classList.toggle('active');
}

// Scroll Animation Function
function handleScrollAnimation() {
    const sections = document.querySelectorAll('.student_affairs_about_section, .student_affair_mv_wrapper, .student_affairs_services_section, .student_affairs_activities_section, .student_affairs_officer_section, .student_affairs_logo_section, .student_affairs_contact_section');
    const cards = document.querySelectorAll('.student_affairs_services_box, .student_affairs_activities_card, .student_affairs_officer_card');

    const observerOptions = {
        root: null,
        rootMargin: '50px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // If it's a section with cards, animate the cards
                if (entry.target.querySelector('.student_affairs_services_box') || 
                    entry.target.querySelector('.student_affairs_activities_card') || 
                    entry.target.querySelector('.student_affairs_officer_card')) {
                    const cards = entry.target.querySelectorAll('.student_affairs_services_box, .student_affairs_activities_card, .student_affairs_officer_card');
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('visible');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);

    // Observe sections
    sections.forEach(section => {
        observer.observe(section);
    });

    // Observe individual cards
    cards.forEach(card => {
        observer.observe(card);
    });
}

// Initialize scroll animations when the page loads
document.addEventListener('DOMContentLoaded', () => {
    // Initialize scroll animations
    handleScrollAnimation();
});

// Re-run animations when the page is resized
window.addEventListener('resize', () => {
    handleScrollAnimation();
});


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
