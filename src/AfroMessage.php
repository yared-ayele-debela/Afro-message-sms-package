<?php
namespace YourVendor\AfroMessageSms;

use Illuminate\Support\Facades\Http;

class AfroMessage
{
    protected $token;
    protected $from;
    protected $sender;

    public function __construct()
    {
        $this->token = config('afromessage.token');
        $this->from = config('afromessage.from');
        $this->sender = config('afromessage.sender');
    }

    public function sendOtp($to, $message, $callback)
    {
        return $this->post('send', [
            'from' => $this->from,
            'sender' => $this->sender,
            'to' => $to,
            'message' => $message,
            'callback' => $callback
        ]);
    }

    public function sendBulk(array $to, $message, $campaign, $statusCallback, $createCallback)
    {
        return $this->post('bulk_send', [
            'from' => $this->from,
            'sender' => $this->sender,
            'to' => $to,
            'message' => $message,
            'campaign' => $campaign,
            'statusCallback' => $statusCallback,
            'createCallback' => $createCallback
        ]);
    }

    protected function post($endpoint, $data)
    {
        $response = Http::withToken($this->token)
            ->acceptJson()
            ->post("https://api.afromessage.com/api/{$endpoint}", $data);

        return $response->json();
    }
}