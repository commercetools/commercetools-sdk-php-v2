<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReplicaCartDraft extends JsonObject
{
    public const FIELD_REFERENCE = 'reference';

    /**
     * @return null|mixed
     */
    public function getReference();

    public function setReference(?JsonObject $reference): void;
}
