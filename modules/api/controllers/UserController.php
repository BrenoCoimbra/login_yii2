<?php

namespace app\modules\api\controllers;

use app\models\User;
use yii\rest\ActiveController;
use Yii;

/**
 * Default controller for the `api` module
 */
class UserController extends ActiveController
{

    //model da api
    public $modelClass = 'app\models\User';

    public function beforeAction($action)
    {
        return Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    }

    //funcao para cadastrar
    public function actionCadastrar()
    {

        $model = new User();

        if (Yii::$app->request->post()) {
            $post = Yii::$app->request->post();
            //pega os dados enviados via post
            $username = $post['username'];
            $password = $post['password'];

            $passwordCrip = Yii::$app->security->generatePasswordHash($password);
            $data = date('Y-m-d H:i:s');

            $model->username = $username;
            $model->password = $passwordCrip;
            $model->created_at = $data;
            $model->updated_at = $data;

            try {
                if ($model->save(false)) {
                    return true;
                }
            } catch (\Exception $e) {
                return $e->getMessage();//return false
            }
        }
        return false;
    }

}
