<?php

/**
 * This is the model class for table "vcos_strategy_country_language".
 *
 * The followings are the available columns in table 'vcos_strategy_country_language':
 * @property integer $id
 * @property integer $country_id
 * @property string $country_name
 * @property string $iso
 */
class VcosStrategyCountryLanguage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return VcosStrategyCountryLanguage the static model class
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
		return 'vcos_strategy_country_language';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country_id', 'numerical', 'integerOnly'=>true),
			array('country_name', 'length', 'max'=>255),
			array('iso', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, country_id, country_name, iso', 'safe', 'on'=>'search'),
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
			'country_id' => 'Country',
			'country_name' => 'Country Name',
			'iso' => 'Iso',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('country_name',$this->country_name,true);
		$criteria->compare('iso',$this->iso,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}