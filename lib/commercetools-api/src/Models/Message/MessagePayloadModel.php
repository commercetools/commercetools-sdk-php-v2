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
     *
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<MessagePayload> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'ApprovalFlowApproved' => ApprovalFlowApprovedMessagePayloadModel::class,
       'ApprovalFlowCompleted' => ApprovalFlowCompletedMessagePayloadModel::class,
       'ApprovalFlowCreated' => ApprovalFlowCreatedMessagePayloadModel::class,
       'ApprovalFlowRejected' => ApprovalFlowRejectedMessagePayloadModel::class,
       'ApprovalRuleApproversSet' => ApprovalRuleApproversSetMessagePayloadModel::class,
       'ApprovalRuleCreated' => ApprovalRuleCreatedMessagePayloadModel::class,
       'ApprovalRuleDescriptionSet' => ApprovalRuleDescriptionSetMessagePayloadModel::class,
       'ApprovalRuleKeySet' => ApprovalRuleKeySetMessagePayloadModel::class,
       'ApprovalRuleNameSet' => ApprovalRuleNameSetMessagePayloadModel::class,
       'ApprovalRulePredicateSet' => ApprovalRulePredicateSetMessagePayloadModel::class,
       'ApprovalRuleRequestersSet' => ApprovalRuleRequestersSetMessagePayloadModel::class,
       'ApprovalRuleStatusSet' => ApprovalRuleStatusSetMessagePayloadModel::class,
       'AssociateRoleBuyerAssignableChanged' => AssociateRoleBuyerAssignableChangedMessagePayloadModel::class,
       'AssociateRoleCreated' => AssociateRoleCreatedMessagePayloadModel::class,
       'AssociateRoleDeleted' => AssociateRoleDeletedMessagePayloadModel::class,
       'AssociateRoleNameSet' => AssociateRoleNameChangedMessagePayloadModel::class,
       'AssociateRolePermissionAdded' => AssociateRolePermissionAddedMessagePayloadModel::class,
       'AssociateRolePermissionRemoved' => AssociateRolePermissionRemovedMessagePayloadModel::class,
       'AssociateRolePermissionsSet' => AssociateRolePermissionsSetMessagePayloadModel::class,
       'BusinessUnitAddressAdded' => BusinessUnitAddressAddedMessagePayloadModel::class,
       'BusinessUnitAddressChanged' => BusinessUnitAddressChangedMessagePayloadModel::class,
       'BusinessUnitAddressCustomFieldAdded' => BusinessUnitAddressCustomFieldAddedMessagePayloadModel::class,
       'BusinessUnitAddressCustomFieldChanged' => BusinessUnitAddressCustomFieldChangedMessagePayloadModel::class,
       'BusinessUnitAddressCustomFieldRemoved' => BusinessUnitAddressCustomFieldRemovedMessagePayloadModel::class,
       'BusinessUnitAddressCustomTypeRemoved' => BusinessUnitAddressCustomTypeRemovedMessagePayloadModel::class,
       'BusinessUnitAddressCustomTypeSet' => BusinessUnitAddressCustomTypeSetMessagePayloadModel::class,
       'BusinessUnitAddressRemoved' => BusinessUnitAddressRemovedMessagePayloadModel::class,
       'BusinessUnitApprovalRuleModeChanged' => BusinessUnitApprovalRuleModeChangedMessagePayloadModel::class,
       'BusinessUnitAssociateAdded' => BusinessUnitAssociateAddedMessagePayloadModel::class,
       'BusinessUnitAssociateChanged' => BusinessUnitAssociateChangedMessagePayloadModel::class,
       'BusinessUnitAssociateModeChanged' => BusinessUnitAssociateModeChangedMessagePayloadModel::class,
       'BusinessUnitAssociateRemoved' => BusinessUnitAssociateRemovedMessagePayloadModel::class,
       'BusinessUnitAssociatesSet' => BusinessUnitAssociatesSetMessagePayloadModel::class,
       'BusinessUnitBillingAddressAdded' => BusinessUnitBillingAddressAddedMessagePayloadModel::class,
       'BusinessUnitBillingAddressRemoved' => BusinessUnitBillingAddressRemovedMessagePayloadModel::class,
       'BusinessUnitContactEmailSet' => BusinessUnitContactEmailSetMessagePayloadModel::class,
       'BusinessUnitCreated' => BusinessUnitCreatedMessagePayloadModel::class,
       'BusinessUnitCustomFieldAdded' => BusinessUnitCustomFieldAddedMessagePayloadModel::class,
       'BusinessUnitCustomFieldChanged' => BusinessUnitCustomFieldChangedMessagePayloadModel::class,
       'BusinessUnitCustomFieldRemoved' => BusinessUnitCustomFieldRemovedMessagePayloadModel::class,
       'BusinessUnitCustomTypeRemoved' => BusinessUnitCustomTypeRemovedMessagePayloadModel::class,
       'BusinessUnitCustomTypeSet' => BusinessUnitCustomTypeSetMessagePayloadModel::class,
       'BusinessUnitDefaultBillingAddressSet' => BusinessUnitDefaultBillingAddressSetMessagePayloadModel::class,
       'BusinessUnitDefaultShippingAddressSet' => BusinessUnitDefaultShippingAddressSetMessagePayloadModel::class,
       'BusinessUnitDeleted' => BusinessUnitDeletedMessagePayloadModel::class,
       'BusinessUnitNameChanged' => BusinessUnitNameChangedMessagePayloadModel::class,
       'BusinessUnitParentChanged' => BusinessUnitParentChangedMessagePayloadModel::class,
       'BusinessUnitShippingAddressAdded' => BusinessUnitShippingAddressAddedMessagePayloadModel::class,
       'BusinessUnitShippingAddressRemoved' => BusinessUnitShippingAddressRemovedMessagePayloadModel::class,
       'BusinessUnitStatusChanged' => BusinessUnitStatusChangedMessagePayloadModel::class,
       'BusinessUnitStoreAdded' => BusinessUnitStoreAddedMessagePayloadModel::class,
       'BusinessUnitStoreModeChanged' => BusinessUnitStoreModeChangedMessagePayloadModel::class,
       'BusinessUnitStoreRemoved' => BusinessUnitStoreRemovedMessagePayloadModel::class,
       'BusinessUnitStoresSet' => BusinessUnitStoresSetMessagePayloadModel::class,
       'CartDiscountCreated' => CartDiscountCreatedMessagePayloadModel::class,
       'CartDiscountDeleted' => CartDiscountDeletedMessagePayloadModel::class,
       'CartDiscountStoreAdded' => CartDiscountStoreAddedMessagePayloadModel::class,
       'CartDiscountStoreRemoved' => CartDiscountStoreRemovedMessagePayloadModel::class,
       'CartDiscountStoresSet' => CartDiscountStoresSetMessagePayloadModel::class,
       'CategoryCreated' => CategoryCreatedMessagePayloadModel::class,
       'CategorySlugChanged' => CategorySlugChangedMessagePayloadModel::class,
       'CustomLineItemStateTransition' => CustomLineItemStateTransitionMessagePayloadModel::class,
       'CustomerAddressAdded' => CustomerAddressAddedMessagePayloadModel::class,
       'CustomerAddressChanged' => CustomerAddressChangedMessagePayloadModel::class,
       'CustomerAddressCustomFieldAdded' => CustomerAddressCustomFieldAddedMessagePayloadModel::class,
       'CustomerAddressCustomFieldChanged' => CustomerAddressCustomFieldChangedMessagePayloadModel::class,
       'CustomerAddressCustomFieldRemoved' => CustomerAddressCustomFieldRemovedMessagePayloadModel::class,
       'CustomerAddressCustomTypeRemoved' => CustomerAddressCustomTypeRemovedMessagePayloadModel::class,
       'CustomerAddressCustomTypeSet' => CustomerAddressCustomTypeSetMessagePayloadModel::class,
       'CustomerAddressRemoved' => CustomerAddressRemovedMessagePayloadModel::class,
       'CustomerCompanyNameSet' => CustomerCompanyNameSetMessagePayloadModel::class,
       'CustomerCreated' => CustomerCreatedMessagePayloadModel::class,
       'CustomerCustomFieldAdded' => CustomerCustomFieldAddedMessagePayloadModel::class,
       'CustomerCustomFieldChanged' => CustomerCustomFieldChangedMessagePayloadModel::class,
       'CustomerCustomFieldRemoved' => CustomerCustomFieldRemovedMessagePayloadModel::class,
       'CustomerCustomTypeRemoved' => CustomerCustomTypeRemovedMessagePayloadModel::class,
       'CustomerCustomTypeSet' => CustomerCustomTypeSetMessagePayloadModel::class,
       'CustomerDateOfBirthSet' => CustomerDateOfBirthSetMessagePayloadModel::class,
       'CustomerDeleted' => CustomerDeletedMessagePayloadModel::class,
       'CustomerEmailChanged' => CustomerEmailChangedMessagePayloadModel::class,
       'CustomerEmailTokenCreated' => CustomerEmailTokenCreatedMessagePayloadModel::class,
       'CustomerEmailVerified' => CustomerEmailVerifiedMessagePayloadModel::class,
       'CustomerFirstNameSet' => CustomerFirstNameSetMessagePayloadModel::class,
       'CustomerGroupAssignmentAdded' => CustomerGroupAssignmentAddedMessagePayloadModel::class,
       'CustomerGroupAssignmentRemoved' => CustomerGroupAssignmentRemovedMessagePayloadModel::class,
       'CustomerGroupAssignmentsSet' => CustomerGroupAssignmentsSetMessagePayloadModel::class,
       'CustomerGroupCustomFieldAdded' => CustomerGroupCustomFieldAddedMessagePayloadModel::class,
       'CustomerGroupCustomFieldChanged' => CustomerGroupCustomFieldChangedMessagePayloadModel::class,
       'CustomerGroupCustomFieldRemoved' => CustomerGroupCustomFieldRemovedMessagePayloadModel::class,
       'CustomerGroupCustomTypeRemoved' => CustomerGroupCustomTypeRemovedMessagePayloadModel::class,
       'CustomerGroupCustomTypeSet' => CustomerGroupCustomTypeSetMessagePayloadModel::class,
       'CustomerGroupSet' => CustomerGroupSetMessagePayloadModel::class,
       'CustomerLastNameSet' => CustomerLastNameSetMessagePayloadModel::class,
       'CustomerPasswordTokenCreated' => CustomerPasswordTokenCreatedMessagePayloadModel::class,
       'CustomerPasswordUpdated' => CustomerPasswordUpdatedMessagePayloadModel::class,
       'CustomerTitleSet' => CustomerTitleSetMessagePayloadModel::class,
       'DeliveryAdded' => DeliveryAddedMessagePayloadModel::class,
       'DeliveryAddressSet' => DeliveryAddressSetMessagePayloadModel::class,
       'DeliveryCustomFieldAdded' => DeliveryCustomFieldAddedMessagePayloadModel::class,
       'DeliveryCustomFieldChanged' => DeliveryCustomFieldChangedMessagePayloadModel::class,
       'DeliveryCustomFieldRemoved' => DeliveryCustomFieldRemovedMessagePayloadModel::class,
       'DeliveryCustomTypeRemoved' => DeliveryCustomTypeRemovedMessagePayloadModel::class,
       'DeliveryCustomTypeSet' => DeliveryCustomTypeSetMessagePayloadModel::class,
       'DeliveryItemsUpdated' => DeliveryItemsUpdatedMessagePayloadModel::class,
       'DeliveryRemoved' => DeliveryRemovedMessagePayloadModel::class,
       'DiscountCodeCreated' => DiscountCodeCreatedMessagePayloadModel::class,
       'DiscountCodeDeleted' => DiscountCodeDeletedMessagePayloadModel::class,
       'DiscountCodeKeySet' => DiscountCodeKeySetMessagePayloadModel::class,
       'InventoryEntryCreated' => InventoryEntryCreatedMessagePayloadModel::class,
       'InventoryEntryDeleted' => InventoryEntryDeletedMessagePayloadModel::class,
       'InventoryEntryQuantitySet' => InventoryEntryQuantitySetMessagePayloadModel::class,
       'LineItemStateTransition' => LineItemStateTransitionMessagePayloadModel::class,
       'OrderBillingAddressSet' => OrderBillingAddressSetMessagePayloadModel::class,
       'OrderCreated' => OrderCreatedMessagePayloadModel::class,
       'OrderCustomFieldAdded' => OrderCustomFieldAddedMessagePayloadModel::class,
       'OrderCustomFieldChanged' => OrderCustomFieldChangedMessagePayloadModel::class,
       'OrderCustomFieldRemoved' => OrderCustomFieldRemovedMessagePayloadModel::class,
       'OrderCustomLineItemAdded' => OrderCustomLineItemAddedMessagePayloadModel::class,
       'OrderCustomLineItemDiscountSet' => OrderCustomLineItemDiscountSetMessagePayloadModel::class,
       'OrderCustomLineItemQuantityChanged' => OrderCustomLineItemQuantityChangedMessagePayloadModel::class,
       'OrderCustomLineItemRemoved' => OrderCustomLineItemRemovedMessagePayloadModel::class,
       'OrderCustomTypeRemoved' => OrderCustomTypeRemovedMessagePayloadModel::class,
       'OrderCustomTypeSet' => OrderCustomTypeSetMessagePayloadModel::class,
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
       'OrderLineItemDistributionChannelSet' => OrderLineItemDistributionChannelSetMessagePayloadModel::class,
       'OrderLineItemRemoved' => OrderLineItemRemovedMessagePayloadModel::class,
       'OrderPaymentAdded' => OrderPaymentAddedMessagePayloadModel::class,
       'OrderPaymentStateChanged' => OrderPaymentStateChangedMessagePayloadModel::class,
       'OrderPurchaseOrderNumberSet' => OrderPurchaseOrderNumberSetMessagePayloadModel::class,
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
       'ProductPriceAdded' => ProductPriceAddedMessagePayloadModel::class,
       'ProductPriceChanged' => ProductPriceChangedMessagePayloadModel::class,
       'ProductPriceCustomFieldAdded' => ProductPriceCustomFieldAddedMessagePayloadModel::class,
       'ProductPriceCustomFieldChanged' => ProductPriceCustomFieldChangedMessagePayloadModel::class,
       'ProductPriceCustomFieldRemoved' => ProductPriceCustomFieldRemovedMessagePayloadModel::class,
       'ProductPriceCustomFieldsRemoved' => ProductPriceCustomFieldsRemovedMessagePayloadModel::class,
       'ProductPriceCustomFieldsSet' => ProductPriceCustomFieldsSetMessagePayloadModel::class,
       'ProductPriceDiscountsSet' => ProductPriceDiscountsSetMessagePayloadModel::class,
       'ProductPriceExternalDiscountSet' => ProductPriceExternalDiscountSetMessagePayloadModel::class,
       'ProductPriceKeySet' => ProductPriceKeySetMessagePayloadModel::class,
       'ProductPriceModeSet' => ProductPriceModeSetMessagePayloadModel::class,
       'ProductPriceRemoved' => ProductPriceRemovedMessagePayloadModel::class,
       'ProductPricesSet' => ProductPricesSetMessagePayloadModel::class,
       'ProductPublished' => ProductPublishedMessagePayloadModel::class,
       'ProductRemovedFromCategory' => ProductRemovedFromCategoryMessagePayloadModel::class,
       'ProductRevertedStagedChanges' => ProductRevertedStagedChangesMessagePayloadModel::class,
       'ProductSelectionCreated' => ProductSelectionCreatedMessagePayloadModel::class,
       'ProductSelectionDeleted' => ProductSelectionDeletedMessagePayloadModel::class,
       'ProductSelectionProductAdded' => ProductSelectionProductAddedMessagePayloadModel::class,
       'ProductSelectionProductExcluded' => ProductSelectionProductExcludedMessagePayloadModel::class,
       'ProductSelectionProductRemoved' => ProductSelectionProductRemovedMessagePayloadModel::class,
       'ProductSelectionVariantExclusionChanged' => ProductSelectionVariantExclusionChangedMessagePayloadModel::class,
       'ProductSelectionVariantSelectionChanged' => ProductSelectionVariantSelectionChangedMessagePayloadModel::class,
       'ProductSlugChanged' => ProductSlugChangedMessagePayloadModel::class,
       'ProductStateTransition' => ProductStateTransitionMessagePayloadModel::class,
       'ProductTailoringCreated' => ProductTailoringCreatedMessagePayloadModel::class,
       'ProductTailoringDeleted' => ProductTailoringDeletedMessagePayloadModel::class,
       'ProductTailoringDescriptionSet' => ProductTailoringDescriptionSetMessagePayloadModel::class,
       'ProductTailoringImageAdded' => ProductTailoringImageAddedMessagePayloadModel::class,
       'ProductTailoringImagesSet' => ProductTailoringImagesSetMessagePayloadModel::class,
       'ProductTailoringNameSet' => ProductTailoringNameSetMessagePayloadModel::class,
       'ProductTailoringPublished' => ProductTailoringPublishedMessagePayloadModel::class,
       'ProductTailoringSlugSet' => ProductTailoringSlugSetMessagePayloadModel::class,
       'ProductTailoringUnpublished' => ProductTailoringUnpublishedMessagePayloadModel::class,
       'ProductUnpublished' => ProductUnpublishedMessagePayloadModel::class,
       'ProductVariantAdded' => ProductVariantAddedMessagePayloadModel::class,
       'ProductVariantDeleted' => ProductVariantDeletedMessagePayloadModel::class,
       'ProductVariantTailoringAdded' => ProductVariantTailoringAddedMessagePayloadModel::class,
       'ProductVariantTailoringRemoved' => ProductVariantTailoringRemovedMessagePayloadModel::class,
       'QuoteCreated' => QuoteCreatedMessagePayloadModel::class,
       'QuoteCustomerChanged' => QuoteCustomerChangedMessagePayloadModel::class,
       'QuoteDeleted' => QuoteDeletedMessagePayloadModel::class,
       'QuoteRenegotiationRequested' => QuoteRenegotiationRequestedMessagePayloadModel::class,
       'QuoteRequestCreated' => QuoteRequestCreatedMessagePayloadModel::class,
       'QuoteRequestCustomerChanged' => QuoteRequestCustomerChangedMessagePayloadModel::class,
       'QuoteRequestDeleted' => QuoteRequestDeletedMessagePayloadModel::class,
       'QuoteRequestStateChanged' => QuoteRequestStateChangedMessagePayloadModel::class,
       'QuoteRequestStateTransition' => QuoteRequestStateTransitionMessagePayloadModel::class,
       'QuoteStateChanged' => QuoteStateChangedMessagePayloadModel::class,
       'QuoteStateTransition' => QuoteStateTransitionMessagePayloadModel::class,
       'ReturnInfoAdded' => ReturnInfoAddedMessagePayloadModel::class,
       'ReturnInfoSet' => ReturnInfoSetMessagePayloadModel::class,
       'ReviewCreated' => ReviewCreatedMessagePayloadModel::class,
       'ReviewRatingSet' => ReviewRatingSetMessagePayloadModel::class,
       'ReviewStateTransition' => ReviewStateTransitionMessagePayloadModel::class,
       'ShoppingListLineItemAdded' => ShoppingListLineItemAddedMessagePayloadModel::class,
       'ShoppingListLineItemRemoved' => ShoppingListLineItemRemovedMessagePayloadModel::class,
       'ShoppingListStoreSet' => ShoppingListStoreSetMessagePayloadModel::class,
       'StagedQuoteCreated' => StagedQuoteCreatedMessagePayloadModel::class,
       'StagedQuoteDeleted' => StagedQuoteDeletedMessagePayloadModel::class,
       'StagedQuoteSellerCommentSet' => StagedQuoteSellerCommentSetMessagePayloadModel::class,
       'StagedQuoteStateChanged' => StagedQuoteStateChangedMessagePayloadModel::class,
       'StagedQuoteStateTransition' => StagedQuoteStateTransitionMessagePayloadModel::class,
       'StagedQuoteValidToSet' => StagedQuoteValidToSetMessagePayloadModel::class,
       'StandalonePriceActiveChanged' => StandalonePriceActiveChangedMessagePayloadModel::class,
       'StandalonePriceCreated' => StandalonePriceCreatedMessagePayloadModel::class,
       'StandalonePriceDeleted' => StandalonePriceDeletedMessagePayloadModel::class,
       'StandalonePriceDiscountSet' => StandalonePriceDiscountSetMessagePayloadModel::class,
       'StandalonePriceExternalDiscountSet' => StandalonePriceExternalDiscountSetMessagePayloadModel::class,
       'StandalonePriceKeySet' => StandalonePriceKeySetMessagePayloadModel::class,
       'StandalonePriceStagedChangesApplied' => StandalonePriceStagedChangesAppliedMessagePayloadModel::class,
       'StandalonePriceStagedChangesRemoved' => StandalonePriceStagedChangesRemovedMessagePayloadModel::class,
       'StandalonePriceTierAdded' => StandalonePriceTierAddedMessagePayloadModel::class,
       'StandalonePriceTierRemoved' => StandalonePriceTierRemovedMessagePayloadModel::class,
       'StandalonePriceTiersSet' => StandalonePriceTiersSetMessagePayloadModel::class,
       'StandalonePriceValidFromAndUntilSet' => StandalonePriceValidFromAndUntilSetMessagePayloadModel::class,
       'StandalonePriceValidFromSet' => StandalonePriceValidFromSetMessagePayloadModel::class,
       'StandalonePriceValidUntilSet' => StandalonePriceValidUntilSetMessagePayloadModel::class,
       'StandalonePriceValueChanged' => StandalonePriceValueChangedMessagePayloadModel::class,
       'StoreCountriesChanged' => StoreCountriesChangedMessagePayloadModel::class,
       'StoreCreated' => StoreCreatedMessagePayloadModel::class,
       'StoreDeleted' => StoreDeletedMessagePayloadModel::class,
       'StoreDistributionChannelsChanged' => StoreDistributionChannelsChangedMessagePayloadModel::class,
       'StoreLanguagesChanged' => StoreLanguagesChangedMessagePayloadModel::class,
       'StoreNameSet' => StoreNameSetMessagePayloadModel::class,
       'StoreProductSelectionsChanged' => StoreProductSelectionsChangedMessagePayloadModel::class,
       'StoreSupplyChannelsChanged' => StoreSupplyChannelsChangedMessagePayloadModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null
    ) {
        $this->type = $type;
    }

    /**
     *
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
