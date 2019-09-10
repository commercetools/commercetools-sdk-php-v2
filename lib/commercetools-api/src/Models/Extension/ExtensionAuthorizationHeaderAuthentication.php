<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

interface ExtensionAuthorizationHeaderAuthentication extends ExtensionHttpDestinationAuthentication
{
    const FIELD_HEADER_VALUE = 'headerValue';

    /**
     * @return null|string
     */
    public function getHeaderValue();

    public function setHeaderValue(?string $headerValue): void;
}
