<!DOCTYPE html>
<html lang="ru">
  <head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bariant 9</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Nova+Square&display=swap" rel="stylesheet">
<?php wp_head(  )?>
</head>
  <body>
  <?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
    <div class="block">
    <nav>
      <ul>
        <li><button class="musia" onclick="playPlaylist()" ><img class="button img" src="http://project/wp-content/uploads/2023/12/free-icon-music-5577489.png" alt="my ico"></button></li>
        <li><a href="https://www.youtube.com/watch?v=0zfpAXsmNV4">Z</a></li>
        <li><a href="Game.html">X</a></li>
        <li><a href="https://www.youtube.com/watch?v=Y1fLvJ_UUfo">C</a></li>
      </ul> 
    </nav>
    </div>
  <div>
    <img class="ko" src="http://project/wp-content/uploads/2023/12/avatars-lUy4D8ao1WQKXePb-uw3CnQ-t500x500.jpg" style="float: left; margin-right: 10px;" alt="MY GYL">
    <div class="por" >Shadowraze & Shadow Fiend Bo$$</div>
    <img class="ka" src="http://project/wp-content/uploads/2023/12/scale_1200.png" style="float: right; margin-left: 10px;" alt="MY GYL">
    </div>
    
    <h2 class="zagol">Фонк</h2>
    <p class="text">Данный сайт посвещен жанру музыки "Фонк".</p>
    <p class="text">Часто фонк определяется как «музыка поколения Z», первыми этот стиль начали использовать мемфисские артисты<br> DJ Paul, X-Raided, Phonk Beta, Tommy Wright III и коллектив Three 6 Mafia. Первая волна фонка утихла в конце 2000-х, но уже в начале 2010-х стиль<br> пережил возрождение. Слово «фонк» стало популярным благодаря SpaceGhostPurrp, выпустившему треки «Pheel Tha Phonk», «Bringin' Tha Phonk»,<br> и «Keep Bringin' Tha Phonk». YouTube-каналы, в особенности Sad Soundcloud, TrillPhonk, также сыграли большую роль в популяризации фонка.                          
      <br>На протяжении нескольких лет фонк перемещался на SoundCloud. </p>
    <div ><button class="knop" onclick="window.open('https://ru.wikipedia.org/wiki/Фонк', '_blank')">HISTORY</button></div>
    <div class="por" >«Токийский гуль» — манга в жанре тёмного фэнтези</div>
<br><br><br><br><br>
<div>
  <img class="ko" src="http://project/wp-content/uploads/2023/12/images.jpg" style="float: left; margin-right: 10px;" alt="MY GYL">
  <img class="ka" src="http://project/wp-content/uploads/2023/12/8948.jpg" style="float: right; margin-left: 10px; margin-top: -100px;" alt="MY GYL">
  <h2 class="zagol">Тематика ZXC</h2>
  <p class="text">Как отличить настоящего zxc от позёра.</p>
  <p class="text">Настоящие zxc-гули и zxс — дед инсайды презирают тех, кто не играл в первую Dota, так как они якобы не знают<br> изначального значения комбинации букв.
    Как отличить настоящего zxc от позёра
    Буквенное сочетание быстро разошлось по Сети, перестав<br> ассоциироваться с геймерами. Гули и дед инсайды, не играющие в Dota, всё так же ходят в чёрных масках, которые закрывают половину лица,<br> и ставят на аватарки котов. Они сделали zxc аббревиатурой, которая ассоциируется с грустью. </p>
    <div ><button class="knop" onclick="window.open('https://gameinside.ua/news/skolko-budet-1000-7-chto-oznachaet-zxc-i-pochemu-eto-tak-ljubyat-v-dota-2/284722/', '_blank')">Shadow Fiend</button></div>
    <form class="cid">
      <input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Search" autofocus> 
      <input class="button_for_search" type="submit" onclick="javascript: FindOnPage('text-to-find',true); return false;" value=" " title="Начать поиск">
    </form>
    <br><br><br><br><br>
