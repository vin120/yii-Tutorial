�}�� 
 m>  '���
p�̓qw
���:�G�	�ֵ�F8k���E�G���F:i��.,��bE>�;6��oz���+RIs�����Ad�(`��l�m�G��J�[}���0a�?��8n�93�'qV�Q�Yi
$2�(?��ZL�1kn���}��j1��n�%^�7k���9�[��' �?$Wzp@w<�S ��a��ِ�u��W�H	M�c������:q����5"��A�#��Z��k���Ć>	�ܳ(w'���k�~i���C5���XL�&e������K������t+{��#C�ڍ�(
�~���`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>ss CExceptionEvent extends CEvent
{
	/**
	 * @var CException the exception that this event is about.
	 */
	public $exception;

	/**
	 * Constructor.
	 * @param mixed $sender sender of the event
	 * @param CException $exception the exception
	 */
	public function __construct($sender,$exception)
	{
		$this->exception=$exception;
		parent::__construct($sender);
	}
}