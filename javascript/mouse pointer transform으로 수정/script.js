
const point = document.querySelector('.point')
const wid = document.querySelector('.wid')
const hie = document.querySelector('.hie')

    
addEventListener('load', ()=>{

    const pointTarget = point.getBoundingClientRect()
    const pointw = pointTarget.width / 2;
    const pointy = pointTarget.height / 2;
    document.addEventListener('mousemove', (e) => {
        const x = e.clientX;
        const y = e.clientY;
    
        hie.style.transform = `translateX(${x}px)`;
        wid.style.transform = `translateY(${y}px)`;
        point.style.transform = `translate(${x-pointw}px,${y-pointy}px)`;
    })

})
