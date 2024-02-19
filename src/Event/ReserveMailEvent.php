<?php
declare(strict_types=1);

namespace App\Event;

use Cake\Event\EventListenerInterface;

/**
 * 予約メールイベント確認
 */
class ReserveMailEvent extends EventListenerInterface
{
    /**
     *
     */
    public function implementedEvents(): array
    {
        return [
            'Email.Reserve' => 'send',
        ];
    }

    /**
     *
     */
    public function sendMail($event)
    {

    }
}
