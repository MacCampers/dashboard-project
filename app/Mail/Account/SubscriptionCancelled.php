<?php

namespace App\Mail\Account;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;

class SubscriptionCancelled extends Mailable {
   use Queueable, SerializesModels;

   public $user;

   /**
   * Create a new message instance.
   *
   * @return void
   */
   public function __construct(User $user) {
      $this->user = $user;
   }

   /**
   * Build the message.
   *
   * @return $this
   */
   public function build() {
      return $this->view('emails.account.subscription_cancelled')->subject(trans('emails.subscription_cancelled.title'));
   }
}