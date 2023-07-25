<?php
class Email_Form {
    private $to;
    private $subject;
    private $message;
    private $headers;

    public function __construct($to, $subject, $message, $headers = '') {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = $headers;
    }

    public function send_mail() {
        if (mail($this->to, $this->subject, $this->message, $this->headers)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
