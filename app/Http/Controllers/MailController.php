<?php
namespace App\Http\Controllers;
use Mail;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShoutFormRequest;
use Laracasts\Flash\Flash;



class MailController extends Controller
{
    //
    public function giveShout()
    {
        return view('pages.contact.shout');
    }

    public function index(){
        return View("Mail.index");
    }

    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        dd($request->all()) ;

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {
            $message->from('me@gmail.com', 'Christian Nwamba');
            $message->to('orlando.cofre77@gamil.com');
        });

        flash('Estado de Propiedad Actualizado.', 'success')->important();
//        return response()->json(['message' => 'Request completed']);

        return Redirect::home()->with('message', 'Thanks for contacting us!');

    }

    public function store(Request $request){

        $title = $request->input('subject');
        $content = $request->input('message');

        Mail::send(
          'Mail.send',
          ['title' => $title, 'content' => $content],
          function ($message ) use ($request)
        {
//            $message->from('orlando.cofre77@gmail.com', 'Systems OR');
            $message->to($request->emailto)->subject($request->subject);
        });

        flash('Estado de Propiedad Actualizado.', 'success')->important();
//        return response()->json(['message' => 'Request completed']);

        //return Redirect::home()->with('message', 'Thanks for contacting us!');
        return redirect()->route('Mail.index');

    }


    public function sendmail(ShoutFormRequest $request)
    {
        //dd(app::get('mail'));

        $data = array(
            'OrganziationSupport' => ('Asim Khan'),
            'OrganziationName' => ('Hazzir'),
            'OrganziationWebsite' => ('http://www.hazzir.com'),
            'OrganziationFacebook' => ('http://www.facebook.com/hellohazzir'),
            'OrganziationTwitter' => ('http://www.twitter.com/hellohazzir.com'),

            'name' => $request->get('contactName'),
            'email' => $request->get('contactEmail'),
            'phone' => $request->get('contactPhone'),
            'user_message' => $request->get('contactMessage')
        );

        Mail::send('pages.contact.mail',
            $data , function($message)use($request)
            {

                $subject ='Thank you for visiting Hazzir website and contacting us.';
                $message->from('postmaster@hazzir.com', 'Hazzir - Contact Form');
                $message->bcc('hazzir.mail@gmail.com', 'Admin Hazzir');
                $message->to($request->get('contactEmail'), $request->get('contactName'));
                $message->subject($subject);
            });

        //return "Send Mail Successfully!";

        return Redirect::home()->with('message', 'Thanks for contacting us!');

    }
    //

    public function Testmail()
    {
        $data = array(
            'name' => 'mail',
            'email' => 'your@mail.com',
            'user_message' => 'Hey There'
        );
        Mail::send('pages.contact.mail',
            $data,
            function($message)
            {
                $message ->from('hazzir.mail@gmail.com', 'Hazzir Mail');
                $message ->to('hazzir.mail@gmail.com', 'Test User')->subject('Feedback Hazzir ~ Test Mail');

            });
        return "Send Mail Successfully!";
    }
}
