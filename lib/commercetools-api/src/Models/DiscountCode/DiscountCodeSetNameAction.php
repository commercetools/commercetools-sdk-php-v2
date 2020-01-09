<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\Common\LocalizedString;

interface DiscountCodeSetNameAction extends DiscountCodeUpdateAction
{
    const FIELD_NAME = 'name';

    /**
     * <p>If the <code>name</code> parameter is not included, the field will be emptied.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    public function setName(?LocalizedString $name): void;
}
