<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReplicaMyCartDraft extends JsonObject
{
    public const FIELD_REFERENCE = 'reference';

    /**

     * @return null|mixed
     */
    public function getReference();

    /**
     * @param ?JsonObject $reference
     */
    public function setReference(?JsonObject $reference): void;
}
