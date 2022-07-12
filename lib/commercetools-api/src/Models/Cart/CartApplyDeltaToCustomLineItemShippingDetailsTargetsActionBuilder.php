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
 * @implements Builder<CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction>
 */
final class CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var ?ItemShippingTargetCollection
     */
    private $targetsDelta;

    /**

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**

     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta()
    {
        return $this->targetsDelta;
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
     * @param ?ItemShippingTargetCollection $targetsDelta
     * @return $this
     */
    public function withTargetsDelta(?ItemShippingTargetCollection $targetsDelta)
    {
        $this->targetsDelta = $targetsDelta;

        return $this;
    }


    public function build(): CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction
    {
        return new CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionModel(
            $this->customLineItemId,
            $this->targetsDelta
        );
    }

    public static function of(): CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionBuilder
    {
        return new self();
    }
}
