<?php
namespace App\Services;

use SendGrid;
use SendGrid\Mail\Mail;

class SendGridMailService
{
    public function sendEmail($to, $subject, $content)
    {
        $email = new Mail();
        $email->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/html", $content);

        $sendgrid = new SendGrid(env('SENDGRID_API_KEY'));
        
        try {
            $response = $sendgrid->send($email);
            return $response->statusCode();
        } catch (Exception $e) {
            throw new \Exception("Failed to send email: " . $e->getMessage());
        }
    }
}
