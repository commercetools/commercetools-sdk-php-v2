<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ExtensionAuthorizationHeaderAuthentication extends ExtensionHttpDestinationAuthentication
{

    public const FIELD_HEADER_VALUE = 'headerValue';

    /**
     * @return null|string
     */
    public function getHeaderValue();

    public function setHeaderValue(?string $headerValue): void;
}
