<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionNoResponseError extends ErrorObject
{
    public const FIELD_EXTENSION_ID = 'extensionId';
    public const FIELD_EXTENSION_KEY = 'extensionKey';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Extension did not respond in time.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

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
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $extensionId
     */
    public function setExtensionId(?string $extensionId): void;

    /**
     * @param ?string $extensionKey
     */
    public function setExtensionKey(?string $extensionKey): void;
}
