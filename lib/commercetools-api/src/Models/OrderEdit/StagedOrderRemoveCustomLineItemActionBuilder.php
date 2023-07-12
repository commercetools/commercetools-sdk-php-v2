<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderRemoveCustomLineItemAction>
 */
final class StagedOrderRemoveCustomLineItemActionBuilder implements Builder
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


    public function build(): StagedOrderRemoveCustomLineItemAction
    {
        return new StagedOrderRemoveCustomLineItemActionModel(
            $this->customLineItemId,
            $this->customLineItemKey
        );
    }

    public static function of(): StagedOrderRemoveCustomLineItemActionBuilder
    {
        return new self();
    }
}
