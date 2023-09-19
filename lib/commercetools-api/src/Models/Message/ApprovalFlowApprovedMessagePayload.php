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

interface ApprovalFlowApprovedMessagePayload extends MessagePayload
{
    public const FIELD_ASSOCIATE = 'associate';
    public const FIELD_ORDER = 'order';

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Customer">Customer</a> who approved the <a href="/projects/approval-flows">Approval Flow</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getAssociate();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> that received the approval.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder();

    /**
     * @param ?CustomerReference $associate
     */
    public function setAssociate(?CustomerReference $associate): void;

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void;
}
