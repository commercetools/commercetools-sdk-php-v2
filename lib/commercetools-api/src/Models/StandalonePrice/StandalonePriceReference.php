<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded StandalonePrice. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for StandalonePrice.</p>
     *
     * @return null|StandalonePrice
     */
    public function getObj();

    /**
     * @param ?StandalonePrice $obj
     */
    public function setObj(?StandalonePrice $obj): void;
}
