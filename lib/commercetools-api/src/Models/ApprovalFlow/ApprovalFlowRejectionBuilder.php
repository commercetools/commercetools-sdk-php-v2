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
 * @implements Builder<ApprovalFlowRejection>
 */
final class ApprovalFlowRejectionBuilder implements Builder
{
    /**

     * @var null|Associate|AssociateBuilder
     */
    private $rejecter;

    /**

     * @var ?DateTimeImmutable
     */
    private $rejectedAt;

    /**

     * @var ?string
     */
    private $reason;

    /**
     * <p>Associate who rejected the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a>.</p>
     *

     * @return null|Associate
     */
    public function getRejecter()
    {
        return $this->rejecter instanceof AssociateBuilder ? $this->rejecter->build() : $this->rejecter;
    }

    /**
     * <p>Date and time (UTC) the <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> was rejected.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getRejectedAt()
    {
        return $this->rejectedAt;
    }

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
     * @param ?Associate $rejecter
     * @return $this
     */
    public function withRejecter(?Associate $rejecter)
    {
        $this->rejecter = $rejecter;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $rejectedAt
     * @return $this
     */
    public function withRejectedAt(?DateTimeImmutable $rejectedAt)
    {
        $this->rejectedAt = $rejectedAt;

        return $this;
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

    /**
     * @deprecated use withRejecter() instead
     * @return $this
     */
    public function withRejecterBuilder(?AssociateBuilder $rejecter)
    {
        $this->rejecter = $rejecter;

        return $this;
    }

    public function build(): ApprovalFlowRejection
    {
        return new ApprovalFlowRejectionModel(
            $this->rejecter instanceof AssociateBuilder ? $this->rejecter->build() : $this->rejecter,
            $this->rejectedAt,
            $this->reason
        );
    }

    public static function of(): ApprovalFlowRejectionBuilder
    {
        return new self();
    }
}
