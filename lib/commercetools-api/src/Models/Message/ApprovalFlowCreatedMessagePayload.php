<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalFlow\ApprovalFlow;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalFlowCreatedMessagePayload extends MessagePayload
{
    public const FIELD_APPROVAL_FLOW = 'approvalFlow';

    /**
     * <p>The <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> that was created.</p>
     *

     * @return null|ApprovalFlow
     */
    public function getApprovalFlow();

    /**
     * @param ?ApprovalFlow $approvalFlow
     */
    public function setApprovalFlow(?ApprovalFlow $approvalFlow): void;
}
