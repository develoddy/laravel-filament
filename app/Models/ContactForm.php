<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class ContactForm extends Model
{
    use HasFactory;

    protected $table = 'contact_form';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($item) {

            $adminEmail = config('mails.email_admin');

            if (!$adminEmail) {
                throw new \Exception("El correo de admin no está configurado correctamente.");
            }

            Mail::to($adminEmail)->send(new ContactMail($item));

            // $emails = [
            //     config('mails.email_admin'),
            //     config('mails.email_dev'),
            // ];

            // foreach ($emails as $email) {
            //     Mail::to($email)->send(new ContactMail($item));
            // }
        });
    }
}
