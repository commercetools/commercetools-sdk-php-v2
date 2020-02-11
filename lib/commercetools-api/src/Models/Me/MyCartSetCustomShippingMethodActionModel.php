<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftModel;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;

final class MyCartSetCustomShippingMethodActionModel extends JsonObjectModel implements MyCartSetCustomShippingMethodAction
{
    public const DISCRIMINATOR_VALUE = 'setCustomShippingMethod';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $shippingMethodName;

    /**
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;

    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;


    public function __construct(
        string $shippingMethodName = null,
        ShippingRateDraft $shippingRate = null,
        TaxCategoryResourceIdentifier $taxCategory = null,
        ExternalTaxRateDraft $externalTaxRate = null
    ) {
        $this->shippingMethodName = $shippingMethodName;
        $this->shippingRate = $shippingRate;
        $this->taxCategory = $taxCategory;
        $this->externalTaxRate = $externalTaxRate;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getShippingMethodName()
    {
        if (is_null($this->shippingMethodName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartSetCustomShippingMethodAction::FIELD_SHIPPING_METHOD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodName = (string) $data;
        }

        return $this->shippingMethodName;
    }

    /**
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCartSetCustomShippingMethodAction::FIELD_SHIPPING_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRate = ShippingRateDraftModel::of($data);
        }

        return $this->shippingRate;
    }

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCartSetCustomShippingMethodAction::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCartSetCustomShippingMethodAction::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }

    public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }

    public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }



}
