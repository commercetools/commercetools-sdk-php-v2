<?php

namespace Commercetools\UnitTest;

use Commercetools\Api\Models\Message\MessagePagedQueryResponseModel;
use PHPUnit\Framework\TestCase;

class MessagesTest extends TestCase
{
    public function testDeserialize()
    {
        $messageString = file_get_contents(__DIR__ . "/messages.json");
        $json = json_decode($messageString, false);
        $response = MessagePagedQueryResponseModel::fromStdClass($json);

        $message = $response->getResults()->current();
        $messageType = $message->getType();
        $this->assertNotNull($messageType);
        $this->assertSame("CategoryCreated", $messageType);
    }
}
