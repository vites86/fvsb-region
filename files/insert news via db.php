
mysql -uvites -p30041986
use msac;
select id from news;

INSERT INTO news(id, title, short_name, meta_d, meta_k, description, author, img, text_, date_ ) 
VALUES 
(12, 
'Запрошуємо на ТПА',
'tpa2017',
'Запрошуємо на технічну поясову атестацію 23.12.2017',
'технічна поясова атестація,msac', 
'Техніна поясова атестація планується <b>23.12.2017</b> року (адреса проведення буде доведена пізніше, залежить від кількості учасників).', 
'Адміністратор', 
'img/news/12.png', 
'<div id="news" style="font-size:14px"><br>
<div>
<p>
Технічна поясова атестація буде проводитись по розділу "Бойового двоборства" на базі "Київської обласної федерації військово-спортивних багатоборств" 
з атестуванням на коричневий пояс 1-го ступеню включно (Голова комісії - Пристінський Олександр Васильович чорний пояс 3-й дан ВСБ).
</p><br>
</div>
<div><p>Запрошуються усі спортсмени відокремлених підрозділів <a href="http://fvsb.com.ua/">Всеукраїнської федерації Військово-спортивних багатоборств</a>!</p><br></div>
<div><p>Попередні заявки подавати на fvsb_kiev@ukr.net</p></div>
<div><p>Довідки за телефоном (097) 405-31-93 (Пристінський Олександр Васильович) або (093) 829 87 91 (Дубровін Віктор Михайлович)</p><br></div>
<div><p><a href="/files/International_state_2017.docx">Міжнародне положення ТПА 2017 року</a></p><br></div>
<div><p><a href="/files/Attestation_programm_2017.docx">Атестаційна програма</a></p><br></div>
<div><p><a href="/files/Anketa.docx">Заява-анкета учасника</a></p><br></div>
<p></p>
<p></p><br>
<hr><br><br>
<div style="width:100%; text-align:center">
<div style="font-size:18px"><span>Відео "Програма боротьби"</span></div><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/y-INiwoMhTA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe><br><br><br>
</div>        
<div style="width:100%; text-align:center">
<div style="font-size:18px"><span>Відео "Програма ударної техніки"</span></div><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/qIZp6Crh3XY" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe><br><br><br>
</div>
</div>', 
NOW());