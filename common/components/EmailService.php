<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

/**
 * Description of EmailService
 *
 * @author hodym
 */
class EmailService extends Component 
{
    /** 
     * @param UserNotificationInterface $user
     * @param string $subject
     * @return bool
     */
    public function notifyUser(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
                ->setFrom('service.email@yii2frontend.com')
                ->setTo($event->getEmail())
                ->setSubject($event->getSubject())
                ->send();
    }
    
    /**
     * @param UserNotificationInterface $event
     * @return bool
     */
    public function notifyAdmin(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
                ->setFrom('service.email@yii2frontend.com')
                ->setTo('hodimchukdmitriy@gmail.com')
                ->setSubject($event->getSubject())
                ->send();
    }
}
