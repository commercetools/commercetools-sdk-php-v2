<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\RecurringOrder\CustomLineItemRecurrenceInfoDraft;
use Commercetools\Api\Models\RecurringOrder\CustomLineItemRecurrenceInfoDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetCustomLineItemRecurrenceInfoAction>
 */
final class CartSetCustomLineItemRecurrenceInfoActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var ?string
     */
    private $customLineItemKey;

    /**

     * @var null|CustomLineItemRecurrenceInfoDraft|CustomLineItemRecurrenceInfoDraftBuilder
     */
    private $recurrenceInfo;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemKey()
    {
        return $this->customLineItemKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|CustomLineItemRecurrenceInfoDraft
     */
    public function getRecurrenceInfo()
    {
        return $this->recurrenceInfo instanceof CustomLineItemRecurrenceInfoDraftBuilder ? $this->recurrenceInfo->build() : $this->recurrenceInfo;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param ?string $customLineItemKey
     * @return $this
     */
    public function withCustomLineItemKey(?string $customLineItemKey)
    {
        $this->customLineItemKey = $customLineItemKey;

        return $this;
    }

    /**
     * @param ?CustomLineItemRecurrenceInfoDraft $recurrenceInfo
     * @return $this
     */
    public function withRecurrenceInfo(?CustomLineItemRecurrenceInfoDraft $recurrenceInfo)
    {
        $this->recurrenceInfo = $recurrenceInfo;

        return $this;
    }

    /**
     * @deprecated use withRecurrenceInfo() instead
     * @return $this
     */
    public function withRecurrenceInfoBuilder(?CustomLineItemRecurrenceInfoDraftBuilder $recurrenceInfo)
    {
        $this->recurrenceInfo = $recurrenceInfo;

        return $this;
    }

    public function build(): CartSetCustomLineItemRecurrenceInfoAction
    {
        return new CartSetCustomLineItemRecurrenceInfoActionModel(
            $this->customLineItemId,
            $this->customLineItemKey,
            $this->recurrenceInfo instanceof CustomLineItemRecurrenceInfoDraftBuilder ? $this->recurrenceInfo->build() : $this->recurrenceInfo
        );
    }

    public static function of(): CartSetCustomLineItemRecurrenceInfoActionBuilder
    {
        return new self();
    }
}
