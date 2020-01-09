<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObject;

interface ErrorObject extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'code';
    const FIELD_CODE = 'code';
    const FIELD_MESSAGE = 'message';

    /**
     * @return null|string
     */
    public function getCode();

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage();

    public function setMessage(?string $message): void;
}
