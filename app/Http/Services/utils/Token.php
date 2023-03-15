<?php
namespace App\Http\Services\utils;

use App\Http\Controllers\Controller;

/**
 * Summary of MainController
 */
class token extends Controller
{
    public function token()
    {
        $token = 'Bearer eyJhbGciOiJIUzUxMiIsInYiOiIyLjAiLCJraWQiOiIxN2MyMGU4ZC1kNDc5LTQyNTAtYjc4Yy01ZGM4NjQ1NThiYTkifQ.eyJ2ZXIiOjgsImF1aWQiOiIyMzg5ODI3Yjg2YjYzZmNhODY3M2U2OTczZTMyYTcxNSIsImNvZGUiOiJMeGkySmFrR3Q3NU1ENXMzSXJpUWVDOE43SmZjSzhjTXciLCJpc3MiOiJ6bTpjaWQ6NFZEQ3liT3ZRVUdDdlBIeFRnNXdIUSIsImdubyI6MCwidHlwZSI6MCwidGlkIjowLCJhdWQiOiJodHRwczovL29hdXRoLnpvb20udXMiLCJ1aWQiOiJIUW8xcGUtY1NUR3N1UE56dHVzTnJnIiwibmJmIjoxNjc4OTE2MTc4LCJleHAiOjE2Nzg5MTk3NzgsImlhdCI6MTY3ODkxNjE3OCwiYWlkIjoiVExBQ0RvVzBUYmlNWWswNGxyTTFMdyIsImp0aSI6IjViZTJlNGFjLWE2MTEtNDlhYi1hYTViLTUxZDU4ZjEwZjAzZiJ9.Sk3e6St0QtdG5PI6duxlpJ_d3gd-aTghffhNTA7q7jzXngzFymXEUvgKuQq3n2HEuzpMW4o4bRKXgFyM0oAdYw';
        return response()->json([
            'token' => $token,
        ]);
    }
}
