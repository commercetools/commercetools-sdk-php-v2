<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Api\Models\BusinessUnit\Associate;
use Commercetools\Api\Models\BusinessUnit\AssociateBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ApprovalFlowApproval>
 */
final class ApprovalFlowApprovalBuilder implements Builder
{
    /**

     * @var null|Associate|AssociateBuilder
     */
    private $approver;

    /**

     * @var ?DateTimeImmutable
     */
    private $approvedAt;

    /**
     * <p>Associate who approved the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|Associate
     */
    public function getApprover()
    {
        return $this->approver instanceof AssociateBuilder ? $this->approver->build() : $this->approver;
    }

    /**
     * <p>Date and time (UTC) the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was approved.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getApprovedAt()
    {
        return $this->approvedAt;
    }

    /**
     * @param ?Associate $approver
     * @return $this
     */
    public function withApprover(?Associate $approver)
    {
        $this->approver = $approver;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $approvedAt
     * @return $this
     */
    public function withApprovedAt(?DateTimeImmutable $approvedAt)
    {
        $this->approvedAt = $approvedAt;

        return $this;
    }

    /**
     * @deprecated use withApprover() instead
     * @return $this
     */
    public function withApproverBuilder(?AssociateBuilder $approver)
    {
        $this->approver = $approver;

        return $this;
    }

    public function build(): ApprovalFlowApproval
    {
        return new ApprovalFlowApprovalModel(
            $this->approver instanceof AssociateBuilder ? $this->approver->build() : $this->approver,
            $this->approvedAt
        );
    }

    public static function of(): ApprovalFlowApprovalBuilder
    {
        return new self();
    }
}
