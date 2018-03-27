<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Reference;
use Commercetools\Types;

interface Message extends JsonObject {
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'CategoryCreated' => Types\Message\CategoryCreatedMessage::class,
        'CategorySlugChanged' => Types\Message\CategorySlugChangedMessage::class,
        'CustomLineItemStateTransition' => Types\Message\CustomLineItemStateTransitionMessage::class,
        'CustomerCreated' => Types\Message\CustomerCreatedMessage::class,
        'DeliveryAdded' => Types\Message\DeliveryAddedMessage::class,
        'DeliveryAddressSet' => Types\Message\DeliveryAddressSetMessage::class,
        'DeliveryItemsUpdated' => Types\Message\DeliveryItemsUpdatedMessage::class,
        'DeliveryRemoved' => Types\Message\DeliveryRemovedMessage::class,
        'InventoryEntryDeleted' => Types\Message\InventoryEntryDeletedMessage::class,
        'LineItemStateTransition' => Types\Message\LineItemStateTransitionMessage::class,
        'OrderBillingAddressSet' => Types\Message\OrderBillingAddressSetMessage::class,
        'OrderCreated' => Types\Message\OrderCreatedMessage::class,
        'OrderCustomerEmailSet' => Types\Message\OrderCustomerEmailSetMessage::class,
        'OrderImported' => Types\Message\OrderImportedMessage::class,
        'OrderPaymentStateChanged' => Types\Message\OrderPaymentChangedMessage::class,
        'ReturnInfoAdded' => Types\Message\OrderReturnInfoAddedMessage::class,
        'OrderReturnShipmentStateChanged' => Types\Message\OrderReturnShipmentStateChangedMessage::class,
        'OrderShipmentStateChanged' => Types\Message\OrderShipmentStateChangedMessage::class,
        'OrderShippingAddressSet' => Types\Message\OrderShippingAddressSetMessage::class,
        'OrderStateChanged' => Types\Message\OrderStateChangedMessage::class,
        'OrderStateTransition' => Types\Message\OrderStateTransitionMessage::class,
        'ParcelAddedToDelivery' => Types\Message\ParcelAddedToDeliveryMessage::class,
        'ParcelItemsUpdated' => Types\Message\ParcelItemsUpdatedMessage::class,
        'ParcelMeasurementsUpdated' => Types\Message\ParcelMeasurementsUpdatedMessage::class,
        'ParcelRemovedFromDelivery' => Types\Message\ParcelRemovedFromDeliveryMessage::class,
        'ParcelTrackingDataUpdated' => Types\Message\ParcelTrackingDataUpdatedMessage::class,
        'PaymentCreated' => Types\Message\PaymentCreatedMessage::class,
        'PaymentInteractionAdded' => Types\Message\PaymentInteractionAddedMessage::class,
        'PaymentStatusInterfaceCodeSet' => Types\Message\PaymentStatusInterfaceCodeSetMessage::class,
        'PaymentStatusStateTransition' => Types\Message\PaymentStatusStateTransitionMessage::class,
        'PaymentTransactionAdded' => Types\Message\PaymentTransactionAddedMessage::class,
        'PaymentTransactionStateChanged' => Types\Message\PaymentTransactionStateChangedMessage::class,
        'ProductCreated' => Types\Message\ProductCreatedMessage::class,
        'ProductDeleted' => Types\Message\ProductDeletedMessage::class,
        'ProductImageAdded' => Types\Message\ProductImageAddedMessage::class,
        'ProductPublished' => Types\Message\ProductPublishedMessage::class,
        'ProductRevertedStagedChanges' => Types\Message\ProductRevertedStagedChangesMessage::class,
        'ProductSlugChanged' => Types\Message\ProductSlugChangedMessage::class,
        'ProductStateTransition' => Types\Message\ProductStateTransitionMessage::class,
        'ProductUnpublished' => Types\Message\ProductUnpublishedMessage::class,
        'ProductVariantDeleted' => Types\Message\ProductVariantDeletedMessage::class,
        'ReviewCreated' => Types\Message\ReviewCreatedMessage::class,
        'ReviewRatingSet' => Types\Message\ReviewRatingSetMessage::class,
        'ReviewStateTransition' => Types\Message\ReviewStateTransitionMessage::class,

    ];

    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_VERSION = 'resourceVersion';
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return int
     */
    public function getSequenceNumber();

    /**
     * @return Reference
     */
    public function getResource();

    /**
     * @return int
     */
    public function getResourceVersion();

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param \DateTimeImmutable $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * @param \DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function setLastModifiedAt($lastModifiedAt);

    /**
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber(int $sequenceNumber);

    /**
     * @param Reference $resource
     * @return $this
     */
    public function setResource(Reference $resource);

    /**
     * @param int $resourceVersion
     * @return $this
     */
    public function setResourceVersion(int $resourceVersion);

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}
