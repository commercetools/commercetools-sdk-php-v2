<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrderSetOrderSkipConfigurationAction>
 */
final class RecurringOrderSetOrderSkipConfigurationActionBuilder implements Builder
{
    /**

     * @var null|SkipConfigurationDraft|SkipConfigurationDraftBuilder
     */
    private $skipConfigurationInputDraft;

    /**

     * @var ?DateTimeImmutable
     */
    private $updatedExpiresAt;

    /**
     * <p>Configuration for skipping future orders of the <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *

     * @return null|SkipConfigurationDraft
     */
    public function getSkipConfigurationInputDraft()
    {
        return $this->skipConfigurationInputDraft instanceof SkipConfigurationDraftBuilder ? $this->skipConfigurationInputDraft->build() : $this->skipConfigurationInputDraft;
    }

    /**
     * <p>Date and time (UTC) the Recurring Order will expire and stop generating new orders.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getUpdatedExpiresAt()
    {
        return $this->updatedExpiresAt;
    }

    /**
     * @param ?SkipConfigurationDraft $skipConfigurationInputDraft
     * @return $this
     */
    public function withSkipConfigurationInputDraft(?SkipConfigurationDraft $skipConfigurationInputDraft)
    {
        $this->skipConfigurationInputDraft = $skipConfigurationInputDraft;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $updatedExpiresAt
     * @return $this
     */
    public function withUpdatedExpiresAt(?DateTimeImmutable $updatedExpiresAt)
    {
        $this->updatedExpiresAt = $updatedExpiresAt;

        return $this;
    }

    /**
     * @deprecated use withSkipConfigurationInputDraft() instead
     * @return $this
     */
    public function withSkipConfigurationInputDraftBuilder(?SkipConfigurationDraftBuilder $skipConfigurationInputDraft)
    {
        $this->skipConfigurationInputDraft = $skipConfigurationInputDraft;

        return $this;
    }

    public function build(): RecurringOrderSetOrderSkipConfigurationAction
    {
        return new RecurringOrderSetOrderSkipConfigurationActionModel(
            $this->skipConfigurationInputDraft instanceof SkipConfigurationDraftBuilder ? $this->skipConfigurationInputDraft->build() : $this->skipConfigurationInputDraft,
            $this->updatedExpiresAt
        );
    }

    public static function of(): RecurringOrderSetOrderSkipConfigurationActionBuilder
    {
        return new self();
    }
}
