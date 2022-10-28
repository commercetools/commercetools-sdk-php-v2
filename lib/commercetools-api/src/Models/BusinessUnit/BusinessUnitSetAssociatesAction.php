<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitSetAssociatesAction extends BusinessUnitUpdateAction
{
    public const FIELD_ASSOCIATES = 'associates';

    /**
     * <p>The new list of Associates. If not provided, any existing list is removed.</p>
     *

     * @return null|AssociateDraftCollection
     */
    public function getAssociates();

    /**
     * @param ?AssociateDraftCollection $associates
     */
    public function setAssociates(?AssociateDraftCollection $associates): void;
}
