<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AuthorizationHeaderAuthentication extends HttpDestinationAuthentication
{
    public const FIELD_HEADER_VALUE = 'headerValue';

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *
     * @return null|string
     */
    public function getHeaderValue();

    /**
     * @param ?string $headerValue
     */
    public function setHeaderValue(?string $headerValue): void;
}
