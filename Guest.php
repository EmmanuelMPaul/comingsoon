<?php

use Mailgun\Mailgun;
use Dotenv\Dotenv;

class Guest
{
  protected $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function test_input($email)
  {
    $data =  trim($email);
    $data = stripcslashes($email);
    $data =  htmlspecialchars($email);
    return $data;
  }

  public function send($email)
  {
    $mgClient = new Mailgun(getenv('MAILGUN_API_KEY'));
    $domain = getenv("MAILGUN_DOMAIN_NAME");
    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
      'from'  => getenv('COMPANY_EMAIL'),
      'to'  => $email,
      'subject' => 'Hello',
      'text'  => 'Testing some Mailgun awesomness!'
    ));
    //add to db after sending email
    //return http response code
    return $result->http_response_code == 200 && $this->save($email) ? 200 : 400;
  }
  public function save($email)
  {
    # save emails to db
    $guest = $this->db->prepare("
      INSERT INTO guests(email)VALUES(:email)
    ");

    try {

      $guest->execute([
        'email' => $email
      ]);

      return true;
    } catch (Exception $e) {

      return false;
    }
  }
}
