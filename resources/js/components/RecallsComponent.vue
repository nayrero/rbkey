<template>
    <div class="row">
        <div class="col-4 col-md-3 mt-3">
                           
            <h3>Отзывы</h3>
            <p>Отзывы наших клиентов</p>
            <button class="btn btn-outline-light" v-on:click="previousSlide">Пред.</button>
            <button class="btn btn-outline-light" v-on:click="nextSlide">След.</button>        
        </div>
        <div class="col-8 col-md-9">    
            <div class="slider js-slider">
                <div class="slider__body" ref="sliders">
                    <div class="slider__slide js-slide" v-for='recall in recalls' :key="recall.id">
                        <div class="media">
                            <img src="" class="mr-3" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">{{recall.title}}</h5>
                                <p>{{recall.content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</template>

<script>
    export default {
        name:"recalls",                
        data () {
		return {
            /* Устанавливаем индекс слайда по умолчанию */
            slideIndex: 1,
            sliderAllCount: 0,				
            recalls: [
                {title:'ООО "Кадастр-Лайн"', content:' Мы работаем с "Инфокон" очень давно и полностью удовлетворены качеством предоставляемых бухгалтерских услуг. Все отчеты сдаются вовремя и без ошибок, что подтверждает надежность и квалификацию их специалистов. '}, 
                {title:'ООО "Навиком"', content:' Наша компания полностью удовлетворена работой компании "Инфокон". Хочется отметить высокий уровень предоставляемых услуг, индивидуальное сопровождение, оперативное, грамотное консультирование, лояльное отношение к клиентам.'}, 
                {title:'ОАО "Улан-Удэнский авиационный завод"', content:' С "ИНФОКОН" работаем на протяжении нескольких лет, услуги по изготовлению ЭЦП оказываются оперативно и качественно. Бухгалтерские документы предоставляются своевременно, а также работает техническая поддержка. Радует привлекательная ценовая политика и клиентоориентированность менеджеров организации.  '}
                ]
		    }
	    },
        methods:{
            initSlider: function () {
			// Получаем элементы слайдера и его слайдов
            let sliderBody = this.$el.querySelector('.js-slider')
            let slides = sliderBody.querySelectorAll('.js-slide')            
                    // Общее количество слайдов
            this.sliderAllCount = slides.length
            for (let slide of slides) {
                    slide.style.display = "none";
                }
                slides[0].style.display = "block"; 
            },
             /* Функция перелистывания */
            showSlides: function (n) {
                //let i;
                let slides = document.getElementsByClassName("js-slide");
                
                if (n > this.sliderAllCount) {
                this.slideIndex = 1
                }
                if (n < 1) {
                    this.slideIndex = this.sliderAllCount
                }            
            /* Проходим по каждому слайду в цикле for */
                for (let slide of slides) {
                    slide.style.display = "none";
                } 
                slides[this.slideIndex - 1].style.display = "block";
        
                 
            },   

            /* Увеличиваем индекс на 1 — показываем следующий слайд*/
             nextSlide: function() {
                this.showSlides(this.slideIndex += 1);                
            },

            /* Уменьшает индекс на 1 — показываем предыдущий слайд*/
            previousSlide: function () {
                this.showSlides(this.slideIndex -= 1);  
            },

            /* Устанавливаем текущий слайд */
            currentSlide: function (n) {
                this.showSlides(this.slideIndex = n);
            }
           
        },
        mounted(){
            this.initSlider()
            
            
            
        console.log('mounted');
        }
	
	
    }    
</script>
<style>
.slider {
	width: 100%;
	height: 300px;
	position: relative;
	overflow: hidden;
    margin: 20px 0px;
}
.slider__body {
		min-width: auto;
		height: 300px;		
		position: relative;		
		transition: all .5s ease;
	}
	
.slider__slide {
		min-width: 100%;
		height: 300px;
		background-size: cover;
		background-position: center;		
        position: absolute;
        transition: 0.8s ease;
        animation-name: fade;
        animation-duration: 1.5s;
	}
@keyframes fade {
    from {
        opacity: 0.4
    }
    to {
        opacity: 1
    }
}

</style>