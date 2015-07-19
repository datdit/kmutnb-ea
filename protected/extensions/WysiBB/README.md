<h1>Yii-WysiBB</h1><br />
<h3>WysiBB редактор для Yii framework(Yii-WysiBB).</h3><br />
<h5>Ver 1.0.0.1</h5><br />
<p>
<b>Основные возможности:</b><br />
<ul>
	<li>Определение нужных кнопок редактора.</li>
	<li>Возможность работать из коробки.</li>
	<li>Незачем создавать заменяемую форму, расширение само его создаёт при вызове.</li>
	<li>Поддержка activeForm.</li>
	<li>В DEBUG режиме используется полная версия скрипта, а при выключении DEBUG режима используется min версия.</li>
	<li>Возможность редактирования как в режиме <b>bbcode</b>, так и визуально.
	</li>
</ul>
<b>Предстоит доработать:</b><br />
<ul>
	<li>Вынос смайликов в папку ресурсов, т.к. сейчас папка smiles лежит в root/images/, но к сожалению это пока что откладывается, т.к. смайлы прописываются в скрипте самого редактора и относительные пути невозможно прописать.</li>
	<li>Сохранение изображений на сервер, при добавлении через модальное окно.</li>
	<li>Дополнительные настройки, такие как: ширина и т.п.</li>
</ul>
<b>Хотите попробовать? Расширение на GitHub</b> <a href="https://github.com/brussens/Yii-WysiBB">тут</a><br />
<b>FAQ:</b><br />
<ul>
	<li>Распакуйте расширение в <b>/protected/extensions/</b><br />
	<li>Для вызова виджета используйте код<br />
	<dl>
		<dd>
			<code>
				$this->widget('application.extensions.wysibb.WysiBBWidget', array(<br />
					'model'=>$model,//модель (если вы используете activeForm)<br />
					'attribute'=>'text',//название атрибута<br />
					'buttons'=>'bold,italic,underline,|,img,|',//набор кнопок, где bold, italic, underline - нужные кнопки, <br />
					а | - разграничитель.<br />
					//'selector'=>'#ArticleForm_text', //заменяемый селетор(определяется по умолчанию).<br />
				));
			</code>
		</dd>
	</dl><br />
	<li><b>buttons</b> можно и не передавать, тогда будет использован стандартный набор из всех кнопок.<br />
</ul>
<b>Есть вопросы? Задавайте их тут:</b><br />
<ul>
	<li><a href="http://yiiframework.ru/forum/viewtopic.php?f=9&amp;t=9267">Yii framework по-русски!</a></li>
	<li><a href="http://www.wysibb.com/forum/viewtopic.php?f=4&amp;t=356&amp;p=781#p781">WysiBB.com</a></li>
</ul>
</p>