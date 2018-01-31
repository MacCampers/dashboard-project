<?php

namespace App\Mail\Company;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;
use App\Company;

class PendingUserRefusal extends Mailable {
   use Queueable, SerializesModels;

   public $user;
   public $company;

   /**
   * Create a new message instance.
   *
   * @return void
   */
   public function __construct(User $user, Company $company) {
      $this->user = $user;
      $this->company = $company;
   }

   /**
   * Build the message.
   *
   * @return $this
   */
   public function build() {
      return $this->view('emails.company.pending_user_refusal')->subject(trans('emails.pending_user_refusal.subject'));
   }
}