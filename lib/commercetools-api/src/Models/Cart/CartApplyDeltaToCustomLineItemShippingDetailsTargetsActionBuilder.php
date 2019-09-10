<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction>
 */
final class CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ?ItemShippingTargetCollection
     */
    private $targetsDelta;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

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

    public function build(): CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction
    {
        return new CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionModel(
            $this->action,
            $this->customLineItemId,
            $this->targetsDelta
        );
    }

    public static function of(): CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionBuilder
    {
        return new self();
    }
}
