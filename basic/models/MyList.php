<?php
namespace app\models;

class MyList extends \yii\db\ActiveRecord{
	public function rules()
	{
		return [
			[['title','description'],'required'],
		];
	}

	public static function tableName()
	{
		return 'list';
	}

	public static function getAll()
	{
		$data = self::find()
			->all();
			return $data;
	}

	public static function getOne($id)
	{
		$data = self::find()
			->where(['id' => $id])
			->one();
			return $data;
	}
}
?>