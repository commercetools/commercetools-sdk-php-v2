<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeSetMaxApplicationsAction extends DiscountCodeUpdateAction
{
    public const FIELD_MAX_APPLICATIONS = 'maxApplications';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     * @return null|int
     */
    public function getMaxApplications();

    /**
     * @param ?int $maxApplications
     */
    public function setMaxApplications(?int $maxApplications): void;
}
