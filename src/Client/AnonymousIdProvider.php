<?php

declare(strict_types=1);

namespace Commercetools\Client;

interface AnonymousIdProvider
{
    /**
     * @return string
     */
    public function getAnonymousId();
}
