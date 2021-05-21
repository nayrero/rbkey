<template>
    <div class="about__slider">        
        <div class="about__slider-item" v-for='slide in sliderList' :key="slide.id" v-bind:style='"background-image: url(" + slide.img + ")"'>
        </div>
                    
    </div>
</template>
<script>
export default {
    name:"about",
    data(){
        return{
            sliderList: [
                {img: '/img/about-banner-1.jpg'},
                {img: '/img/about-banner-2.jpg'},
                {img: '/img/about-banner-3.jpg'},
                {img: '/img/about-banner-4.jpg'},
                {img: '/img/about-banner-5.jpg'},                    
			],
            sliderAllCount: 0,
            slides: [],
            currentSlide: 0,            
        }
    },
    methods:{
        initSlider: function () {
			// Получаем элементы слайдера и его слайдов            
            this.slides = this.$el.querySelectorAll('.about__slider-item');           
            // Общее количество слайдов
            this.sliderAllCount = this.slides.length;
            },
        sliderShow: function () {
             
            this.slides[this.currentSlide].classList.remove('show');
            this.currentSlide = (this.currentSlide+1)%this.sliderAllCount;
            this.slides[this.currentSlide].classList.add('show');
               
        }
             
    },
    mounted(){
       this.initSlider();
       this.sliderShow();
       setInterval(this.sliderShow, 7000);
       
   }      

}
</script>

<style>
.about__slider{
    width: 100%;
	height: 800px;
    margin-top: 50px;
    transition: 4s ease;
}
.about__slider-item {
    display: none;   
    background-size: 100% auto;
    background-repeat: no-repeat;
    background-position: center center;   
    height: 100%;
    animation-name: fade2;     
    animation-duration: 2.5s; 
}
.show {
    display: block;
    animation-name: fade;     
    animation-duration: 1.5s;
}
@keyframes fade {
    from {
        opacity: 0
    }
    to {
        opacity: 1
    }
}
@keyframes fade2 {
    from {
        opacity: 1
    }
    to {
        opacity: 0
    }
}


</style>