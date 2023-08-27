<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
     'firebase' => [   
            'credential' => [
            'project_id' => 'booklibrary-9dc9c',   
            "client_id"=> "114073370616856630928",  
            "private_key"=> "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCH82haCFoXom9n\na176pONZ5asdNoxLaSI+epdLupr9Wknx2zXvQprcTbmh+MDSfA0mf0Zi3fr+xilD\nAzvXzaBRzgQhaP8MTUvna6oJuU7iOI6ms8eU5NM7fYqjC2EJctT2dADAwa7ydD8a\nXNUXgv5o5ZnHB+U+bAE9pZYFlgcb2lB39V5zMhV7X7p7M1HNIQRCOX4fHf3lI+6F\nWz+MDCoVeU17i/rg5NOyMzCkvy9ZNDXXOBPliBVb7yzZr8791CDpZrakja50kKcL\nHewQ3lZBWCMnBaGj4/ar3DU39O2c5f0Z1LjpD2i+GfKAfQC8Ca8/JgTihddEehuG\n9B8jXpsHAgMBAAECggEABZhrDxQ7llrFIwiJnDSfzC9mX4lt33IFoB9Y4sZcuANj\nT7pUpJ2lKgljk9sHyfdObesxxm1Edf/0lXbTRl/cMqxmrHQEgJ5zJU81Fw6yxHTM\nyjz+qzjPyNRd7wqk2nKzeSvvwVSMvXCIuFkMcYSesUqMjbiGzY7nGNZxL5cBK+WS\nVhOEE9b6Sy3FT5S7iBmUzPLKVX4gph/+VsypECBkPHmPmWlBD8XT5hoyd3BTXjEY\nlQCXQQwo/ZMPopfIL1RAPl/0GuGtoURmoT0DdrJ4QlErej0gzoc7xzLVBY1Z6tpr\n0DGngWvvMj03cjo91buYwk7pteRZLyMPV4Y/6IObwQKBgQC+nls4k8fbIV7Sp0xJ\njqGe0GJZncwBKhoUXY0CYaTzuD3YihuhAf1QmNGRKAg8q+urFk1n39/aJqvTjwcN\nFL5N7qLjA2bzQkiwBOKONTdB00HpE4WOyrx43aKPKlY1X7ylYsMQjHHiCqSBa0aM\nkPoWDlOgKpxBrERF9BIPBsWDaQKBgQC2lNbPwcRAeWFpqTCDKqaqjRYaezPK+X2Y\nuEnCeBcTOqQ6k7b7Po0QVGfFCs/9kusD6SxTCD5ffQJRCSoTXPV4H9LnOlqxTKmq\n0LzBWYH5hyI0cBLUXiYiNZ4asOP9cIGrvubp/+lEkJ6pcrIVAk3gAGLn3nCRmA+C\nUKz3zlAM7wKBgCEerKTg8Hm/i5U4YkXplWVduajuhPKy2QMu2gBO7PU3zu8f1/sa\nuGPXmZoKBZxdFr6MSnjA6kkiLPq+QDBiqUorK3wcLDgaDT0gLCkfT/GM/ke8D5mm\n2iZ6A/OyHHZ7ovBtf40RifwHc1vVQtXLnthUNu1+WdYDU32AEd8wgwL5AoGAID0f\nwQeB07CbFsEdI8wAKdVHtd1TQ9/R4YmI3KG/0VFldkJm6O4ekmeU+yHxn+C1RreB\ncBfgi5PTOOPZXhnn7hIQd2vCX9QdkV/SNIHNhXXrAD9Z083cBeZZyHS7jSC0hNLs\nixz433Z5zYnHEBacEZV/4VlRnyOueWAtaoQvdlkCgYEAr+a5Z8RWEOVRwlV4O0dj\nIyTxWM1YUFYn1oYxKmRBWzB4XkWeGI9C6+zyGsfB4NbiOOswKjqTh4yTCecKmGtq\nOy0ARNIxauZg2iM0oiZk0OndT4kfYW7gVhvokcFa66K1V3E+Kl342xjiyZZCYoQo\nQZDU141RA6lZPzofmtBeSyM=\n-----END PRIVATE KEY-----\n",
            'client_email' => "firebase-adminsdk-h47l0@booklibrary-9dc9c.iam.gserviceaccount.com",    
           ],
        'storage_bucket' => 'booklibrary-9dc9c.appspot.com', 
      ],


    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
