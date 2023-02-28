<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetShippingAddressAndShippingMethodAction extends StagedOrderUpdateAction
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * <p>Polymorphic base type that represents a postal address and contact details.
     * Depending on the read or write action, it can be either <a href="ctp:api:type:Address">Address</a> or <a href="ctp:api:type:AddressDraft">AddressDraft</a> that
     * only differ in the data type for the optional <code>custom</code> field.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:ShippingMethod">ShippingMethod</a>.</p>
     *

     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * <p>Controls calculation of taxed prices for Line Items, Custom Line Items, and Shipping Methods as explained in <a href="ctp:api:type:CartTaxCalculation">Cart tax calculation</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
