<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalFlowRejectedMessage extends Message
{
    public const FIELD_ASSOCIATE = 'associate';
    public const FIELD_REJECTION_REASON = 'rejectionReason';
    public const FIELD_ORDER = 'order';

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Customer">Customer</a> who rejected the <a href="/projects/approval-flows">Approval Flow</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getAssociate();

    /**
     * <p>Description of the reason why the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was rejected.</p>
     *

     * @return null|string
     */
    public function getRejectionReason();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> that received the rejection.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder();

    /**
     * @param ?CustomerReference $associate
     */
    public function setAssociate(?CustomerReference $associate): void;

    /**
     * @param ?string $rejectionReason
     */
    public function setRejectionReason(?string $rejectionReason): void;

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void;
}
