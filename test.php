<?php

namespace DesignPatterns\Command\Tests;

use DesignPatterns\Command\HelloCommand;
use DesignPatterns\Command\Invoker;
use DesignPatterns\Command\Receiver;

class CommandTest
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        
		echo $receiver->getOutput();

    }
}
