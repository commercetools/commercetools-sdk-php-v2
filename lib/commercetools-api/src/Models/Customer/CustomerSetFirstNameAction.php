<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetFirstNameAction extends CustomerUpdateAction
{
    public const FIELD_FIRST_NAME = 'firstName';

    /**
     * <p>Value to set. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getFirstName();

    /**
     * @param ?string $firstName
     */
    public function setFirstName(?string $firstName): void;
}
