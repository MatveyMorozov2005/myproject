<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\httpclient\Client;
use yii\widgets\Pjax;
class ClientController extends Controller
{
    public function actionNewClient()
    {
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl('https://http.cat/[status_code].jpg')
            ->send();
        if ($response->isOk) {
            $data = $response->data;
        }       else {
            $data = null;
        }

        return $this->render('newClient',['data'=>$data]);
    }

    public function actionTime()
    {
        return $this->render('newClient', ['response' => date('H:i:s')]);
    }

    public function actionDate()
    {
        return $this->render('newClient', ['response' => date('d.m.Y')]);
    }
    public function actionVote()
    {
        return $this->render('vote');
    }

    public function actionUpvote()
    {
        $votes = Yii::$app->session->get('votes', 0);
        Yii::$app->session->set('votes', ++$votes);

        return $this->render('vote');
    }

    public function actionDownvote()
    {
        $votes = Yii::$app->session->get('votes', 0);
        Yii::$app->session->set('votes', --$votes);

        return $this->render('vote');
    }
}