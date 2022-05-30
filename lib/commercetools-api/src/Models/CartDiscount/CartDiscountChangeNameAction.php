<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeNameAction extends CartDiscountUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * <p>New value to set.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;
}
