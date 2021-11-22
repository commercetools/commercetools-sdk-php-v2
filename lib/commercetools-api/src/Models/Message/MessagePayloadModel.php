<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MessagePayloadModel extends JsonObjectModel implements MessagePayload
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<MessagePayload> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'CategoryCreated' => CategoryCreatedMessagePayloadModel::class,
       'CategorySlugChanged' => CategorySlugChangedMessagePayloadModel::class,
       'CustomLineItemStateTransition' => CustomLineItemStateTransitionMessagePayloadModel::class,
       'CustomerAddressAdded' => CustomerAddressAddedMessagePayloadModel::class,
       'CustomerAddressChanged' => CustomerAddressChangedMessagePayloadModel::class,
       'CustomerAddressRemoved' => CustomerAddressRemovedMessagePayloadModel::class,
       'CustomerCompanyNameSet' => CustomerCompanyNameSetMessagePayloadModel::class,
       'CustomerCreated' => CustomerCreatedMessagePayloadModel::class,
       'CustomerDateOfBirthSet' => CustomerDateOfBirthSetMessagePayloadModel::class,
       'CustomerDeleted' => CustomerDeletedMessagePayloadModel::class,
       'CustomerEmailChanged' => CustomerEmailChangedMessagePayloadModel::class,
       'CustomerEmailVerified' => CustomerEmailVerifiedMessagePayloadModel::class,
       'CustomerFirstNameSet' => CustomerFirstNameSetMessagePayloadModel::class,
       'CustomerGroupSet' => CustomerGroupSetMessagePayloadModel::class,
       'CustomerLastNameSet' => CustomerLastNameSetMessagePayloadModel::class,
       'CustomerPasswordUpdated' => CustomerPasswordUpdatedMessagePayloadModel::class,
       'CustomerTitleSet' => CustomerTitleSetMessagePayloadModel::class,
       'DeliveryAdded' => DeliveryAddedMessagePayloadModel::class,
       'DeliveryAddressSet' => DeliveryAddressSetMessagePayloadModel::class,
       'DeliveryItemsUpdated' => DeliveryItemsUpdatedMessagePayloadModel::class,
       'DeliveryRemoved' => DeliveryRemovedMessagePayloadModel::class,
       'InventoryEntryCreated' => InventoryEntryCreatedMessagePayloadModel::class,
       'InventoryEntryDeleted' => InventoryEntryDeletedMessagePayloadModel::class,
       'InventoryEntryQuantitySet' => InventoryEntryQuantitySetMessagePayloadModel::class,
       'LineItemStateTransition' => LineItemStateTransitionMessagePayloadModel::class,
       'OrderBillingAddressSet' => OrderBillingAddressSetMessagePayloadModel::class,
       'OrderCreated' => OrderCreatedMessagePayloadModel::class,
       'OrderCustomLineItemDiscountSet' => OrderCustomLineItemDiscountSetMessagePayloadModel::class,
       'OrderCustomerEmailSet' => OrderCustomerEmailSetMessagePayloadModel::class,
       'OrderCustomerGroupSet' => OrderCustomerGroupSetMessagePayloadModel::class,
       'OrderCustomerSet' => OrderCustomerSetMessagePayloadModel::class,
       'OrderDeleted' => OrderDeletedMessagePayloadModel::class,
       'OrderDiscountCodeAdded' => OrderDiscountCodeAddedMessagePayloadModel::class,
       'OrderDiscountCodeRemoved' => OrderDiscountCodeRemovedMessagePayloadModel::class,
       'OrderDiscountCodeStateSet' => OrderDiscountCodeStateSetMessagePayloadModel::class,
       'OrderEditApplied' => OrderEditAppliedMessagePayloadModel::class,
       'OrderImported' => OrderImportedMessagePayloadModel::class,
       'OrderLineItemAdded' => OrderLineItemAddedMessagePayloadModel::class,
       'OrderLineItemDiscountSet' => OrderLineItemDiscountSetMessagePayloadModel::class,
       'OrderLineItemRemoved' => OrderLineItemRemovedMessagePayloadModel::class,
       'OrderPaymentStateChanged' => OrderPaymentStateChangedMessagePayloadModel::class,
       'OrderReturnShipmentStateChanged' => OrderReturnShipmentStateChangedMessagePayloadModel::class,
       'OrderShipmentStateChanged' => OrderShipmentStateChangedMessagePayloadModel::class,
       'OrderShippingAddressSet' => OrderShippingAddressSetMessagePayloadModel::class,
       'OrderShippingInfoSet' => OrderShippingInfoSetMessagePayloadModel::class,
       'OrderShippingRateInputSet' => OrderShippingRateInputSetMessagePayloadModel::class,
       'OrderStateChanged' => OrderStateChangedMessagePayloadModel::class,
       'OrderStateTransition' => OrderStateTransitionMessagePayloadModel::class,
       'OrderStoreSet' => OrderStoreSetMessagePayloadModel::class,
       'ParcelAddedToDelivery' => ParcelAddedToDeliveryMessagePayloadModel::class,
       'ParcelItemsUpdated' => ParcelItemsUpdatedMessagePayloadModel::class,
       'ParcelMeasurementsUpdated' => ParcelMeasurementsUpdatedMessagePayloadModel::class,
       'ParcelRemovedFromDelivery' => ParcelRemovedFromDeliveryMessagePayloadModel::class,
       'ParcelTrackingDataUpdated' => ParcelTrackingDataUpdatedMessagePayloadModel::class,
       'PaymentCreated' => PaymentCreatedMessagePayloadModel::class,
       'PaymentInteractionAdded' => PaymentInteractionAddedMessagePayloadModel::class,
       'PaymentStatusInterfaceCodeSet' => PaymentStatusInterfaceCodeSetMessagePayloadModel::class,
       'PaymentStatusStateTransition' => PaymentStatusStateTransitionMessagePayloadModel::class,
       'PaymentTransactionAdded' => PaymentTransactionAddedMessagePayloadModel::class,
       'PaymentTransactionStateChanged' => PaymentTransactionStateChangedMessagePayloadModel::class,
       'ProductAddedToCategory' => ProductAddedToCategoryMessagePayloadModel::class,
       'ProductCreated' => ProductCreatedMessagePayloadModel::class,
       'ProductDeleted' => ProductDeletedMessagePayloadModel::class,
       'ProductImageAdded' => ProductImageAddedMessagePayloadModel::class,
       'ProductPriceDiscountsSet' => ProductPriceDiscountsSetMessagePayloadModel::class,
       'ProductPriceExternalDiscountSet' => ProductPriceExternalDiscountSetMessagePayloadModel::class,
       'ProductPublished' => ProductPublishedMessagePayloadModel::class,
       'ProductRemovedFromCategory' => ProductRemovedFromCategoryMessagePayloadModel::class,
       'ProductRevertedStagedChanges' => ProductRevertedStagedChangesMessagePayloadModel::class,
       'ProductSlugChanged' => ProductSlugChangedMessagePayloadModel::class,
       'ProductStateTransition' => ProductStateTransitionMessagePayloadModel::class,
       'ProductUnpublished' => ProductUnpublishedMessagePayloadModel::class,
       'ProductVariantAdded' => ProductVariantAddedMessagePayloadModel::class,
       'ProductVariantDeleted' => ProductVariantDeletedMessagePayloadModel::class,
       'ReturnInfoAdded' => OrderReturnInfoAddedMessagePayloadModel::class,
       'ReturnInfoSet' => OrderReturnInfoSetMessagePayloadModel::class,
       'ReviewCreated' => ReviewCreatedMessagePayloadModel::class,
       'ReviewRatingSet' => ReviewRatingSetMessagePayloadModel::class,
       'ReviewStateTransition' => ReviewStateTransitionMessagePayloadModel::class,
       'ShoppingListStoreSet' => ShoppingListStoreSetMessagePayloadModel::class,
       'StoreCreated' => StoreCreatedMessagePayloadModel::class,
       'StoreDeleted' => StoreDeletedMessagePayloadModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
    ) {
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }





    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<MessagePayload>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = MessagePayload::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<MessagePayload> */
        $type = MessagePayloadModel::class;
        return $type;
    }
}
