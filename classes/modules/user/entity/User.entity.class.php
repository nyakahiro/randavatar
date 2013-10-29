<?php
class PluginRandavatar_ModuleUser_EntityUser extends PluginRandavatar_Inherit_ModuleUser_EntityUser {
    public function getProfileAvatarPath($iSize=100) {
        if(!$sPath=$this->getProfileAvatar()){
        	
			if((Config::Get('plugin.randavatar.gender'))) {
				$sRandPath = Plugin::GetWebPath('randavatar').'imgs/'.(Config::Get('plugin.randavatar.theme')).'/'.($this->getProfileSex()=='woman' ? 'f' : 'm').'_'.rand(1,(Config::Get('plugin.randavatar.number'))).
	            '.'.(Config::Get('plugin.randavatar.extension'));	            
			}else{
				$sRandPath = Plugin::GetWebPath('randavatar').'imgs/'.(Config::Get('plugin.randavatar.theme')).'/'.rand(1,(Config::Get('plugin.randavatar.number'))).'.'.(Config::Get('plugin.randavatar.extension'));
			}
			
            if ($sPath = $this->User_UploadRandAvatar($sRandPath, $this)){
                return str_replace('_100x100',(($iSize==0)?"":"_{$iSize}x{$iSize}"),$sPath."?".date('His',strtotime($this->getProfileDate())));
            }
            return $sRandPath;
        }else{
            return str_replace('_100x100',(($iSize==0)?"":"_{$iSize}x{$iSize}"),$sPath."?".date('His',strtotime($this->getProfileDate())));
    	}
    }
}
?>