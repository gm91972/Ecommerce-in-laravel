<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail to all users by running this command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $usersMail = User::select('email')->get();
        $emails = [];
         foreach($usersMail as $mail){
            $emails[] = $mail['email'];
         }
         Mail::send('email.email', [], function($message) use ($emails){
            $message->to($emails)->subject("Subscribe to our email");
         });
    }
}
