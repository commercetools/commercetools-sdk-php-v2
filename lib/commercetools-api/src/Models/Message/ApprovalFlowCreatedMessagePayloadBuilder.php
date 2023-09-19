<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalFlow\ApprovalFlow;
use Commercetools\Api\Models\ApprovalFlow\ApprovalFlowBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalFlowCreatedMessagePayload>
 */
final class ApprovalFlowCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ApprovalFlow|ApprovalFlowBuilder
     */
    private $approvalFlow;

    /**
     * <p>The <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> that was created.</p>
     *

     * @return null|ApprovalFlow
     */
    public function getApprovalFlow()
    {
        return $this->approvalFlow instanceof ApprovalFlowBuilder ? $this->approvalFlow->build() : $this->approvalFlow;
    }

    /**
     * @param ?ApprovalFlow $approvalFlow
     * @return $this
     */
    public function withApprovalFlow(?ApprovalFlow $approvalFlow)
    {
        $this->approvalFlow = $approvalFlow;

        return $this;
    }

    /**
     * @deprecated use withApprovalFlow() instead
     * @return $this
     */
    public function withApprovalFlowBuilder(?ApprovalFlowBuilder $approvalFlow)
    {
        $this->approvalFlow = $approvalFlow;

        return $this;
    }

    public function build(): ApprovalFlowCreatedMessagePayload
    {
        return new ApprovalFlowCreatedMessagePayloadModel(
            $this->approvalFlow instanceof ApprovalFlowBuilder ? $this->approvalFlow->build() : $this->approvalFlow
        );
    }

    public static function of(): ApprovalFlowCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
