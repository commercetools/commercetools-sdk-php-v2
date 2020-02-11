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
 * @implements Builder<CartSetShippingRateInputAction>
 */
final class CartSetShippingRateInputActionBuilder implements Builder
{
    /**
     * @var null|ShippingRateInputDraft|ShippingRateInputDraftBuilder
     */
    private $shippingRateInput;

    /**
     * <p>Based on the definition of ShippingRateInputType.
     * If CartClassification is defined, it must be ClassificationShippingRateInput.
     * If CartScore is defined, it must be ScoreShippingRateInput.
     * Otherwise it can not bet set.</p>
     *
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInputDraft $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputDraftBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    public function build(): CartSetShippingRateInputAction
    {
        return new CartSetShippingRateInputActionModel(
            $this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput
        );
    }

    public static function of(): CartSetShippingRateInputActionBuilder
    {
        return new self();
    }
}
