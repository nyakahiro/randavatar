<?php

class PluginRandavatar_ModuleUser extends PluginRandavatar_Inherit_ModuleUser
{

	public function Init()
	{
		parent::Init();
	}

    public function UploadRandAvatar($sPluginPath, $oUser)
    {

        if(!@getimagesize($sPluginPath)) {						//	Проверка, соответствие файла изображению
            return ModuleImage::UPLOAD_IMAGE_ERROR_TYPE;
        }
      
        $oFile=fopen($sPluginPath,'r');							//	Открываем файл 
        if(!$oFile) {											//	* 	Проверяем размер
            return ModuleImage::UPLOAD_IMAGE_ERROR_READ;
        }

        $iSizeKb=0;												
        $sContent='';
        while (!feof($oFile)) {									//  Выгружаем
            $sContent.=fread($oFile ,1024*1);
        }
        
        if(!feof($oFile)) {										//	Проверка на ошибку недопустимо размера
            return ModuleImage::UPLOAD_IMAGE_ERROR_SIZE;
        }
        fclose($oFile);
        
        $sFileTmp=Config::Get('sys.cache.dir').func_generator();	//	Создаем tmp, для временного содержания изображения

        $fp=fopen($sFileTmp,'w');
        fwrite($fp,$sContent);
        fclose($fp);
		
        $sFileRanda =  $this->UploadAvatar($sFileTmp, $oUser);		// 	Передаем изображение
        $oUser->setProfileAvatar($sFileRanda);
        $this->Update($oUser);
        return $sFileRanda;
    }
}

?>
