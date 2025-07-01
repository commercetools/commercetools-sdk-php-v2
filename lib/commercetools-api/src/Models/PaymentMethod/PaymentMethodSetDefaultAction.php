<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodSetDefaultAction extends PaymentMethodUpdateAction
{
    public const FIELD_DEFAULT = 'default';

    /**
     * <p>Value to set.</p>
     *

     * @return null|bool
     */
    public function getDefault();

    /**
     * @param ?bool $default
     */
    public function setDefault(?bool $default): void;
}
