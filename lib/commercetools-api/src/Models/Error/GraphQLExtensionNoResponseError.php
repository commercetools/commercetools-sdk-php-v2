<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLExtensionNoResponseError extends GraphQLErrorObject
{
    public const FIELD_EXTENSION_ID = 'extensionId';
    public const FIELD_EXTENSION_KEY = 'extensionKey';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Unique identifier of the API Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionId();

    /**
     * <p>User-defined unique identifier of the API Extension, if available.</p>
     *

     * @return null|string
     */
    public function getExtensionKey();

    /**
     * @param ?string $extensionId
     */
    public function setExtensionId(?string $extensionId): void;

    /**
     * @param ?string $extensionKey
     */
    public function setExtensionKey(?string $extensionKey): void;
}
