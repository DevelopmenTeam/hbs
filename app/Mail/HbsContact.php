<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class HbsContact extends Mailable {
  use Queueable, SerializesModels;

  /**
   * @var Request $request
   */
  protected $request;

  /**
   * Create a new message instance.
   */
  public function __construct(Request $request = NULL) {
    $this->request = $request;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    if (!empty($this->request)) {
      return $this->markdown('emails.contact')
        ->with('content', [
          'name' => $this->request->input('name'),
          'email' => $this->request->input('email'),
          'subject' => $this->request->input('subject'),
          'message' => $this->request->input('message')
        ])
        ->from($this->request->input('email'), $this->request->input('name'))
        ->replyTo('consultoreshbs@gmail.com', config('app.name'))
        ->subject($this->request->input('subject'));
    }
    else {
      return $this->markdown('emails.contact');
    }
  }
}
