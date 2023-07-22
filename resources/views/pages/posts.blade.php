@extends("layouts.{$layout}")

@section('content')
<div class="container container-240">
    <h1>POST's</h1>
    @if(Session::has('error'))
        <p>{{ Session::get('error') }}</p>
    @endif
    @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>
    @endif
    <form action="/obr" method="POST">
        <input type="text" name="field">
        <button>Отправить</button>
    </form>
</div>
<div class="container container-240">
    <form action="/obr" method="POST">
        <h1>Регистрация</h1>
        <div class="name_reg ">
            <div class="name_item">
                <label for="first_name">Имя:</label>
                <input type="text" name="first_name" id="first_name" class='/#/' placeholder="Введите имя" value='/#/'>
            </div>
            <div class="name_item">
                <label for="last_name">Фамилия:</label>
                <input type="text" name="last_name" id="last_name" class='/#/' placeholder="Введите фамилию" value='/#/'>
            </div>
        </div>
        <div class="gender /#/">
            <h2>Пол</h2>
            <div class="gender_item">
                <!-- checked -->
                <input type="radio" name="gender_i" id="man" value="M">
                <label for="man">Мужской</label>
            </div>
            <div class="gender_item">
                <!-- checked -->
                <input type="radio" name="gender_i" id="woman" value="W">
                <label for="woman">Женский</label>
            </div>
        </div>
        <div class="data">
            <h2>Дата рождения</h2>
            
            <div class="data_wrap">
                <select name="day" class="/#/">
                    <option selected disabled>День</option>
                    <!-- 'selected' -->
                    @for ( $i = 0; $i <= 31; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <div class="data_wrap">
                    <select name="month" class="/#/">
                        <option selected disabled>Месяц</option>
                        <option value="1">Январь</option>
                        <option value="2">Февраль</option>
                        <option value="3">Март</option>
                        <option value="4">Апрель</option>
                        <option value="5">Май</option>
                        <option value="6">Июнь</option>
                        <option value="7">Июль</option>
                        <option value="8">Август</option>
                        <option value="9">Сентябрь</option>
                        <option value="10">Октябрь</option>
                        <option value="11">Ноябрь</option>
                        <option value="12">Декабрь</option>
                    </select>

                    <select name="age" class="/#/">
                        <option value="" selected disabled>Год</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </div>  
            </div>
        </div>
        <div class="interests /#/" >
            <h2>Интересы</h2>
            <div class="interest_item">

                checked

                <input type="checkbox" name="intersting[]" value="A" id="prog">>
                <label for="prog">Програмирование</label>
            </div>
            <div class="interest_item">
                <input type="checkbox" name="intersting[]" value="B" id="prod">
                <label for="prod">Продвижение</label>
            </div>
            <div class="interest_item">
                <input type="checkbox" name="intersting[]" value="C" id="smm">
                <label for="smm">SMM</label>
            </div>
            <div class="interest_item">
                <input type="checkbox" name="intersting[]" value="D" id="ver">
                <label for="ver">Верстка</label>
            </div>
            <div class="interest_item">
                <input type="checkbox" name="intersting[]" value="E" id="diz">

                <label for="diz">Дизайн</label>
            </div>
        </div>
        <div class="about /#/">
            <textarea placeholder="Расскажите о себе"></textarea>
        </div>
        <button >Отправить</button>
    </form>
</div>
@endsection