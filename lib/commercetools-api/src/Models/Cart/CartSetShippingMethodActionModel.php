<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartSetShippingMethodActionModel extends JsonObjectModel implements CartSetShippingMethodAction
{
    public const DISCRIMINATOR_VALUE = 'setShippingMethod';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

    /**
     *
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShippingMethodResourceIdentifier $shippingMethod = null,
        ?ExternalTaxRateDraft $externalTaxRate = null,
        ?string $action = null
    ) {
        $this->shippingMethod = $shippingMethod;
        $this->externalTaxRate = $externalTaxRate;
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
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     * <p>If the referenced Shipping Method is inactive, or has a predicate that does not match the Cart, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *
     *
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->shippingMethod = ShippingMethodResourceIdentifierModel::of($data);
        }

        return $this->shippingMethod;
    }

    /**
     * <p>An external Tax Rate can be set if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }


    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
}
