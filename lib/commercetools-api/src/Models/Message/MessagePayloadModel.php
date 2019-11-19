<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MessagePayloadModel extends JsonObjectModel implements MessagePayload
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<MessagePayload> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
        'OrderBillingAddressSet' => OrderBillingAddressSetMessagePayloadModel::class,
        'OrderCreated' => OrderCreatedMessagePayloadModel::class,
        'OrderCustomLineItemDiscountSet' => OrderCustomLineItemDiscountSetMessagePayloadModel::class,
        'OrderCustomerEmailSet' => OrderCustomerEmailSetMessagePayloadModel::class,
        'OrderCustomerSet' => OrderCustomerSetMessagePayloadModel::class,
        'OrderDeleted' => OrderDeletedMessagePayloadModel::class,
        'OrderDiscountCodeAdded' => OrderDiscountCodeAddedMessagePayloadModel::class,
        'OrderDiscountCodeRemoved' => OrderDiscountCodeRemovedMessagePayloadModel::class,
        'OrderDiscountCodeStateSet' => OrderDiscountCodeStateSetMessagePayloadModel::class,
        'OrderEditApplied' => OrderEditAppliedMessagePayloadModel::class,
        'OrderImported' => OrderImportedMessagePayloadModel::class,
        'OrderLineItemAdded' => OrderLineItemAddedMessagePayloadModel::class,
        'OrderLineItemDiscountSet' => OrderLineItemDiscountSetMessagePayloadModel::class,
        'OrderPaymentStateChanged' => OrderPaymentStateChangedMessagePayloadModel::class,
        'ReturnInfoAdded' => OrderReturnInfoAddedMessagePayloadModel::class,
        'OrderReturnShipmentStateChanged' => OrderReturnShipmentStateChangedMessagePayloadModel::class,
        'OrderShipmentStateChanged' => OrderShipmentStateChangedMessagePayloadModel::class,
        'OrderShippingAddressSet' => OrderShippingAddressSetMessagePayloadModel::class,
        'OrderShippingInfoSet' => OrderShippingInfoSetMessagePayloadModel::class,
        'OrderShippingRateInputSet' => OrderShippingRateInputSetMessagePayloadModel::class,
        'OrderStateChanged' => OrderStateChangedMessagePayloadModel::class,
        'OrderStateTransition' => OrderStateTransitionMessagePayloadModel::class,
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
        'ProductVariantDeleted' => ProductVariantDeletedMessagePayloadModel::class,
        'ReviewCreated' => ReviewCreatedMessagePayloadModel::class,
        'ReviewRatingSet' => ReviewRatingSetMessagePayloadModel::class,
        'ReviewStateTransition' => ReviewStateTransitionMessagePayloadModel::class,
        'CategoryCreated' => CategoryCreatedMessagePayloadModel::class,
        'CategorySlugChanged' => CategorySlugChangedMessagePayloadModel::class,
        'CustomLineItemStateTransition' => CustomLineItemStateTransitionMessagePayloadModel::class,
        'CustomerAddressAdded' => CustomerAddressAddedMessagePayloadModel::class,
        'CustomerAddressChanged' => CustomerAddressChangedMessagePayloadModel::class,
        'CustomerAddressRemoved' => CustomerAddressRemovedMessagePayloadModel::class,
        'CustomerCompanyNameSet' => CustomerCompanyNameSetMessagePayloadModel::class,
        'CustomerCreated' => CustomerCreatedMessagePayloadModel::class,
        'CustomerDateOfBirthSet' => CustomerDateOfBirthSetMessagePayloadModel::class,
        'CustomerEmailChanged' => CustomerEmailChangedMessagePayloadModel::class,
        'CustomerEmailVerified' => CustomerEmailVerifiedMessagePayloadModel::class,
        'CustomerGroupSet' => CustomerGroupSetMessagePayloadModel::class,
        'DeliveryAdded' => DeliveryAddedMessagePayloadModel::class,
        'DeliveryAddressSet' => DeliveryAddressSetMessagePayloadModel::class,
        'DeliveryItemsUpdated' => DeliveryItemsUpdatedMessagePayloadModel::class,
        'DeliveryRemoved' => DeliveryRemovedMessagePayloadModel::class,
        'InventoryEntryDeleted' => InventoryEntryDeletedMessagePayloadModel::class,
        'LineItemStateTransition' => LineItemStateTransitionMessagePayloadModel::class,
    ];

    public function __construct(
        string $type = null
    ) {
        $this->type = $type;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<MessagePayload>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = MessagePayload::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<MessagePayload> */
        $type = MessagePayloadModel::class;

        return $type;
    }
}
