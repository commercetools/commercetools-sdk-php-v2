<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApproverHierarchyDraft extends JsonObject
{
    public const FIELD_TIERS = 'tiers';

    /**
     * <p>Nested conjunctions representing tiers of approvers in a hierarchy.</p>
     *

     * @return null|ApproverConjunctionDraftCollection
     */
    public function getTiers();

    /**
     * @param ?ApproverConjunctionDraftCollection $tiers
     */
    public function setTiers(?ApproverConjunctionDraftCollection $tiers): void;
}
