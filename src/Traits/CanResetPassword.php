<?php

namespace Fluent\Auth\Traits;

use CodeIgniter\Events\Events;
use Fluent\Auth\Contracts\ResetPasswordInterface;

trait CanResetPassword
{
    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification()
    {
        Events::trigger(ResetPasswordInterface::class, $this->getEmailForPasswordReset());
    }
}
