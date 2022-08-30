<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ShippingRateInputDraft;
use Commercetools\Api\Models\Cart\ShippingRateInputDraftModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderSetShippingRateInputActionModel extends JsonObjectModel implements StagedOrderSetShippingRateInputAction
{
    public const DISCRIMINATOR_VALUE = 'setShippingRateInput';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ShippingRateInputDraft
     */
    protected $shippingRateInput;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShippingRateInputDraft $shippingRateInput = null,
        ?string $action = null
    ) {
        $this->shippingRateInput = $shippingRateInput;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     *
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT);
            if (is_null($data)) {
                return null;
            }
            $className = ShippingRateInputDraftModel::resolveDiscriminatorClass($data);
            $this->shippingRateInput = $className::of($data);
        }

        return $this->shippingRateInput;
    }


    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }
}
