<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountBuilder;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryBuilder;
use Commercetools\Api\Models\Channel\Channel;
use Commercetools\Api\Models\Channel\ChannelBuilder;
use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroup;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupBuilder;
use Commercetools\Api\Models\CustomObject\CustomObject;
use Commercetools\Api\Models\CustomObject\CustomObjectBuilder;
use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\DiscountCode\DiscountCodeBuilder;
use Commercetools\Api\Models\Extension\Extension;
use Commercetools\Api\Models\Extension\ExtensionBuilder;
use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\Inventory\InventoryEntryBuilder;
use Commercetools\Api\Models\Message\CategoryCreatedMessage;
use Commercetools\Api\Models\Message\CategoryCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CategorySlugChangedMessage;
use Commercetools\Api\Models\Message\CategorySlugChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessage;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessage;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCreatedMessage;
use Commercetools\Api\Models\Message\CustomerCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessage;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerDeletedMessage;
use Commercetools\Api\Models\Message\CustomerDeletedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessage;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessage;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessage;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessage;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessage;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerTitleSetMessage;
use Commercetools\Api\Models\Message\CustomerTitleSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomLineItemStateTransitionMessage;
use Commercetools\Api\Models\Message\CustomLineItemStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\DeliveryAddedMessage;
use Commercetools\Api\Models\Message\DeliveryAddedMessageBuilder;
use Commercetools\Api\Models\Message\DeliveryAddressSetMessage;
use Commercetools\Api\Models\Message\DeliveryAddressSetMessageBuilder;
use Commercetools\Api\Models\Message\DeliveryItemsUpdatedMessage;
use Commercetools\Api\Models\Message\DeliveryItemsUpdatedMessageBuilder;
use Commercetools\Api\Models\Message\DeliveryRemovedMessage;
use Commercetools\Api\Models\Message\DeliveryRemovedMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessage;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessage;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessage;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessageBuilder;
use Commercetools\Api\Models\Message\LineItemStateTransitionMessage;
use Commercetools\Api\Models\Message\LineItemStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\Message;
use Commercetools\Api\Models\Message\MessageBuilder;
use Commercetools\Api\Models\Message\OrderBillingAddressSetMessage;
use Commercetools\Api\Models\Message\OrderBillingAddressSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderCreatedMessage;
use Commercetools\Api\Models\Message\OrderCreatedMessageBuilder;
use Commercetools\Api\Models\Message\OrderCustomerEmailSetMessage;
use Commercetools\Api\Models\Message\OrderCustomerEmailSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderCustomerGroupSetMessage;
use Commercetools\Api\Models\Message\OrderCustomerGroupSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderCustomerSetMessage;
use Commercetools\Api\Models\Message\OrderCustomerSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderCustomLineItemDiscountSetMessage;
use Commercetools\Api\Models\Message\OrderCustomLineItemDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderDeletedMessage;
use Commercetools\Api\Models\Message\OrderDeletedMessageBuilder;
use Commercetools\Api\Models\Message\OrderDiscountCodeAddedMessage;
use Commercetools\Api\Models\Message\OrderDiscountCodeAddedMessageBuilder;
use Commercetools\Api\Models\Message\OrderDiscountCodeRemovedMessage;
use Commercetools\Api\Models\Message\OrderDiscountCodeRemovedMessageBuilder;
use Commercetools\Api\Models\Message\OrderDiscountCodeStateSetMessage;
use Commercetools\Api\Models\Message\OrderDiscountCodeStateSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderEditAppliedMessage;
use Commercetools\Api\Models\Message\OrderEditAppliedMessageBuilder;
use Commercetools\Api\Models\Message\OrderImportedMessage;
use Commercetools\Api\Models\Message\OrderImportedMessageBuilder;
use Commercetools\Api\Models\Message\OrderLineItemAddedMessage;
use Commercetools\Api\Models\Message\OrderLineItemAddedMessageBuilder;
use Commercetools\Api\Models\Message\OrderLineItemDiscountSetMessage;
use Commercetools\Api\Models\Message\OrderLineItemDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderLineItemDistributionChannelSetMessage;
use Commercetools\Api\Models\Message\OrderLineItemDistributionChannelSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderLineItemRemovedMessage;
use Commercetools\Api\Models\Message\OrderLineItemRemovedMessageBuilder;
use Commercetools\Api\Models\Message\OrderPaymentStateChangedMessage;
use Commercetools\Api\Models\Message\OrderPaymentStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\OrderReturnInfoAddedMessage;
use Commercetools\Api\Models\Message\OrderReturnInfoAddedMessageBuilder;
use Commercetools\Api\Models\Message\OrderReturnInfoSetMessage;
use Commercetools\Api\Models\Message\OrderReturnInfoSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderReturnShipmentStateChangedMessage;
use Commercetools\Api\Models\Message\OrderReturnShipmentStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\OrderShipmentStateChangedMessage;
use Commercetools\Api\Models\Message\OrderShipmentStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\OrderShippingAddressSetMessage;
use Commercetools\Api\Models\Message\OrderShippingAddressSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderShippingInfoSetMessage;
use Commercetools\Api\Models\Message\OrderShippingInfoSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderShippingRateInputSetMessage;
use Commercetools\Api\Models\Message\OrderShippingRateInputSetMessageBuilder;
use Commercetools\Api\Models\Message\OrderStateChangedMessage;
use Commercetools\Api\Models\Message\OrderStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\OrderStateTransitionMessage;
use Commercetools\Api\Models\Message\OrderStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\OrderStoreSetMessage;
use Commercetools\Api\Models\Message\OrderStoreSetMessageBuilder;
use Commercetools\Api\Models\Message\ParcelAddedToDeliveryMessage;
use Commercetools\Api\Models\Message\ParcelAddedToDeliveryMessageBuilder;
use Commercetools\Api\Models\Message\ParcelItemsUpdatedMessage;
use Commercetools\Api\Models\Message\ParcelItemsUpdatedMessageBuilder;
use Commercetools\Api\Models\Message\ParcelMeasurementsUpdatedMessage;
use Commercetools\Api\Models\Message\ParcelMeasurementsUpdatedMessageBuilder;
use Commercetools\Api\Models\Message\ParcelRemovedFromDeliveryMessage;
use Commercetools\Api\Models\Message\ParcelRemovedFromDeliveryMessageBuilder;
use Commercetools\Api\Models\Message\ParcelTrackingDataUpdatedMessage;
use Commercetools\Api\Models\Message\ParcelTrackingDataUpdatedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentCreatedMessage;
use Commercetools\Api\Models\Message\PaymentCreatedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentInteractionAddedMessage;
use Commercetools\Api\Models\Message\PaymentInteractionAddedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentStatusInterfaceCodeSetMessage;
use Commercetools\Api\Models\Message\PaymentStatusInterfaceCodeSetMessageBuilder;
use Commercetools\Api\Models\Message\PaymentStatusStateTransitionMessage;
use Commercetools\Api\Models\Message\PaymentStatusStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\PaymentTransactionAddedMessage;
use Commercetools\Api\Models\Message\PaymentTransactionAddedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentTransactionStateChangedMessage;
use Commercetools\Api\Models\Message\PaymentTransactionStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductAddedToCategoryMessage;
use Commercetools\Api\Models\Message\ProductAddedToCategoryMessageBuilder;
use Commercetools\Api\Models\Message\ProductCreatedMessage;
use Commercetools\Api\Models\Message\ProductCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ProductDeletedMessage;
use Commercetools\Api\Models\Message\ProductDeletedMessageBuilder;
use Commercetools\Api\Models\Message\ProductImageAddedMessage;
use Commercetools\Api\Models\Message\ProductImageAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessage;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPublishedMessage;
use Commercetools\Api\Models\Message\ProductPublishedMessageBuilder;
use Commercetools\Api\Models\Message\ProductRemovedFromCategoryMessage;
use Commercetools\Api\Models\Message\ProductRemovedFromCategoryMessageBuilder;
use Commercetools\Api\Models\Message\ProductRevertedStagedChangesMessage;
use Commercetools\Api\Models\Message\ProductRevertedStagedChangesMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionCreatedMessage;
use Commercetools\Api\Models\Message\ProductSelectionCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionDeletedMessage;
use Commercetools\Api\Models\Message\ProductSelectionDeletedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionProductAddedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSlugChangedMessage;
use Commercetools\Api\Models\Message\ProductSlugChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductStateTransitionMessage;
use Commercetools\Api\Models\Message\ProductStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\ProductUnpublishedMessage;
use Commercetools\Api\Models\Message\ProductUnpublishedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantAddedMessage;
use Commercetools\Api\Models\Message\ProductVariantAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessage;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessageBuilder;
use Commercetools\Api\Models\Message\ReviewCreatedMessage;
use Commercetools\Api\Models\Message\ReviewCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ReviewRatingSetMessage;
use Commercetools\Api\Models\Message\ReviewRatingSetMessageBuilder;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessage;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\StoreCreatedMessage;
use Commercetools\Api\Models\Message\StoreCreatedMessageBuilder;
use Commercetools\Api\Models\Message\StoreDeletedMessage;
use Commercetools\Api\Models\Message\StoreDeletedMessageBuilder;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessage;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessageBuilder;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderBuilder;
use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\OrderEdit\OrderEditBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrder;
use Commercetools\Api\Models\OrderEdit\StagedOrderBuilder;
use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\Payment\PaymentBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductBuilder;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionBuilder;
use Commercetools\Api\Models\ProductDiscount\ProductDiscount;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountBuilder;
use Commercetools\Api\Models\ProductSelection\ProductSelection;
use Commercetools\Api\Models\ProductSelection\ProductSelectionBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeBuilder;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethod;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodBuilder;
use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\ShoppingList\ShoppingListBuilder;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\State\StateBuilder;
use Commercetools\Api\Models\Store\Store;
use Commercetools\Api\Models\Store\StoreBuilder;
use Commercetools\Api\Models\Subscription\Subscription;
use Commercetools\Api\Models\Subscription\SubscriptionBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\TaxCategory\TaxCategoryBuilder;
use Commercetools\Api\Models\Type\Type;
use Commercetools\Api\Models\Type\TypeBuilder;
use Commercetools\Api\Models\Zone\Zone;
use Commercetools\Api\Models\Zone\ZoneBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<BaseResource>
 */
final class BaseResourceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
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

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }


    public function build(): BaseResource
    {
        return new BaseResourceModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt
        );
    }

    public static function of(): BaseResourceBuilder
    {
        return new self();
    }
}
