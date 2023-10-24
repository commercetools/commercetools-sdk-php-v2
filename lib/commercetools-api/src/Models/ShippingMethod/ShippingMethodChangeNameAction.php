<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodChangeNameAction extends ShippingMethodUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * <p>Unique value to set within a <a href="ctp:api:type:Project">Project</a>. Must not be empty.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
