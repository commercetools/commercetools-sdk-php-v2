<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

use Ramsey\Uuid\Uuid;

class DefaultCorrelationIdProvider implements CorrelationIdProvider
{
    public function getCorrelationId(): string
    {
        return Uuid::uuid4()->toString();
    }
}
