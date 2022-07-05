<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeChangeGroupsAction extends DiscountCodeUpdateAction
{
    public const FIELD_GROUPS = 'groups';

    /**
     * <p>New value to set. An empty array removes the DiscountCode from all groups.</p>
     *

     * @return null|array
     */
    public function getGroups();

    /**
     * @param ?array $groups
     */
    public function setGroups(?array $groups): void;
}
