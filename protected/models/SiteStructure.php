<?php

/**
 * This is the model class for table "site_structure".
 *
 * The followings are the available columns in table 'site_structure':
 * @property string $id
 * @property string $root
 * @property string $lft
 * @property string $rgt
 * @property integer $level
 * @property string $name
 */
class SiteStructure extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SiteStructure the static model class
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
		return 'site_structure';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
                
                return array(
                    array('name','required'),
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
			'root' => 'Root',
			'lft' => 'Lft',
			'rgt' => 'Rgt',
			'level' => 'Level',
                        'name' => 'Name'
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
		$criteria->compare('root',$this->root,true);
		$criteria->compare('lft',$this->lft,true);
		$criteria->compare('rgt',$this->rgt,true);
		$criteria->compare('level',$this->level);
                $criteria->compare('name',$this->name);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function behaviors(){
            return array(
                'NestedSetBehavior'=>array(
                    'class'=>'ext.nested-set-behavior.NestedSetBehavior',
                    'leftAttribute'=>'lft',
                    'rightAttribute'=>'rgt',
                    'levelAttribute'=>'level',
                    'rootAttribute' =>'root',
                    'hasManyRoots' =>'true',
                    'idAttribute' => 'id'
            ));
        }
}