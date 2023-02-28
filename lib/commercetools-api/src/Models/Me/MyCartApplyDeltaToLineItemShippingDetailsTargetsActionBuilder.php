<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ItemShippingTargetCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartApplyDeltaToLineItemShippingDetailsTargetsAction>
 */
final class MyCartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?ItemShippingTargetCollection
     */
    private $targetsDelta;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>Using positive or negative quantities increases or decreases the number of items shipped to an address.</p>
     *

     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta()
    {
        return $this->targetsDelta;
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
     * @param ?ItemShippingTargetCollection $targetsDelta
     * @return $this
     */
    public function withTargetsDelta(?ItemShippingTargetCollection $targetsDelta)
    {
        $this->targetsDelta = $targetsDelta;

        return $this;
    }


    public function build(): MyCartApplyDeltaToLineItemShippingDetailsTargetsAction
    {
        return new MyCartApplyDeltaToLineItemShippingDetailsTargetsActionModel(
            $this->lineItemId,
            $this->targetsDelta
        );
    }

    public static function of(): MyCartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder
    {
        return new self();
    }
}
