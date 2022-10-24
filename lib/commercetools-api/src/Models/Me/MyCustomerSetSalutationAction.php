<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSetSalutationAction extends MyCustomerUpdateAction
{
    public const FIELD_SALUTATION = 'salutation';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getSalutation();

    /**
     * @param ?string $salutation
     */
    public function setSalutation(?string $salutation): void;
}
