<?php

namespace App\Mail\Project;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;
use App\Project;

class ProjectInvitation extends Mailable {
   use Queueable, SerializesModels;

   public $user;
   public $project;
   public $sender;

   /**
   * Create a new message instance.
   *
   * @return void
   */
   public function __construct(User $user, Project $project, $sender) {
      $this->user = $user;
      $this->project = $project;
      $this->sender = $sender;
   }

   /**
   * Build the message.
   *
   * @return $this
   */
   public function build() {
      return $this->view('emails.project.invitation')->subject(trans('emails.project_invitation.subject'));
   }
}