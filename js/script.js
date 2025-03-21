var header = document.getElementById('Header');

window.addEventListener('scroll', ()=> {
    
    var scroll = window.scrollY

    if (scroll>10) {
        header.style.background = 'linear-gradient(70deg, #2B4D89 50%, #7397CF )'
    }else{
        header.style.background = 'transparent'
    }
})

var animation = document.querySelector('#animation');
        var item = document.querySelectorAll('.menu a');

        function indicador(e){
            animation.style.left = e.offsetLeft+"px";
            animation.style.width = e.offsetWidth+"px";
        }

        item.forEach(link => {
            link.addEventListener('click', (e)=>{
                indicador(e.target);
            })
        })
