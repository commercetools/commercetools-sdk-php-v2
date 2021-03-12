<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ErrorObject extends JsonObject
{

    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';

    /**
     * @return null|string
     */
    public function getCode();

    /**
     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void;

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
