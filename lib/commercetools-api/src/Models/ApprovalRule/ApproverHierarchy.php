<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApproverHierarchy extends JsonObject
{
    public const FIELD_TIERS = 'tiers';

    /**
     * <p>All of the nested conjunctions must be approved in order for the hierarchy to be considered approved.</p>
     *

     * @return null|ApproverConjunctionCollection
     */
    public function getTiers();

    /**
     * @param ?ApproverConjunctionCollection $tiers
     */
    public function setTiers(?ApproverConjunctionCollection $tiers): void;
}
