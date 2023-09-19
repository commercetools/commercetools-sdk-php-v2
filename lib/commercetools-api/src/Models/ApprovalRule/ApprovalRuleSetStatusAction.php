<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleSetStatusAction extends ApprovalRuleUpdateAction
{
    public const FIELD_STATUS = 'status';

    /**
     * <p>New status to set for the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;
}
