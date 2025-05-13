<?php
namespace YourVendor\AfroMessageSms\Facades;

use Illuminate\Support\Facades\Facade;

class AfroMessage extends Facade
{
protected static function getFacadeAccessor()
{
return 'afromessage';
}
}