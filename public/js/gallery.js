// Foto Hovering
const tl = gsap.timeline({ paused: true });


tl.to('.photo', {
    scale: 1.1,
    opacity: 0.8,
    duration: 0.3,
    ease: 'power1.inOut',
});

document.querySelectorAll('.photo').forEach(photo => {
    photo.addEventListener('mouseenter', () => {
        tl.play();
    });

    photo.addEventListener('mouseleave', () => {
        tl.reverse();
    });
});


const photoCards = document.querySelectorAll('.foto-container');

photoCards.forEach(photoCard => {
    photoCard.addEventListener('mouseenter', () => {
        const description = photoCard.querySelector('.description-container');
        description.style.bottom = '0';
    });

    photoCard.addEventListener('mouseleave', () => {
        const description = photoCard.querySelector('.description-container');
        description.style.bottom = '-100%';
    });
});


// Video Section
const videoCard = document.querySelector('.video-card');
const playIcon = document.querySelector('.play-icon');

videoCard.addEventListener('mouseover', () => {
    playIcon.style.opacity = '1';
});

videoCard.addEventListener('mouseout', () => {
    playIcon.style.opacity = '0';
});



