<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\ItemShippingTargetCollection;

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
