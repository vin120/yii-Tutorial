�}�� 
 3.  �f�y�ǐ.�qw
��� �:�F�	�ֱ�F:C�@���-�������wK��2WC��`Ӌ�����QO3,�7�D>Ai��HT�����$�H"$�ٷ�x�C(�'և� ��t�.��6.zod%m�t�6.A��s� *̽W��9BV���դvIq�������MV��[t�4jn�*C��V-?k`a���x++�+SK�Bt҃��Sа ���cA��]�F�!n	����f
�p|W+��;Z�/�c��b�`��˧���m�u�����.��~.��&6˴M���5L�	G��`4�'�๒��fV٭��
�ؕ�a+����;�A�."h�p	�����A�SR$3�n�!ʋi������=sh��y�h���Ԑ�!�ZR�>G�X���O͏!ኌ��E{��P(�ʰ?@�,C� G Q_(�i��f�ay����&&[����vKCƱ-pk:� �r+�!��::�)9�a�7@������9�>p 2799 2011-01-01 19:31:13Z qiang.xue $
 * @package system.db.schema.mssql
 * @since 1.0.4
 */
class CMssqlTableSchema extends CDbTableSchema
{
	/**
	 * @var string name of the catalog (database) that this table belongs to.
	 * Defaults to null, meaning no schema (or the current database).
	 */
	public $catalogName;
	/**
	 * @var string name of the schema that this table belongs to.
	 * Defaults to null, meaning no schema (or the current database owner).
	 */
	public $schemaName;
}
