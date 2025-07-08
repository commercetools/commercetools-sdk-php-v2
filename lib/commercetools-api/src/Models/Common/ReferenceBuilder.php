<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\AssociateRole\AssociateRoleReference;
use Commercetools\Api\Models\AssociateRole\AssociateRoleReferenceBuilder;
use Commercetools\Api\Models\AttributeGroup\AttributeGroupReference;
use Commercetools\Api\Models\AttributeGroup\AttributeGroupReferenceBuilder;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitReferenceBuilder;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceBuilder;
use Commercetools\Api\Models\Cart\DirectDiscountReference;
use Commercetools\Api\Models\Cart\DirectDiscountReferenceBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceBuilder;
use Commercetools\Api\Models\Category\CategoryReference;
use Commercetools\Api\Models\Category\CategoryReferenceBuilder;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\Customer\CustomerEmailTokenReference;
use Commercetools\Api\Models\Customer\CustomerEmailTokenReferenceBuilder;
use Commercetools\Api\Models\Customer\CustomerPasswordTokenReference;
use Commercetools\Api\Models\Customer\CustomerPasswordTokenReferenceBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\CustomObject\CustomObjectReference;
use Commercetools\Api\Models\CustomObject\CustomObjectReferenceBuilder;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupReference;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupReferenceBuilder;
use Commercetools\Api\Models\Inventory\InventoryEntryReference;
use Commercetools\Api\Models\Inventory\InventoryEntryReferenceBuilder;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Api\Models\OrderEdit\OrderEditReferenceBuilder;
use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Api\Models\Payment\PaymentReferenceBuilder;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodReference;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodReferenceBuilder;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceBuilder;
use Commercetools\Api\Models\ProductSelection\ProductSelectionReference;
use Commercetools\Api\Models\ProductSelection\ProductSelectionReferenceBuilder;
use Commercetools\Api\Models\ProductTailoring\ProductTailoringReference;
use Commercetools\Api\Models\ProductTailoring\ProductTailoringReferenceBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceBuilder;
use Commercetools\Api\Models\Quote\QuoteReference;
use Commercetools\Api\Models\Quote\QuoteReferenceBuilder;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReference;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReferenceBuilder;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReference;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReferenceBuilder;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderReference;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderReferenceBuilder;
use Commercetools\Api\Models\Review\ReviewReference;
use Commercetools\Api\Models\Review\ReviewReferenceBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceBuilder;
use Commercetools\Api\Models\ShoppingList\ShoppingListReference;
use Commercetools\Api\Models\ShoppingList\ShoppingListReferenceBuilder;
use Commercetools\Api\Models\StagedQuote\StagedQuoteReference;
use Commercetools\Api\Models\StagedQuote\StagedQuoteReferenceBuilder;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceReference;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Store\StoreReference;
use Commercetools\Api\Models\Store\StoreReferenceBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceBuilder;
use Commercetools\Api\Models\Type\TypeReference;
use Commercetools\Api\Models\Type\TypeReferenceBuilder;
use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Api\Models\Zone\ZoneReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Reference>
 */
final class ReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**
     * <p>Unique ID of the referenced resource.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }


    public function build(): Reference
    {
        return new ReferenceModel(
            $this->id
        );
    }

    public static function of(): ReferenceBuilder
    {
        return new self();
    }
}
