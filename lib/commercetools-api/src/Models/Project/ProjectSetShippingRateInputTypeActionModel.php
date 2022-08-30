<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectSetShippingRateInputTypeActionModel extends JsonObjectModel implements ProjectSetShippingRateInputTypeAction
{
    public const DISCRIMINATOR_VALUE = 'setShippingRateInputType';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ShippingRateInputType
     */
    protected $shippingRateInputType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShippingRateInputType $shippingRateInputType = null,
        ?string $action = null
    ) {
        $this->shippingRateInputType = $shippingRateInputType;
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
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     *
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        if (is_null($this->shippingRateInputType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = ShippingRateInputTypeModel::resolveDiscriminatorClass($data);
            $this->shippingRateInputType = $className::of($data);
        }

        return $this->shippingRateInputType;
    }


    /**
     * @param ?ShippingRateInputType $shippingRateInputType
     */
    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void
    {
        $this->shippingRateInputType = $shippingRateInputType;
    }
}
