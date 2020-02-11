<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface DiscountCodeSetDescriptionAction extends DiscountCodeUpdateAction
{

    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>If the <code>description</code> parameter is not included, the field will be emptied.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    public function setDescription(?LocalizedString $description): void;
}
