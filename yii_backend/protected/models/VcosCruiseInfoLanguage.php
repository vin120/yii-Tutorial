<?php

/**
 * This is the model class for table "vcos_cruise_info_language".
 *
 * The followings are the available columns in table 'vcos_cruise_info_language':
 * @property string $id
 * @property string $info_id
 * @property string $iso
 * @property string $cruise_info
 */
class VcosCruiseInfoLanguage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return VcosCruiseInfoLanguage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vcos_cruise_info_language';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('info_id, iso, cruise_info', 'required'),
			array('info_id', 'length', 'max'=>10),
			array('iso', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, info_id, iso, cruise_info', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'info_id' => 'Info',
			'iso' => 'Iso',
			'cruise_info' => 'Cruise Info',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('info_id',$this->info_id,true);
		$criteria->compare('iso',$this->iso,true);
		$criteria->compare('cruise_info',$this->cruise_info,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}