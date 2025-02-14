1)php artisan install:api    //this will install the laravel sanctum and create a api.php  <br>
2) Now in user model    add->    use Laravel\Sanctum\HasApiTokens  <br>
3) 'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Bearer '.$accessToken,
]

//in the thunder client ignore the '' comaas..
