<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditSetKeyAction extends OrderEditUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>If <code>key</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
