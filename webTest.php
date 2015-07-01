<?php
require_once __DIR__.'/vendor/autoload.php';

class ContactFormTest extends Silex\WebTestCase {
    public function createApplication() {
        include __DIR__.'/app.php';
        return $app;
    }

    public function testCaptcha() {
        $client = static::createClient();
        $crawler = $client->request('GET', '/captcha');
        $this->assertRegExp('/[a-zA-Z]+\s(\+|\*|-)\s\d|\d\s(\+|\*|-)\s[a-zA-Z]+/', $client->getResponse()->getContent());
    }
}
