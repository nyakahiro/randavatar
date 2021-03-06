<?php
									
								/*
								 *  Это не генератор аватарок, а раздатчик аватарок из папки
								 * 
								 *	При создании своих сетов аватарок соблюдай эти простые правила и будет тебе профит. 
								 * 
								 *  Помни аватарки должны быть не менее 100x100 иначе о качестве можно забыть 
								 * 
								 * 
								 * 	Аватарка присваивается только при регистрации и удалении старой аватарки *(!)
								 */	
									
									
$config['theme'] = 'monoface';  	// название папки содержащая аватарки
								/*
								 *  1. Папки аватарок в папке /imgs
								 * 
								 *  2. Примеры гендерных тем: 
								 * 		2.1 advtime  - 10 мужчин и 10 женщин формат .png 
								 * 		2.2 monoface - 57 мужчин и 57 женщин формат .png
								 * 
								 *  3. Пример негендерного использования: 
								 * 		3.1	teddy  - 36 штук - формат .gif
								 * 		3.2 cats   - 97 штук - формат .gif
								 */
								 
 							

 							
$config['extension'] = 'png';  	// расширение файла
								/*
								 *	1. Расширение файлов должно быть одинаковым для всех
								 * 		1.1 Недопускается чтобы файлы были разного расширения
								 * 				например: m_1.png, m_2.jpg
								 * 			1.1.1 В том числе недопускается и разные регистры расширения файлов, будьте внимательны!
								 * 				например: m_1.png, m_2.PNG 
								 * 				  
								 */

								 
								 
$config['gender'] = true; 		// выделять аватарку как мужскую и женскую?
								/*
								 *	1. 'gender' = true -> файлы должны именоваться как m_номер.png (мужчины) и f_номер.png (женщины) 
								 * 			например: m_7.png (для мужчин) и f_7.png (для женщин) 
								 * 		
								 * 		1.1	Количество аватарок должно быть равным между мужчинами и женщинами
								 * 				например: m_1.png ... m_10.png и столько же f_1.png ... f_10.png 
								 * 		1.2 Недолжно быть пропусков между автарками, 
								 * 				например: m_1.png и сразу m_3.png, без m_2.png
								 * 		1.3 файлы именуются так: гендер_номер.png
								 * 				например: m_1.png
								 * 		
								 *  2. 'gender' = false -> файлы должны иметь только цифру и расширение
								 * 			например: 1.png ... 10.png
								 * 		  
								 */


$config['number'] = 57;  		// номер последней аватарки в папке
								/*
								 * 	1. Номер первого файла начинается с 1, не с нуля
								 * 
								 * 	2. Если 'gender' = true
								 * 		=> то это номер приходящееся на определенный пол
								 * 
								 *  3. Если 'gender' = false
								 * 		=> то это число аватарок в папке
								 *   
								 *  4. ОБЯЗАТЕЛЬНО соблюдай нумерацию!
								 */


return $config;
?>