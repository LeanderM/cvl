<?php
/**
 * Created by PhpStorm.
 * User: leander
 * Date: 15-3-17
 * Time: 15:38
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class MailController extends Controller
{
    public function __invoke(ContactFormRequest $request){
        Mail::send('emails.mail',
            ['name' => $request->get("name"), "email" => $request->get("email"), "user_message" => $request->get("message"), "language" => env("locale")],
            function($message){
                $message->from("CVLeander@hosting2go.nl");
                $message->to(env("MAIL_USERNAME"), "Admin")->subject("Contact via website");
            });

        //return \Response::view('frontend/mainpage', ['message' => "Thanks for contactin us!"]);

        return Redirect::to(URL::previous() . "#messageSuccess")->with(['message' => __("lang.mail_success")]);
    }
}