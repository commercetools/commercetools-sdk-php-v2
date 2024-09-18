<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface WarningObject extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'code';
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';

    /**
     * <p>Identifier for the type of warning.</p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Contains information about the returned response.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
