# BrawlPHPSDK
PHP SDK FOR BRAWL API 

Я не нашел подобного на PHP, так что решил написать самостоятельно. 

# Использование BrawlPHPSDK
1)  Нужно подключить SDK.
	```php
	require('BrawlAPI.class.php');
	```
2)  Подключаем класс
	```php
  	$token = 'YouToken';
	$brawl = new BrawlApi($token);
	```
3)  Вызываем методы
  1. Игроки
      1. Получаем информацию о игроке по тегу
      ```php
      echo $brawl->players('#G2PG8Q0G');
      ```
      2. Получаем Battle Log (Последние игры) игрока по тегу
      ```php
      echo $brawl->BattleLog('#23988UQJ92Q');
      ```
  2. Клубы
      1. Получаем информацию о клубе по тегу
      ```php
      echo $brawl->clubs('#9PCPY080');
      ```
      2. Получаем участников клуба по тегу
      ```php
      echo $brawl->clubsMembers('#9PCPY080');
      ```
  3. Бравлеры
      1. Получаем информацию о бравлерах
      ```php
      echo $brawl->brawlers();
      ```
      2. Получаем участников бравлерах по BrawlerId
      ```php
      echo $brawl->brawlersId('BrawlId');
      ```
  4. Эвенты
      1. Ротация событий
      ```php
      echo $brawl->EventsRotation();
      ```
