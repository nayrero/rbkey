@extends('layouts.main')
@section('content')
<section class="contacts" id="app">
    <div class="container"> 
    <h1>Где мы находимся</h1>       
        <div class="row">            
            <div class="col-auto col-sm col-md mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.6195297628637!2d107.6221583156667!3d51.813112296125446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5dafdb335bd0172f%3A0xa44e7d12326937a9!2z0J7QntCeINCY0L3RhNC-0LrQvtC9!5e0!3m2!1sru!2sru!4v1620980823039!5m2!1sru!2sru" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-auto col-sm col-md mt-4">
                <div class="contacts__description">
                    <p>Мы находимся по адресу:</p>
                    <div>
                        <p><strong>Главный офис:</strong> Сахьяновой 3, офис 120, 220<br>
                        <strong>Тел:</strong> (3012) 27 75 77 (многоканальный: <br>1 - отдел продаж, 2 - тех. поддержка, 3 - бухгалтерия), 66 58 44</p>
                    </div>
                    <div>
                        <p><strong>Доп. офис:</strong> Ербанова 11(Дом быта), офис 307/5<br>
                        <strong>Тел:</strong> (3012) 21 88 34</p>
                    </div>
                    <div>
                        <p><strong>Доп. офис:</strong> С. Турунтаево, Ленина 98<br>
                        <strong>Тел:</strong> 89247794229</p>
                    </div>
                    <p><strong>Режим работы:</strong></p>

                    <p>Пн-чт с <strong>9:00 до 18:00</strong><br>
                    Пт с <strong>9:00 до 17:00</strong><br>
                    Обед с <strong>12:00 до 13:00</strong><br>
                    Сб-вс – выходные дни</p>
                </div>
            </div>           
            
        </div>
        <div class="row">
            
        </div>
    </div>    
</section>
@endsection
@section('scripts')      
    <script src="{{ asset("js/app.js") }}"></script> 
@endsection