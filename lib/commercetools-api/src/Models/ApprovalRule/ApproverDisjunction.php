<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApproverDisjunction extends JsonObject
{
    public const FIELD_OR = 'or';

    /**
     * <p>Any of the nested approvers must approve in order for the disjunction to be considered approved.</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getOr();

    /**
     * @param ?RuleApproverCollection $or
     */
    public function setOr(?RuleApproverCollection $or): void;
}
