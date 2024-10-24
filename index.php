<?php
use App\ObserverPattern\Observer\Gossip;

require __DIR__ . '/vendor/autoload.php';

$gossip = new Gossip();

$gossip->saySomething();