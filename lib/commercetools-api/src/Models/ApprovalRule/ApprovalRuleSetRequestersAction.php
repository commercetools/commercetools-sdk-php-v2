<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleSetRequestersAction extends ApprovalRuleUpdateAction
{
    public const FIELD_REQUESTERS = 'requesters';

    /**
     * <p>New requesters to set for the Approval Rule.</p>
     *

     * @return null|RuleRequesterDraftCollection
     */
    public function getRequesters();

    /**
     * @param ?RuleRequesterDraftCollection $requesters
     */
    public function setRequesters(?RuleRequesterDraftCollection $requesters): void;
}
