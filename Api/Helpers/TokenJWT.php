<?php


class TokenJWT {




    public function __construct()
    {

    }

    public function header(){
        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT'
        ];

        $header = json_encode($header);
        $header = base64_encode($header);

        return $header;
    }

    public function payload(){
        $payload = [
            'iss' => 'localhost',
            'name' => 'Diogo',
            'email' => 'diogo.fragabemfica@gmail.com'
        ];
        $payload = json_encode($payload);
        $payload = base64_encode($payload);

        return $payload;
    }

}