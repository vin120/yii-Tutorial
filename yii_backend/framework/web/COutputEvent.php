�}�� 
 �>  ��+�*I��qw
��%�:؇�Sױ�F�@�/A_�vq���	�Oxr�����EI��n���î�ߊ�==�Tn�b��,`�Ch}�^9����&'���g"u�zӔQޓK҉���U8�3��K�(�C
r16!i$-�d��HeG6�h�9��(��f������k[�t���v2n��4����?ʐ4j$�Y�3�@�9a�$������x���^^y?Մ�L�(|�];򈁞D4���{�(��!7�t�@�H���S�%:����D,�&���8���	�5q�@H���<H�����L0�%�bU�o/Į��๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>Z qiang.xue $
 * @package system.web
 * @since 1.0
 */
class COutputEvent extends CEvent
{
	/**
	 * @var string the output to be processed. The processed output should be stored back to this property.
	 */
	public $output;

	/**
	 * Constructor.
	 * @param mixed $sender sender of the event
	 * @param string $output the output to be processed
	 */
	public function __construct($sender,$output)
	{
		parent::__construct($sender);
		$this->output=$output;
	}
}
