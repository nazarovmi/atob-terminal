<?php

use App\Notice;
use Illuminate\Database\Seeder;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notices')->delete();

        Notice::create([
			'date' => date('Y-m-d'),
			'data' => '{"groups":[{"name":"notices","items":[{"fields":[{"name":"title","type":0,"text":"Объявление #1","html":"Объявление #1"},{"name":"text","type":1,"text":"Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации систем массового участия. С другой стороны начало повседневной работы по формированию позиции требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.","html":"Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации систем массового участия. С другой стороны начало повседневной работы по формированию позиции требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."}]},{"fields":[{"name":"title","type":0,"text":"Объявление #2","html":"Объявление #2"},{"name":"text","type":1,"text":"Товарищи! дальнейшее развитие различных форм деятельности способствует подготовки и реализации соответствующий условий активизации. Не следует, однако забывать, что консультация с широким активом требуют определения и уточнения новых предложений. Товарищи! новая модель организационной деятельности требуют определения и уточнения систем массового участия. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание направлений прогрессивного развития. Не следует, однако забывать, что сложившаяся структура организации в значительной степени обуславливает создание систем массового участия.\n\nТоварищи! новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития. Не следует, однако забывать, что новая модель организационной деятельности позволяет оценить значение модели развития.","html":"Товарищи! дальнейшее развитие различных форм деятельности способствует подготовки и реализации соответствующий условий активизации. Не следует, однако забывать, что консультация с широким активом требуют определения и уточнения новых предложений. Товарищи! новая модель организационной деятельности требуют определения и уточнения систем массового участия. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание направлений прогрессивного развития. Не следует, однако забывать, что сложившаяся структура организации в значительной степени обуславливает создание систем массового участия.<br/><br/>Товарищи! новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития. Не следует, однако забывать, что новая модель организационной деятельности позволяет оценить значение модели развития."}]},{"fields":[{"name":"title","type":0,"text":"Объявление #3","html":"Объявление #3"},{"name":"text","type":1,"text":"Повседневная практика показывает, что реализация намеченных плановых заданий позволяет оценить значение модели развития. Равным образом укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.\n\nТаким образом новая модель организационной деятельности требуют определения и уточнения систем массового участия. Равным образом постоянный количественный рост и сфера нашей активности требуют от нас анализа соответствующий условий активизации. Таким образом постоянный количественный рост и сфера нашей активности требуют определения и уточнения модели развития. Равным образом начало повседневной работы по формированию позиции способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям.","html":"Повседневная практика показывает, что реализация намеченных плановых заданий позволяет оценить значение модели развития. Равным образом укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.<br/><br/>Таким образом новая модель организационной деятельности требуют определения и уточнения систем массового участия. Равным образом постоянный количественный рост и сфера нашей активности требуют от нас анализа соответствующий условий активизации. Таким образом постоянный количественный рост и сфера нашей активности требуют определения и уточнения модели развития. Равным образом начало повседневной работы по формированию позиции способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям."}]}]}]}'
		]);
    }
}
