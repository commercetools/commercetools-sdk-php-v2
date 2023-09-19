<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalFlowRejectAction>
 */
final class ApprovalFlowRejectActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $reason;

    /**
     * <p>The reason for the rejection of the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param ?string $reason
     * @return $this
     */
    public function withReason(?string $reason)
    {
        $this->reason = $reason;

        return $this;
    }


    public function build(): ApprovalFlowRejectAction
    {
        return new ApprovalFlowRejectActionModel(
            $this->reason
        );
    }

    public static function of(): ApprovalFlowRejectActionBuilder
    {
        return new self();
    }
}
