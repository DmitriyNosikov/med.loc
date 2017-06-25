<?php

namespace Deimon;

/*
* Класс для подключения JS и CSS файлов из папки blocks
* @param {array} $blocknames - Названия блоков из папки blocks, которые необходимо подключить
* @param {bool} $minfiles - Если true - подключает только минифицированные файлы, иначе - не минифицированные
*/
class SourceFiles
{
	private static $blocksDir = "/local/blocks/";
	private static $js = array();
	private static $css = array();

	public static function load($blocknames, $minfiles=false)
	{
		if($minfiles)
		{
			$jsPattern = "/\.min\.js/";
			$cssPattern = "/\.min\.css$/";
		}
		else
		{
			$jsPattern = "/\.js/";
			$cssPattern = "/\.css$/";
		}

		if(!is_array($blocknames)) $blocknames = array($blocknames);
		if(empty($blocknames)) return false;

		//Получаем файлы в директории блока
		foreach($blocknames as $blockname)
		{
			if(is_dir($_SERVER["DOCUMENT_ROOT"].self::$blocksDir.$blockname))
			{
				$filesInDir = scandir($_SERVER["DOCUMENT_ROOT"].self::$blocksDir.$blockname);

				if(!empty($filesInDir))
				{
					//Собираем JS и CSS файлы в соответствующие массивы
					foreach($filesInDir as $fileKey => $fileVal)
					{
						if($fileVal == "." || $fileVal == ".." || is_dir($fileVal)) continue;

						if(preg_match($jsPattern, $fileVal)) self::$js[] = $blockname."/".$fileVal;
						if(preg_match($cssPattern, $fileVal)) self::$css[] = $blockname."/".$fileVal;
					}
				}
			}
		}

		//Подключение JS файлов
		while($jsfile = array_shift(self::$js))
		{
			$GLOBALS['APPLICATION']->AddHeadScript(self::$blocksDir.$jsfile);
		}

		//Подключение CSS файлов
		while($cssFile = array_shift(self::$css))
		{
			$GLOBALS['APPLICATION']->SetAdditionalCSS(self::$blocksDir.$cssFile);
		}
	}
}