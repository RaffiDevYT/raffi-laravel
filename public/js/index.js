if("serviceWorker" in navigator){
    window.addEventListener('load' , function(){
        navigator.serviceWorker
        .register('/serviceWorker.js')
        .then(res => console.log('berhasil : ' + res))
        .catch(err => console.log('gagal : ' +err))
    })
}



$('.service-slick').slick({
    dots: true,
    infinite: true,
    slidesToShow: 2,
    autoplay : true,
    autoplaySpeed: 1500,
    arrows : false,
    responsive : [
        {
            breakpoint : 1024,
            settings : {
                slidesToShow : 1,
                arrows : false
                
            }
        }
    ]
    
})

const darkChange = (el) => {

    const body = document.querySelector('body');
    const darkItem = document.querySelectorAll('.dark-item')

    if(el.querySelector('i').classList.contains('fa-moon')){
        el.querySelector('i').classList.remove('fa-moon')
        el.querySelector('i').classList.add('fa-sun')
        darkItem.forEach((item) => {
            item.classList.add('dark')
        })
        body.classList.add('dark')
    }
    else{
        el.querySelector('i').classList.add('fa-moon')
        el.querySelector('i').classList.remove('fa-sun')
        body.classList.remove('dark')
         darkItem.forEach((item) => {
            item.classList.remove('dark')
        })
      
    }

    
}

window.onload = function(){
    const nav = document.querySelector('nav')
    const about = document.querySelector('#about').offsetTop - 300
    const skill = document.querySelector('#skill').offsetTop - 300
    const portfolio = document.querySelector('#portfolio').offsetTop - 300
    const service = document.querySelector('#service').offsetTop - 300
    const buttonInfoBox = document.querySelectorAll('.port-info-box')
    const behindBackground = document.querySelector('.behind-background')
    const closeButton = document.querySelectorAll('.close-button')

    const smallHomeNav = document.querySelectorAll('.home-nav')
    const smallAboutNav = document.querySelectorAll('.about-nav')
    const smallSkillNav = document.querySelectorAll('.skill-nav')
    const smallPortfolioNav = document.querySelectorAll('.portfolio-nav')
    const smallServiceNav = document.querySelectorAll('.service-nav')
    
   

    document.addEventListener('scroll' , function(){
        if(document.documentElement.scrollTop > 70){
            nav.classList.add('active')
            
            if(document.documentElement.scrollTop > 0 && document.documentElement.scrollTop < about){
                smallAboutNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallSkillNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallPortfolioNav.forEach((item) => {
                    item.classList.remove('active')
                })
                 smallServiceNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallHomeNav.forEach((item) => {
                    item.classList.add('active')
                })
            }
            else if(document.documentElement.scrollTop > about && document.documentElement.scrollTop < skill){
                smallAboutNav.forEach((item) => {
                    item.classList.add('active')
                })
                smallSkillNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallPortfolioNav.forEach((item) => {
                    item.classList.remove('active')
                })
                 smallServiceNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallHomeNav.forEach((item) => {
                    item.classList.remove('active')
                })
            }
           else if(document.documentElement.scrollTop >= skill && document.documentElement.scrollTop > about && document.documentElement.scrollTop < portfolio){
                smallAboutNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallSkillNav.forEach((item) => {
                    item.classList.add('active')
                })
                smallPortfolioNav.forEach((item) => {
                    item.classList.remove('active')
                })
                 smallServiceNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallHomeNav.forEach((item) => {
                    item.classList.remove('active')
                })
            }
           else if(document.documentElement.scrollTop >= portfolio && document.documentElement.scrollTop > skill && document.documentElement.scrollTop < service){
                smallAboutNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallSkillNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallPortfolioNav.forEach((item) => {
                    item.classList.add('active')
                })
                 smallServiceNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallHomeNav.forEach((item) => {
                    item.classList.remove('active')
                })
            }
           else if(document.documentElement.scrollTop >= service && document.documentElement.scrollTop > portfolio ){
                smallAboutNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallSkillNav.forEach((item) => {
                    item.classList.remove('active')
                })
                smallPortfolioNav.forEach((item) => {
                    item.classList.remove('active')
                })
                 smallServiceNav.forEach((item) => {
                    item.classList.add('active')
                })
                smallHomeNav.forEach((item) => {
                    item.classList.remove('active')
                })
            }
           
        }
        else{
            nav.classList.remove('active')
        }
    })

    buttonInfoBox.forEach((item) => {
        item.addEventListener('click' , function(){
            behindBackground.classList.remove('invisible');
            let id = item.dataset.port;
            let detailPort = document.querySelector(`#${id}`)
            detailPort.classList.remove('invisible')
        })
    })
    closeButton.forEach((btn) => {
        btn.addEventListener('click' , function(){
            behindBackground.classList.add('invisible');
            let id = btn.dataset.port;
            let detailPort = document.querySelector(`#${id}`)
            detailPort.classList.add('invisible')
        })
    })

}
const redirectWa = () => {
    window.open(
        'https://wa.me/+628976121070?text=Hi , i am interesting to do a job for you . can we do a project together?',
        '_blank'
    )
}
const redirectEmail = () => {
    window.open(
        'https://muhammadsatriaherman@gmail.com',
        '_blank'
    )
}
const redirectPhone = () => {
    window.open(
        'tel:+628976121070',
        '_blank'
    )
}

const checkCollapse = (el) => {
    
    let arrow = el.querySelector('i.fa-chevron-down')
    if(!el.classList.contains('collapsed')){
        arrow.style.transform = "rotate(180deg)"
    } 
    else{
        arrow.style.transform = "rotate(0deg)"
    }
}

let obj = baffle('.baffle')

obj.set({
    characters :   '█▓█ ▒░/▒░ █░▒▓/ █▒▒ ▓▒▓/█ ░█▒/ ▒▓░ █<░▒ ▓/░',
    speed : 100
})
setInterval(() => {
    obj.reveal(4000)
    obj.stop()
} , 3000)
setInterval(() => {
    obj.start()

}, 4000)