<img class="img3" src="http://project/wp-content/uploads/2023/12/загружено1.jpg" alt="MY GYL">
<h2 class="text5" >Прородитель</h2>
<p class="text6">Довольно популярное аниме «Токийский гуль» рассказывает нам о студенте Кене Канеки, который становится наполовину гулем, монстром,<br> питающимся человечиной. В одной из серий первого сезона Якумо Оомори, также известный как Джейсон, пытал Канеки,<br> а параллельно заставлял считать.<br> Сначала «1000 — 7», затем – ещё минус 7, потом – ещё минус 7.</p>
<div ><button class="knop" onclick="window.open('https://proslo.ru/chto-takoe-1000-7/', '_blank')">Birthday</button></div>    
<br><br><br><br><br><br><br><br><br><br>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="smallpost">
        <div class="text35">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="400" height="225">
        <?php endif; ?>
    </div>
<?php endwhile; endif; ?>
<hr>

<br><br><br><br><br>
<div class="IMAGES">
  <p class = "imgtext ">
    1. ты не клоун. если ты ставишь себе на аву гуля, спамишь zxczxczcxczcxzxc, ставишь паузы после каждого кила без причин и просто позер - то это не значит, что ты гуль, и права называть себя им не имеешь
    2. тебе должно быть пoxyй. ты аморал, без нравственных качеств. тебя послали нaxyй, сказали что ты бездарь? не позорься, не оправдывайся, не отвечай, хочешь доказать - докажи на деле, уничтожь в zxc, ты не терпила, ты не тратишь свое время. ты обещал разбить вещи? бей их, встань в амулет, отвечай за слова
    3. не выeбывaйcя. у тебя 3к птс и ты пuздuшь что смурф? закрой рот, это твой ммр, ты играешь на победу и не присваивай себе заслуг, которых не добился. тебе никто ничего не обязан и ты тоже. если ты ломаешь вещи из за того, что тебе не пикнули саппорта - ты нытик, ты не гуль
    4. каждый гуль должен хотя бы знать что такое zxc, а тем более уметь там постоять за себя. если для мужчин нормальна случайность обменяться кулаками с другим мужчиной, то так же норма для гуля ответить или заставить ответить за слова в zxc. не будь тряпкой, ты сильнее
    5. сосредотачивайся на игре, zitraks mod. твоя главная цель победить, ты должен уметь давать all mute, справляться с тильтом и выигрывать непобедимое. враги должны бояться гулей, а не смеяться с рейдж бб нытика</p>
  <p class = "imgtext ">
    6. если ты достоин называться гулем, то ты априоре ставишь себя выше остальных. если ты уверен в себе, то забирай роль, фпшь героя, твоя игра - твои правила, но не руинь, пока не заруинили тебе. пикнули дабл мид? иди на сфе в лес и тащи соло, не забудь поставить паузу при смерти yeбaнa и потапать на него, насмехайся над ними, но не становись посмешищем, выигрывай все игры, если команда сама не захотела или не заслужила поражения, выбор твой
    7. all chat для тебя не существует, зачем тебе писать врагам что то, кроме "?" после убийств и ")" после падения трона?
    8. убил мидера на фб? f9 + ?. у врага падает трон? ")" в all chat, но не больше, ты не clown.
    9. гули нормальные, ты не токсик свинья и позер, ты нормальный, порофли с тимой если хочешь, хорошо общайся со своими ребятами если нужно, уважай тех, кто действительно этого достоин.
    10. ЧСВ - положительное качество, ты сильнее и лучше всех, НО ты должен это оправдывать
    11. будь верен своим идеалам. тебе не обязательно иметь гуля на аве, к чему это, поставь лил пипа или гослинга если хочешь, держись идеалов, но твой ник не должен быть отвратительным
    12. никогда не пиши заглавными буквами. пиши размеренно и по правилам, не будь быдлом, ведь это низко
    13. запомни в последний раз, ты не клоун, не позер и не нытик. ты - гуль, не позорься и не строй из себя не пойми что
    14. соблюдай все правила, либо ты не гуль</p></div>
    <br><br><br><br><br>
    <hr>
    <a href="#" class="scrollup">Наверх</a>
  </div>
 
  <?php wp_footer(  )?>
  </body>
    </html>