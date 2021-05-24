<template>
    <div class="wrapper">
        <section class="main-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <h1>Вам нужна ЭЦП?</h1>
                        <ul>
                            <li>Подпись для ФНС и Госуслуг от 1000 руб.</li>
                            <li>Подпись для Росреестра от 2200 руб.</li>
                            <li>Подпись для ЕГАИС от 2000</li>
                            <li>Подпись для ликвидации ООО от 1800</li>                         
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <h1>Вы участвуете в электронных торгах?</h1>
                        <ul>
                            <li>Подпись для участия в торгах на гос площадках от 4000 руб.</li>
                            <li>Подпись для любых государственных и коммерческих площадок</li>
                            <li>Таких как Сбербанк АСТ, ЗаказРФ, Росэлторг, РТС-Тендер и многие другие </li>                    
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="main-banner__about">
                            <ul>
                                <li>
                                    <div class="media">
                                        <img class="mr-3" src="/img/icons/icon-time-orange.png" alt="">
                                        <div class="media-body">Изготовление в течении 30 минут</div>
                                    </div>                                
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="mr-3" src="/img/icons/icon-setting-orange.png" alt="">
                                        <div class="media-body">Настраиваем рабочее место</div>
                                    </div>                                
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="mr-3" src="/img/icons/icon-documents-orange.png" alt="">
                                        <div class="media-body">Минимальный пакет документов</div>
                                    </div>                                
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="mr-3" src="/img/icons/icon-cool-orange.png" alt="">
                                        <div class="media-body">Мы делаем ключи для бизнеса более 10 лет</div>
                                    </div>                                
                                </li>
                            </ul>
                        </div>
                    </div>          
                    
                </div>
                
            </div>
        </section>
        <section class="order-form" id="app">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto order-form__description">
                        <h4>Что нужно для получения подписи?</h4>
                        <ul>
                            <li>Паспорт</li>                        
                            <li>СНИЛС</li>
                            <li>Печать(для ЮЛ и ИП)</li>
                            <li>Носитель электронной подписи</li>
                        </ul>               
                    </div>                    
                    <order></order>                      
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <h2>Предоставляем широкий спектр услуг в сфере консалтинга</h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img class="features__icon" src="/img/icons/icon-certificate.png" alt="">                    
                        <h3>Электронные подписи</h3>
                        <p>Большой выбор электронных подписей, для любых площадок и сервисов</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img class="features__icon" src="/img/icons/icon-EO.png" alt="">                    
                        <h3>Электронная отчетность</h3>
                        <p>Во все госорганы: подготовка, проверка, анализ и сдача отчетности, сверка расчетов с бюджетом, переписка с инспекторами</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img class="features__icon" src="/img/icons/icon-buh.png" alt="">                    
                        <h3>Бухгалтерский аутсорсинг</h3>
                        <p>Любые виды бухгалтерских услуг от консультаций до комплексного обслуживания</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img class="features__icon" src="/img/icons/icon-kassa.png" alt="">                    
                        <h3>Онлайн кассы</h3>
                        <p>Большой выбор онлайн касс, фискальных накопителей и ОФД</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img class="features__icon" src="/img/icons/icon-egais.png" alt="">                    
                        <h3>ЕГАИС</h3>
                        <p>Подключение и настройка ЕГАИС для розничных продавцов алкоголя</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img class="features__icon" src="/img/icons/icon-support.png" alt="">                    
                        <h3>Техническая поддержка</h3>
                        <p>Тех. поддержка по всем предоставляемым нами продуктам и услугам</p>
                    </div>
                </div>
            </div> 
        </section>
        <section class="recalls container-fluid" id="recalls-app">
            <div class="container">            
                <recalls></recalls>                    
            </div>
        </section>
    </div> 
</template>
<script>
import order from './OrderComponent.vue';
import recalls from './RecallsComponent.vue';
export default {
    name: "index",
    components: {
            order,
            recalls
        },
}
</script>