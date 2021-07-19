
const point = document.querySelector('.point')
const wid = document.querySelector('.wid')
const hie = document.querySelector('.hie')


document.addEventListener('mousemove', (e) => {
    const x = e.clientX;
    const y = e.clientY;

    hie.style.left = `${x}px`;
    wid.style.top = `${y}px`;
    point.style.top = `${y}px`;
    point.style.left = `${x}px`
})