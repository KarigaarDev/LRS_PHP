<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function about()
    {
        return view('pages/about');
    }

    public function services()
    {
        return view('pages/services');
    }

    public function contact()
    {
        helper('form');
        $session = session();
        $request = service('request');

        if ($request->getMethod() === 'post') {
            // Basic handling — no mail sending here. Just store form values (or send email later).
            $name = $request->getPost('name');
            $email = $request->getPost('email');
            $message = $request->getPost('message');

            // For demo, we just set flashdata and redirect back
            $session->setFlashdata('success', 'Thanks — we received your message. We will get back to you soon!');
            return redirect()->to(current_url());
        }

        return view('pages/contact');
    }
}
