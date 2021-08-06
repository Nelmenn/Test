<?php
namespace app\models;
use yii\base\Model;
 
class SignupForm extends Model{
    
    public $username;
    public $password;
    
    public function rules() {
        return [
            [['username', 'password'], 'required', 'message' => 'Заполните поле'],
        ];
    }
    
    public function attributeLabels() {
        return [
            'username' => 'Login',
            'password' => 'Password',
        ];
    }
    
        public function actionSignup(){
     if (!Yii::$app->user->isGuest) {
     return $this->goHome();
     }
     $model = new SignupForm();
     if($model->load(\Yii::$app->request->post()) && $model->validate()){
     echo '<pre>'; print_r($model);
     die;
     }

     return $this->render('signup', compact('model'));
    }
}
?>