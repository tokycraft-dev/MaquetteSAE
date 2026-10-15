const stars = document.querySelector('.stars');

for (let i = 0; i < 160; i++){
    const star = document.createElement('i');
    star.style.left = Math.random() * 100 + '%';
    star.style.top=Math.random() * 50 + '%';
    star.style.animationDelay = -Math.random() * 3 + 's';
    stars.append(star);
}