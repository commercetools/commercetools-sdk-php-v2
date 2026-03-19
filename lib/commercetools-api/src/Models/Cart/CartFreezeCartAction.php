<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartFreezeCartAction extends CartUpdateAction
{
    public const FIELD_STRATEGY = 'strategy';

    /**
     * <p>Strategy that determines the freezing behavior.</p>
     *

     * @return null|string
     */
    public function getStrategy();

    /**
     * @param ?string $strategy
     */
    public function setStrategy(?string $strategy): void;
}
