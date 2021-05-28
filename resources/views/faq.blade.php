@extends('layouts.main')
@section('content')
<section class="faq" id="app">
    <div class="container"> 
    <h1>Частые вопросы</h1>       
        <div class="row">            
            <div class="col-auto col-sm col-md col-lg mt-4">
                <ul class="faq__list">
                    <li class="faq__li">
                        <div class="faq__item">
                            <div class="faq__question">Какие документы нужны для получения электронной подписи (ЭП)?</div>
                            <div class="faq__content">
                                <ul>
                                    <li>
                                        <strong>Для руководителя организации (РФ):</strong> 
                                        паспорт, СНИЛС, печать, Выписку из ЕГРЮЛ мы получаем автоматически через СМЭВ
                                    </li>
                                    <li>
                                        <strong>Для сотрудника организации (РФ):</strong> 
                                        паспорт , СНИЛС, Заявление, подписанное руководителем организации (РФ)
                                    </li>
                                    <li>
                                        <strong>Для физического лица / Индивидуального предпринимателя:</strong>
                                        паспорт, СНИЛС, ИНН
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__li">                 
                        <div class="faq__item">
                            <div class="faq__question">Где я ещё могу использовать квалифицированную электронную подпись?</div>
                            <div class="faq__content">
                                <ul>Список сайтов где применяется квалифицированная ЭП, не содержащая платный объектный идентификатор 
                                    <a href="https://ekey.ru/poleznye-materialy/spisok-ploshchadok/">здесь</a>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__li">
                        <div class="faq__item">
                            <div class="faq__question">Можно ли получить услугу получения электронной подписи удалённо?</div>
                            <div class="faq__content">
                                <ul>
                                    Нет нельзя, законодательство не предусматривает удалённое получение электронной подписи 
                                    или получение ЭП по доверенности. Необходим личный визит в офис.
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__li">
                        <div class="faq__item">
                            <div class="faq__question">
                                Как внести изменения в сертификат ЭП (сменился юридический адрес, 
                                директор, название, ФИО ответственного лица)?
                            </div>
                            <div class="faq__content">
                                <ul>
                                    Внести изменение в сертификат невозможно. В случае изменения данных 
                                    владельца необходимо обратиться в наш офис(Сахьяновой, 3) и выпустить новый сертификат.
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__li">
                        <div class="faq__item">
                            <div class="faq__question">Какие требования к рабочему месту при использовании электронной подписи?</div>
                            <div class="faq__content">
                                <ul>
                                    <li>OC Windows не ниже Windows7;</li>
                                    <li>Установленное на рабочий компьютер средство криптографической защиты информации (СКЗИ) КриптоПро CSP 4.0;</li>
                                    <li>Установленный на рабочий компьютер плагин КриптоПро ЭЦП Browser plug-in</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__li">
                        <div class="faq__item">
                            <div class="faq__question">Где скачать корневые сертификаты удостоверяющего центра?</div>
                            <div class="faq__content">
                                <ul>
                                    Корневые сертификаты можно скачать на Портале уполномоченного 
                                    федерального органа в области использования электронной подписи По ссылке 
                                    <a href="https://e-trust.gosuslugi.ru/#/portal/mainca">
                                        Портал УФО
                                    </a>
                                    Либо В подразделе 
                                    <a href="https://ekey.ru/poleznye-materialy/kornevye-sertifikaty-udostoveryayushchego-tsentra">
                                        Корневые сертификаты
                                    </a> 
                                    раздела 
                                    <a href="https://ekey.ru/poleznye-materialy/">
                                        Полезные материалы
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
               
                    
            
        </div>
        
    </div>    
</section>
@endsection
@section('scripts')      
    <link rel="stylesheet" href="{{ asset("css/faq.css") }}"
@endsection