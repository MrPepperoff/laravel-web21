@extends("layouts.{$layout}")

@section('content')

<div class="container container-240">
    <form action="/obr" method="POST" class="two">
        <h1>Registration</h1>
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
                         @for ( $i = 2023; $i >= 1900; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
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