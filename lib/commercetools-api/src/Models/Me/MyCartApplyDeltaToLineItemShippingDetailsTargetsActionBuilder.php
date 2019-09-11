<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ItemShippingTargetCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCartApplyDeltaToLineItemShippingDetailsTargetsAction>
 */
final class MyCartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $lineItemId;

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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

    public function build(): MyCartApplyDeltaToLineItemShippingDetailsTargetsAction
    {
        return new MyCartApplyDeltaToLineItemShippingDetailsTargetsActionModel(
            $this->action,
            $this->lineItemId,
            $this->targetsDelta
        );
    }

    public static function of(): MyCartApplyDeltaToLineItemShippingDetailsTargetsActionBuilder
    {
        return new self();
    }
}
