<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeChangeKeyAction extends TypeUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>New value to set.
     * Must not be empty.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
