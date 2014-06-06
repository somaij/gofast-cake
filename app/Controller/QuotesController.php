<?php

App::uses('CakeEmail', 'Network/Email');

class QuotesController extends AppController {
  public function index() {
    $this->render('quotes');
  }

  public function send() {
    if ($this->request->is('post')) {
      if (!empty($this->request->data)) {
        $this->Quote->data = $this->request->data;

        if ($this->Quote->validates()) {

          $info = $this->request->data['Quote'];

          $message = "Company Name: {$info['companyName']}\n".
                     "Contact Name: {$info['contactName']}\n".
                     "Phone Number: {$info['phone']}\n".
                     "E-mail Address: {$info['email']}\n\n".

                     "Pick-up Information:\n".
                     "{$info['pickupStreet']}\n".
                     "{$info['pickupCity']} {$info['pickupProvince']}\n".
                     "{$info['pickupCode']}\n".
                     "Pick-up Date: {$info['pickupDate']}\n\n".

                     "Delivery Information:\n".
                     "{$info['deliveryStreet']}\n".
                     "{$info['deliveryCity']} {$info['deliveryProvince']}\n".
                     "{$info['deliveryCode']}\n".
                     "Delivery Date: {$info['deliveryDate']}\n\n".

                     "Skid Count: {$info['skids']}\n".
                     "Weight: {$info['weight']} {$info['weightUnits']}\n\n".

                     "Additional Details:------\n".
                     "{$info['details']}";

          $Email = new CakeEmail();
          $Email->from(array($info['email'] => $info['contactName']))
            ->to('gofastexpress@gmail.com')
            ->subject('[Quote Request] ' . $info['contactName'] . ' has requested a quote!')
            ->send($message);

          $this->Session->setFlash('You have successfully requested a quote! We will get back to you as soon as possible!', 'message');
          return $this->redirect('/');
        }
      }

      $this->render('quotes');
    } else {
      $this->redirect('/quotes/');
    }
  }

  public function beforeRender() {
    $this->set('page', 'quotes');
  }
}