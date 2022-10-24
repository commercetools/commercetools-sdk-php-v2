<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerEmailVerify extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_TOKEN_VALUE = 'tokenValue';

    /**
     * <p>Expected version of the Customer.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Value of the token to verify Customer email.</p>
     *

     * @return null|string
     */
    public function getTokenValue();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $tokenValue
     */
    public function setTokenValue(?string $tokenValue): void;
}
