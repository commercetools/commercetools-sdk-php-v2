<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\RecurringOrder\LineItemRecurrenceInfoDraft;
use Commercetools\Api\Models\RecurringOrder\LineItemRecurrenceInfoDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartSetLineItemRecurrenceInfoAction>
 */
final class MyCartSetLineItemRecurrenceInfoActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?string
     */
    private $lineItemKey;

    /**

     * @var null|LineItemRecurrenceInfoDraft|LineItemRecurrenceInfoDraftBuilder
     */
    private $recurrenceInfo;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemKey()
    {
        return $this->lineItemKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|LineItemRecurrenceInfoDraft
     */
    public function getRecurrenceInfo()
    {
        return $this->recurrenceInfo instanceof LineItemRecurrenceInfoDraftBuilder ? $this->recurrenceInfo->build() : $this->recurrenceInfo;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?string $lineItemKey
     * @return $this
     */
    public function withLineItemKey(?string $lineItemKey)
    {
        $this->lineItemKey = $lineItemKey;

        return $this;
    }

    /**
     * @param ?LineItemRecurrenceInfoDraft $recurrenceInfo
     * @return $this
     */
    public function withRecurrenceInfo(?LineItemRecurrenceInfoDraft $recurrenceInfo)
    {
        $this->recurrenceInfo = $recurrenceInfo;

        return $this;
    }

    /**
     * @deprecated use withRecurrenceInfo() instead
     * @return $this
     */
    public function withRecurrenceInfoBuilder(?LineItemRecurrenceInfoDraftBuilder $recurrenceInfo)
    {
        $this->recurrenceInfo = $recurrenceInfo;

        return $this;
    }

    public function build(): MyCartSetLineItemRecurrenceInfoAction
    {
        return new MyCartSetLineItemRecurrenceInfoActionModel(
            $this->lineItemId,
            $this->lineItemKey,
            $this->recurrenceInfo instanceof LineItemRecurrenceInfoDraftBuilder ? $this->recurrenceInfo->build() : $this->recurrenceInfo
        );
    }

    public static function of(): MyCartSetLineItemRecurrenceInfoActionBuilder
    {
        return new self();
    }
}
