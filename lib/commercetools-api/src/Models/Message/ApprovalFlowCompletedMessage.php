<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalFlowCompletedMessage extends Message
{
    public const FIELD_STATUS = 'status';
    public const FIELD_ORDER = 'order';

    /**
     * <p>Final status of the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Order">Order</a> related to the completed <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void;
}
