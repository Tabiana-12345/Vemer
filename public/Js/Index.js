 
        // Marquee Pause/Resume on Hover
        const marquee = document.querySelector('.marquee');
        const marqueeContent = document.querySelector('.marquee-content');
        
        if (marquee) {
            marquee.addEventListener('mouseenter', function() {
                marqueeContent.style.animationPlayState = 'paused';
                marquee.style.cursor = 'pointer';
            });
            
            marquee.addEventListener('mouseleave', function() {
                marqueeContent.style.animationPlayState = 'running';
            });
        }

    