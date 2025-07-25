<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class MessageModel extends JsonObjectModel implements Message
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     *
     * @var ?int
     */
    protected $sequenceNumber;

    /**
     *
     * @var ?Reference
     */
    protected $resource;

    /**
     *
     * @var ?int
     */
    protected $resourceVersion;

    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     * @psalm-var array<string, class-string<Message> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'ApprovalFlowApproved' => ApprovalFlowApprovedMessageModel::class,
       'ApprovalFlowCompleted' => ApprovalFlowCompletedMessageModel::class,
       'ApprovalFlowCreated' => ApprovalFlowCreatedMessageModel::class,
       'ApprovalFlowRejected' => ApprovalFlowRejectedMessageModel::class,
       'ApprovalRuleApproversSet' => ApprovalRuleApproversSetMessageModel::class,
       'ApprovalRuleCreated' => ApprovalRuleCreatedMessageModel::class,
       'ApprovalRuleDescriptionSet' => ApprovalRuleDescriptionSetMessageModel::class,
       'ApprovalRuleKeySet' => ApprovalRuleKeySetMessageModel::class,
       'ApprovalRuleNameSet' => ApprovalRuleNameSetMessageModel::class,
       'ApprovalRulePredicateSet' => ApprovalRulePredicateSetMessageModel::class,
       'ApprovalRuleRequestersSet' => ApprovalRuleRequestersSetMessageModel::class,
       'ApprovalRuleStatusSet' => ApprovalRuleStatusSetMessageModel::class,
       'AssociateRoleBuyerAssignableChanged' => AssociateRoleBuyerAssignableChangedMessageModel::class,
       'AssociateRoleCreated' => AssociateRoleCreatedMessageModel::class,
       'AssociateRoleDeleted' => AssociateRoleDeletedMessageModel::class,
       'AssociateRoleNameSet' => AssociateRoleNameSetMessageModel::class,
       'AssociateRolePermissionAdded' => AssociateRolePermissionAddedMessageModel::class,
       'AssociateRolePermissionRemoved' => AssociateRolePermissionRemovedMessageModel::class,
       'AssociateRolePermissionsSet' => AssociateRolePermissionsSetMessageModel::class,
       'BusinessUnitAddressAdded' => BusinessUnitAddressAddedMessageModel::class,
       'BusinessUnitAddressChanged' => BusinessUnitAddressChangedMessageModel::class,
       'BusinessUnitAddressCustomFieldAdded' => BusinessUnitAddressCustomFieldAddedMessageModel::class,
       'BusinessUnitAddressCustomFieldChanged' => BusinessUnitAddressCustomFieldChangedMessageModel::class,
       'BusinessUnitAddressCustomFieldRemoved' => BusinessUnitAddressCustomFieldRemovedMessageModel::class,
       'BusinessUnitAddressCustomTypeRemoved' => BusinessUnitAddressCustomTypeRemovedMessageModel::class,
       'BusinessUnitAddressCustomTypeSet' => BusinessUnitAddressCustomTypeSetMessageModel::class,
       'BusinessUnitAddressRemoved' => BusinessUnitAddressRemovedMessageModel::class,
       'BusinessUnitApprovalRuleModeChanged' => BusinessUnitApprovalRuleModeChangedMessageModel::class,
       'BusinessUnitAssociateAdded' => BusinessUnitAssociateAddedMessageModel::class,
       'BusinessUnitAssociateChanged' => BusinessUnitAssociateChangedMessageModel::class,
       'BusinessUnitAssociateModeChanged' => BusinessUnitAssociateModeChangedMessageModel::class,
       'BusinessUnitAssociateRemoved' => BusinessUnitAssociateRemovedMessageModel::class,
       'BusinessUnitAssociatesSet' => BusinessUnitAssociatesSetMessageModel::class,
       'BusinessUnitBillingAddressAdded' => BusinessUnitBillingAddressAddedMessageModel::class,
       'BusinessUnitBillingAddressRemoved' => BusinessUnitBillingAddressRemovedMessageModel::class,
       'BusinessUnitContactEmailSet' => BusinessUnitContactEmailSetMessageModel::class,
       'BusinessUnitCreated' => BusinessUnitCreatedMessageModel::class,
       'BusinessUnitCustomFieldAdded' => BusinessUnitCustomFieldAddedMessageModel::class,
       'BusinessUnitCustomFieldChanged' => BusinessUnitCustomFieldChangedMessageModel::class,
       'BusinessUnitCustomFieldRemoved' => BusinessUnitCustomFieldRemovedMessageModel::class,
       'BusinessUnitCustomTypeRemoved' => BusinessUnitCustomTypeRemovedMessageModel::class,
       'BusinessUnitCustomTypeSet' => BusinessUnitCustomTypeSetMessageModel::class,
       'BusinessUnitDefaultBillingAddressSet' => BusinessUnitDefaultBillingAddressSetMessageModel::class,
       'BusinessUnitDefaultShippingAddressSet' => BusinessUnitDefaultShippingAddressSetMessageModel::class,
       'BusinessUnitDeleted' => BusinessUnitDeletedMessageModel::class,
       'BusinessUnitNameChanged' => BusinessUnitNameChangedMessageModel::class,
       'BusinessUnitParentChanged' => BusinessUnitParentChangedMessageModel::class,
       'BusinessUnitShippingAddressAdded' => BusinessUnitShippingAddressAddedMessageModel::class,
       'BusinessUnitShippingAddressRemoved' => BusinessUnitShippingAddressRemovedMessageModel::class,
       'BusinessUnitStatusChanged' => BusinessUnitStatusChangedMessageModel::class,
       'BusinessUnitStoreAdded' => BusinessUnitStoreAddedMessageModel::class,
       'BusinessUnitStoreModeChanged' => BusinessUnitStoreModeChangedMessageModel::class,
       'BusinessUnitStoreRemoved' => BusinessUnitStoreRemovedMessageModel::class,
       'BusinessUnitStoresSet' => BusinessUnitStoresSetMessageModel::class,
       'BusinessUnitTopLevelUnitSet' => BusinessUnitTopLevelUnitSetMessageModel::class,
       'BusinessUnitTypeSet' => BusinessUnitTypeSetMessageModel::class,
       'CartDiscountCreated' => CartDiscountCreatedMessageModel::class,
       'CartDiscountDeleted' => CartDiscountDeletedMessageModel::class,
       'CartDiscountStoreAdded' => CartDiscountStoreAddedMessageModel::class,
       'CartDiscountStoreRemoved' => CartDiscountStoreRemovedMessageModel::class,
       'CartDiscountStoresSet' => CartDiscountStoresSetMessageModel::class,
       'CategoryCreated' => CategoryCreatedMessageModel::class,
       'CategorySlugChanged' => CategorySlugChangedMessageModel::class,
       'CustomLineItemStateTransition' => CustomLineItemStateTransitionMessageModel::class,
       'CustomerAddressAdded' => CustomerAddressAddedMessageModel::class,
       'CustomerAddressChanged' => CustomerAddressChangedMessageModel::class,
       'CustomerAddressCustomFieldAdded' => CustomerAddressCustomFieldAddedMessageModel::class,
       'CustomerAddressCustomFieldChanged' => CustomerAddressCustomFieldChangedMessageModel::class,
       'CustomerAddressCustomFieldRemoved' => CustomerAddressCustomFieldRemovedMessageModel::class,
       'CustomerAddressCustomTypeRemoved' => CustomerAddressCustomTypeRemovedMessageModel::class,
       'CustomerAddressCustomTypeSet' => CustomerAddressCustomTypeSetMessageModel::class,
       'CustomerAddressRemoved' => CustomerAddressRemovedMessageModel::class,
       'CustomerCompanyNameSet' => CustomerCompanyNameSetMessageModel::class,
       'CustomerCreated' => CustomerCreatedMessageModel::class,
       'CustomerCustomFieldAdded' => CustomerCustomFieldAddedMessageModel::class,
       'CustomerCustomFieldChanged' => CustomerCustomFieldChangedMessageModel::class,
       'CustomerCustomFieldRemoved' => CustomerCustomFieldRemovedMessageModel::class,
       'CustomerCustomTypeRemoved' => CustomerCustomTypeRemovedMessageModel::class,
       'CustomerCustomTypeSet' => CustomerCustomTypeSetMessageModel::class,
       'CustomerDateOfBirthSet' => CustomerDateOfBirthSetMessageModel::class,
       'CustomerDeleted' => CustomerDeletedMessageModel::class,
       'CustomerEmailChanged' => CustomerEmailChangedMessageModel::class,
       'CustomerEmailTokenCreated' => CustomerEmailTokenCreatedMessageModel::class,
       'CustomerEmailVerified' => CustomerEmailVerifiedMessageModel::class,
       'CustomerFirstNameSet' => CustomerFirstNameSetMessageModel::class,
       'CustomerGroupAssignmentAdded' => CustomerGroupAssignmentAddedMessageModel::class,
       'CustomerGroupAssignmentRemoved' => CustomerGroupAssignmentRemovedMessageModel::class,
       'CustomerGroupAssignmentsSet' => CustomerGroupAssignmentsSetMessageModel::class,
       'CustomerGroupCustomFieldAdded' => CustomerGroupCustomFieldAddedMessageModel::class,
       'CustomerGroupCustomFieldChanged' => CustomerGroupCustomFieldChangedMessageModel::class,
       'CustomerGroupCustomFieldRemoved' => CustomerGroupCustomFieldRemovedMessageModel::class,
       'CustomerGroupCustomTypeRemoved' => CustomerGroupCustomTypeRemovedMessageModel::class,
       'CustomerGroupCustomTypeSet' => CustomerGroupCustomTypeSetMessageModel::class,
       'CustomerGroupSet' => CustomerGroupSetMessageModel::class,
       'CustomerLastNameSet' => CustomerLastNameSetMessageModel::class,
       'CustomerPasswordTokenCreated' => CustomerPasswordTokenCreatedMessageModel::class,
       'CustomerPasswordUpdated' => CustomerPasswordUpdatedMessageModel::class,
       'CustomerTitleSet' => CustomerTitleSetMessageModel::class,
       'DeliveryAdded' => DeliveryAddedMessageModel::class,
       'DeliveryAddressSet' => DeliveryAddressSetMessageModel::class,
       'DeliveryCustomFieldAdded' => DeliveryCustomFieldAddedMessageModel::class,
       'DeliveryCustomFieldChanged' => DeliveryCustomFieldChangedMessageModel::class,
       'DeliveryCustomFieldRemoved' => DeliveryCustomFieldRemovedMessageModel::class,
       'DeliveryCustomTypeRemoved' => DeliveryCustomTypeRemovedMessageModel::class,
       'DeliveryCustomTypeSet' => DeliveryCustomTypeSetMessageModel::class,
       'DeliveryItemsUpdated' => DeliveryItemsUpdatedMessageModel::class,
       'DeliveryRemoved' => DeliveryRemovedMessageModel::class,
       'DiscountCodeCreated' => DiscountCodeCreatedMessageModel::class,
       'DiscountCodeDeleted' => DiscountCodeDeletedMessageModel::class,
       'DiscountCodeKeySet' => DiscountCodeKeySetMessageModel::class,
       'DiscountGroupCreated' => DiscountGroupCreatedMessageModel::class,
       'DiscountGroupDeleted' => DiscountGroupDeletedMessageModel::class,
       'DiscountGroupKeySet' => DiscountGroupKeySetMessageModel::class,
       'DiscountGroupSortOrderSet' => DiscountGroupSortOrderSetMessageModel::class,
       'InventoryEntryCreated' => InventoryEntryCreatedMessageModel::class,
       'InventoryEntryDeleted' => InventoryEntryDeletedMessageModel::class,
       'InventoryEntryQuantitySet' => InventoryEntryQuantitySetMessageModel::class,
       'LineItemStateTransition' => LineItemStateTransitionMessageModel::class,
       'OrderBillingAddressSet' => OrderBillingAddressSetMessageModel::class,
       'OrderBusinessUnitSet' => OrderBusinessUnitSetMessageModel::class,
       'OrderCreated' => OrderCreatedMessageModel::class,
       'OrderCreatedFromRecurringOrder' => OrderCreatedFromRecurringOrderMessageModel::class,
       'OrderCustomFieldAdded' => OrderCustomFieldAddedMessageModel::class,
       'OrderCustomFieldChanged' => OrderCustomFieldChangedMessageModel::class,
       'OrderCustomFieldRemoved' => OrderCustomFieldRemovedMessageModel::class,
       'OrderCustomLineItemAdded' => OrderCustomLineItemAddedMessageModel::class,
       'OrderCustomLineItemDiscountSet' => OrderCustomLineItemDiscountSetMessageModel::class,
       'OrderCustomLineItemQuantityChanged' => OrderCustomLineItemQuantityChangedMessageModel::class,
       'OrderCustomLineItemRemoved' => OrderCustomLineItemRemovedMessageModel::class,
       'OrderCustomTypeRemoved' => OrderCustomTypeRemovedMessageModel::class,
       'OrderCustomTypeSet' => OrderCustomTypeSetMessageModel::class,
       'OrderCustomerEmailSet' => OrderCustomerEmailSetMessageModel::class,
       'OrderCustomerGroupSet' => OrderCustomerGroupSetMessageModel::class,
       'OrderCustomerSet' => OrderCustomerSetMessageModel::class,
       'OrderDeleted' => OrderDeletedMessageModel::class,
       'OrderDiscountCodeAdded' => OrderDiscountCodeAddedMessageModel::class,
       'OrderDiscountCodeRemoved' => OrderDiscountCodeRemovedMessageModel::class,
       'OrderDiscountCodeStateSet' => OrderDiscountCodeStateSetMessageModel::class,
       'OrderEditApplied' => OrderEditAppliedMessageModel::class,
       'OrderImported' => OrderImportedMessageModel::class,
       'OrderLineItemAdded' => OrderLineItemAddedMessageModel::class,
       'OrderLineItemDiscountSet' => OrderLineItemDiscountSetMessageModel::class,
       'OrderLineItemDistributionChannelSet' => OrderLineItemDistributionChannelSetMessageModel::class,
       'OrderLineItemRemoved' => OrderLineItemRemovedMessageModel::class,
       'OrderPaymentAdded' => OrderPaymentAddedMessageModel::class,
       'OrderPaymentStateChanged' => OrderPaymentStateChangedMessageModel::class,
       'OrderPurchaseOrderNumberSet' => OrderPurchaseOrderNumberSetMessageModel::class,
       'OrderReturnShipmentStateChanged' => OrderReturnShipmentStateChangedMessageModel::class,
       'OrderShipmentStateChanged' => OrderShipmentStateChangedMessageModel::class,
       'OrderShippingAddressSet' => OrderShippingAddressSetMessageModel::class,
       'OrderShippingInfoSet' => OrderShippingInfoSetMessageModel::class,
       'OrderShippingRateInputSet' => OrderShippingRateInputSetMessageModel::class,
       'OrderStateChanged' => OrderStateChangedMessageModel::class,
       'OrderStateTransition' => OrderStateTransitionMessageModel::class,
       'OrderStoreSet' => OrderStoreSetMessageModel::class,
       'ParcelAddedToDelivery' => ParcelAddedToDeliveryMessageModel::class,
       'ParcelItemsUpdated' => ParcelItemsUpdatedMessageModel::class,
       'ParcelMeasurementsUpdated' => ParcelMeasurementsUpdatedMessageModel::class,
       'ParcelRemovedFromDelivery' => ParcelRemovedFromDeliveryMessageModel::class,
       'ParcelTrackingDataUpdated' => ParcelTrackingDataUpdatedMessageModel::class,
       'PaymentCreated' => PaymentCreatedMessageModel::class,
       'PaymentInteractionAdded' => PaymentInteractionAddedMessageModel::class,
       'PaymentInterfaceIdSet' => PaymentInterfaceIdSetMessageModel::class,
       'PaymentMethodCreated' => PaymentMethodCreatedMessageModel::class,
       'PaymentMethodCustomFieldAdded' => PaymentMethodCustomFieldAddedMessageModel::class,
       'PaymentMethodCustomFieldChanged' => PaymentMethodCustomFieldChangedMessageModel::class,
       'PaymentMethodCustomFieldRemoved' => PaymentMethodCustomFieldRemovedMessageModel::class,
       'PaymentMethodCustomTypeRemoved' => PaymentMethodCustomTypeRemovedMessageModel::class,
       'PaymentMethodCustomTypeSet' => PaymentMethodCustomTypeSetMessageModel::class,
       'PaymentMethodDefaultSet' => PaymentMethodDefaultSetMessageModel::class,
       'PaymentMethodDeleted' => PaymentMethodDeletedMessageModel::class,
       'PaymentMethodInfoCustomFieldAdded' => PaymentMethodInfoCustomFieldAddedMessageModel::class,
       'PaymentMethodInfoCustomFieldChanged' => PaymentMethodInfoCustomFieldChangedMessageModel::class,
       'PaymentMethodInfoCustomFieldRemoved' => PaymentMethodInfoCustomFieldRemovedMessageModel::class,
       'PaymentMethodInfoCustomTypeRemoved' => PaymentMethodInfoCustomTypeRemovedMessageModel::class,
       'PaymentMethodInfoCustomTypeSet' => PaymentMethodInfoCustomTypeSetMessageModel::class,
       'PaymentMethodInfoInterfaceAccountSet' => PaymentMethodInfoInterfaceAccountSetMessageModel::class,
       'PaymentMethodInfoInterfaceSet' => PaymentMethodInfoInterfaceSetMessageModel::class,
       'PaymentMethodInfoMethodSet' => PaymentMethodInfoMethodSetMessageModel::class,
       'PaymentMethodInfoNameSet' => PaymentMethodInfoNameSetMessageModel::class,
       'PaymentMethodInfoTokenSet' => PaymentMethodInfoTokenSetMessageModel::class,
       'PaymentMethodInterfaceAccountSet' => PaymentMethodInterfaceAccountSetMessageModel::class,
       'PaymentMethodKeySet' => PaymentMethodKeySetMessageModel::class,
       'PaymentMethodMethodSet' => PaymentMethodMethodSetMessageModel::class,
       'PaymentMethodNameSet' => PaymentMethodNameSetMessageModel::class,
       'PaymentMethodPaymentInterfaceSet' => PaymentMethodPaymentInterfaceSetMessageModel::class,
       'PaymentMethodPaymentMethodStatusSet' => PaymentMethodPaymentMethodStatusSetMessageModel::class,
       'PaymentStatusInterfaceCodeSet' => PaymentStatusInterfaceCodeSetMessageModel::class,
       'PaymentStatusStateTransition' => PaymentStatusStateTransitionMessageModel::class,
       'PaymentTransactionAdded' => PaymentTransactionAddedMessageModel::class,
       'PaymentTransactionStateChanged' => PaymentTransactionStateChangedMessageModel::class,
       'ProductAddedToCategory' => ProductAddedToCategoryMessageModel::class,
       'ProductCreated' => ProductCreatedMessageModel::class,
       'ProductDeleted' => ProductDeletedMessageModel::class,
       'ProductImageAdded' => ProductImageAddedMessageModel::class,
       'ProductPriceAdded' => ProductPriceAddedMessageModel::class,
       'ProductPriceChanged' => ProductPriceChangedMessageModel::class,
       'ProductPriceCustomFieldAdded' => ProductPriceCustomFieldAddedMessageModel::class,
       'ProductPriceCustomFieldChanged' => ProductPriceCustomFieldChangedMessageModel::class,
       'ProductPriceCustomFieldRemoved' => ProductPriceCustomFieldRemovedMessageModel::class,
       'ProductPriceCustomFieldsRemoved' => ProductPriceCustomFieldsRemovedMessageModel::class,
       'ProductPriceCustomFieldsSet' => ProductPriceCustomFieldsSetMessageModel::class,
       'ProductPriceDiscountsSet' => ProductPriceDiscountsSetMessageModel::class,
       'ProductPriceExternalDiscountSet' => ProductPriceExternalDiscountSetMessageModel::class,
       'ProductPriceKeySet' => ProductPriceKeySetMessageModel::class,
       'ProductPriceModeSet' => ProductPriceModeSetMessageModel::class,
       'ProductPriceRemoved' => ProductPriceRemovedMessageModel::class,
       'ProductPricesSet' => ProductPricesSetMessageModel::class,
       'ProductPublished' => ProductPublishedMessageModel::class,
       'ProductRemovedFromCategory' => ProductRemovedFromCategoryMessageModel::class,
       'ProductRevertedStagedChanges' => ProductRevertedStagedChangesMessageModel::class,
       'ProductSelectionCreated' => ProductSelectionCreatedMessageModel::class,
       'ProductSelectionDeleted' => ProductSelectionDeletedMessageModel::class,
       'ProductSelectionProductAdded' => ProductSelectionProductAddedMessageModel::class,
       'ProductSelectionProductExcluded' => ProductSelectionProductExcludedMessageModel::class,
       'ProductSelectionProductRemoved' => ProductSelectionProductRemovedMessageModel::class,
       'ProductSelectionVariantExclusionChanged' => ProductSelectionVariantExclusionChangedMessageModel::class,
       'ProductSelectionVariantSelectionChanged' => ProductSelectionVariantSelectionChangedMessageModel::class,
       'ProductSlugChanged' => ProductSlugChangedMessageModel::class,
       'ProductStateTransition' => ProductStateTransitionMessageModel::class,
       'ProductTailoringCreated' => ProductTailoringCreatedMessageModel::class,
       'ProductTailoringDeleted' => ProductTailoringDeletedMessageModel::class,
       'ProductTailoringDescriptionSet' => ProductTailoringDescriptionSetMessageModel::class,
       'ProductTailoringImageAdded' => ProductTailoringImageAddedMessageModel::class,
       'ProductTailoringImagesSet' => ProductTailoringImagesSetMessageModel::class,
       'ProductTailoringNameSet' => ProductTailoringNameSetMessageModel::class,
       'ProductTailoringPublished' => ProductTailoringPublishedMessageModel::class,
       'ProductTailoringSlugSet' => ProductTailoringSlugSetMessageModel::class,
       'ProductTailoringUnpublished' => ProductTailoringUnpublishedMessageModel::class,
       'ProductUnpublished' => ProductUnpublishedMessageModel::class,
       'ProductVariantAdded' => ProductVariantAddedMessageModel::class,
       'ProductVariantDeleted' => ProductVariantDeletedMessageModel::class,
       'ProductVariantTailoringAdded' => ProductVariantTailoringAddedMessageModel::class,
       'ProductVariantTailoringRemoved' => ProductVariantTailoringRemovedMessageModel::class,
       'QuoteCreated' => QuoteCreatedMessageModel::class,
       'QuoteCustomerChanged' => QuoteCustomerChangedMessageModel::class,
       'QuoteDeleted' => QuoteDeletedMessageModel::class,
       'QuoteRenegotiationRequested' => QuoteRenegotiationRequestedMessageModel::class,
       'QuoteRequestCreated' => QuoteRequestCreatedMessageModel::class,
       'QuoteRequestCustomerChanged' => QuoteRequestCustomerChangedMessageModel::class,
       'QuoteRequestDeleted' => QuoteRequestDeletedMessageModel::class,
       'QuoteRequestStateChanged' => QuoteRequestStateChangedMessageModel::class,
       'QuoteRequestStateTransition' => QuoteRequestStateTransitionMessageModel::class,
       'QuoteStateChanged' => QuoteStateChangedMessageModel::class,
       'QuoteStateTransition' => QuoteStateTransitionMessageModel::class,
       'RecurringOrderCreated' => RecurringOrderCreatedMessageModel::class,
       'RecurringOrderCustomFieldAdded' => RecurringOrderCustomFieldAddedMessageModel::class,
       'RecurringOrderCustomFieldChanged' => RecurringOrderCustomFieldChangedMessageModel::class,
       'RecurringOrderCustomFieldRemoved' => RecurringOrderCustomFieldRemovedMessageModel::class,
       'RecurringOrderCustomTypeRemoved' => RecurringOrderCustomTypeRemovedMessageModel::class,
       'RecurringOrderCustomTypeSet' => RecurringOrderCustomTypeSetMessageModel::class,
       'RecurringOrderDeleted' => RecurringOrderDeletedMessageModel::class,
       'RecurringOrderKeySet' => RecurringOrderKeySetMessageModel::class,
       'RecurringOrderScheduleSet' => RecurringOrderScheduleSetMessageModel::class,
       'RecurringOrderStartsAtSet' => RecurringOrderStartsAtSetMessageModel::class,
       'RecurringOrderStateChanged' => RecurringOrderStateChangedMessageModel::class,
       'RecurringOrderStateTransition' => RecurringOrderStateTransitionMessageModel::class,
       'ReturnInfoAdded' => ReturnInfoAddedMessageModel::class,
       'ReturnInfoSet' => ReturnInfoSetMessageModel::class,
       'ReviewCreated' => ReviewCreatedMessageModel::class,
       'ReviewRatingSet' => ReviewRatingSetMessageModel::class,
       'ReviewStateTransition' => ReviewStateTransitionMessageModel::class,
       'ShoppingListLineItemAdded' => ShoppingListLineItemAddedMessageModel::class,
       'ShoppingListLineItemRemoved' => ShoppingListLineItemRemovedMessageModel::class,
       'StagedQuoteCreated' => StagedQuoteCreatedMessageModel::class,
       'StagedQuoteDeleted' => StagedQuoteDeletedMessageModel::class,
       'StagedQuoteSellerCommentSet' => StagedQuoteSellerCommentSetMessageModel::class,
       'StagedQuoteStateChanged' => StagedQuoteStateChangedMessageModel::class,
       'StagedQuoteStateTransition' => StagedQuoteStateTransitionMessageModel::class,
       'StagedQuoteValidToSet' => StagedQuoteValidToSetMessageModel::class,
       'StandalonePriceActiveChanged' => StandalonePriceActiveChangedMessageModel::class,
       'StandalonePriceCreated' => StandalonePriceCreatedMessageModel::class,
       'StandalonePriceDeleted' => StandalonePriceDeletedMessageModel::class,
       'StandalonePriceDiscountSet' => StandalonePriceDiscountSetMessageModel::class,
       'StandalonePriceExternalDiscountSet' => StandalonePriceExternalDiscountSetMessageModel::class,
       'StandalonePriceKeySet' => StandalonePriceKeySetMessageModel::class,
       'StandalonePriceStagedChangesApplied' => StandalonePriceStagedChangesAppliedMessageModel::class,
       'StandalonePriceStagedChangesRemoved' => StandalonePriceStagedChangesRemovedMessageModel::class,
       'StandalonePriceTierAdded' => StandalonePriceTierAddedMessageModel::class,
       'StandalonePriceTierRemoved' => StandalonePriceTierRemovedMessageModel::class,
       'StandalonePriceTiersSet' => StandalonePriceTiersSetMessageModel::class,
       'StandalonePriceValidFromAndUntilSet' => StandalonePriceValidFromAndUntilSetMessageModel::class,
       'StandalonePriceValidFromSet' => StandalonePriceValidFromSetMessageModel::class,
       'StandalonePriceValidUntilSet' => StandalonePriceValidUntilSetMessageModel::class,
       'StandalonePriceValueChanged' => StandalonePriceValueChangedMessageModel::class,
       'StoreCountriesChanged' => StoreCountriesChangedMessageModel::class,
       'StoreCreated' => StoreCreatedMessageModel::class,
       'StoreDeleted' => StoreDeletedMessageModel::class,
       'StoreDistributionChannelsChanged' => StoreDistributionChannelsChangedMessageModel::class,
       'StoreLanguagesChanged' => StoreLanguagesChangedMessageModel::class,
       'StoreNameSet' => StoreNameSetMessageModel::class,
       'StoreProductSelectionsChanged' => StoreProductSelectionsChangedMessageModel::class,
       'StoreSupplyChannelsChanged' => StoreSupplyChannelsChangedMessageModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?int $sequenceNumber = null,
        ?Reference $resource = null,
        ?int $resourceVersion = null,
        ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        ?string $type = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->sequenceNumber = $sequenceNumber;
        $this->resource = $resource;
        $this->resourceVersion = $resourceVersion;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->type = $type;
    }

    /**
     * <p>Unique identifier of the Message. Can be used to track which Messages have been processed.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Version of a resource. In case of Messages, this is always <code>1</code>.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Message was generated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Value of <code>createdAt</code>.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the Message.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Message.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>Message number in relation to other Messages for a given resource. The <code>sequenceNumber</code> of the next Message for the resource is the successor of the <code>sequenceNumber</code> of the current Message. Meaning, the <code>sequenceNumber</code> of the next Message equals the <code>sequenceNumber</code> of the current Message + 1.
     * <code>sequenceNumber</code> can be used to ensure that Messages are processed in the correct order for a particular resource.</p>
     *
     *
     * @return null|int
     */
    public function getSequenceNumber()
    {
        if (is_null($this->sequenceNumber)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SEQUENCE_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->sequenceNumber = (int) $data;
        }

        return $this->sequenceNumber;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource on which the change or action was performed.</p>
     *
     *
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * <p>Version of the resource on which the change or action was performed.</p>
     *
     *
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**
     * <p><a href="/../api/projects/messages#message-types">Message Type</a> of the Message.</p>
     *
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
     * <p>User-provided identifiers of the resource, such as <code>key</code> or <code>externalId</code>. Only present if the resource has such identifiers.</p>
     *
     *
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        if (is_null($this->resourceUserProvidedIdentifiers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
            if (is_null($data)) {
                return null;
            }

            $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
        }

        return $this->resourceUserProvidedIdentifiers;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?int $sequenceNumber
     */
    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     */
    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Message::FIELD_CREATED_AT]) && $data[Message::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Message::FIELD_CREATED_AT] = $data[Message::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Message::FIELD_LAST_MODIFIED_AT]) && $data[Message::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Message::FIELD_LAST_MODIFIED_AT] = $data[Message::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Message>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = Message::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<Message> */
        $type = MessageModel::class;
        return $type;
    }
}
