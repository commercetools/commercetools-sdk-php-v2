<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionError extends JsonObject
{
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_EXTENSION_ID = 'extensionId';
    public const FIELD_EXTENSION_KEY = 'extensionKey';
    public const FIELD_PATTERN4 = '//';

    /**
     * <p>Error code caused by the Extension. For example, <code>InvalidField</code>.</p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of the error.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionId();

    /**
     * <p>User-defined unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionKey();

    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void;

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
