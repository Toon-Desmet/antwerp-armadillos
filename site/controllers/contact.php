<?php
return function ($kirby, $pages, $page) {

    $alert = null;

    if ($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if (empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'name'  => get('name'),
            'email' => get('email'),
            'text'  => get('text')
        ];

        $rules = [
            'name'  => ['required', 'minLength' => 3],
            'email' => ['required', 'email'],
            'text'  => ['required', 'minLength' => 3, 'maxLength' => 3000],
        ];

        $messages = [
            'name'  => 'Please enter a valid name',
            'email' => 'Please enter a valid email address',
            'text'  => 'Please enter a text between 3 and 3000 characters'
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {

            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => $data['email'],
                    'replyTo'  => $data['email'],
                    'to'       => collection('emails'),
                    'subject'  => esc($data['name']) . ' heeft je een mail gestuurd via de website ',
                    'data'     => [
                        'text'   => esc($data['text']),
                        'sender' => esc($data['name'])
                    ]
                ]);
            } catch (Exception $error) {
                if (option('debug')) :
                    $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                else :
                    $alert['error'] = 'The form could not be sent!';
                endif;
            }

            // no exception occurred, let's send a success message
            if (empty($alert) === true) {
                $success = 'We hebben uw bericht ontvangen! We gaan u zo spoedig mogelijk terug contacteren';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};
