<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartApplyDeltaToLineItemShippingDetailsTargetsAction>
 */
final class CartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder implements Builder
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
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta()
    {
        return $this->targetsDelta;
    }

    /**
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTargetsDelta(?ItemShippingTargetCollection $targetsDelta)
    {
        $this->targetsDelta = $targetsDelta;

        return $this;
    }


    public function build(): CartApplyDeltaToLineItemShippingDetailsTargetsAction
    {
        return new CartApplyDeltaToLineItemShippingDetailsTargetsActionModel(
            $this->lineItemId,
            $this->targetsDelta
        );
    }

    public static function of(): CartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder
    {
        return new self();
    }
}
