<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\ApprovalFlow\ApprovalFlow;
use Commercetools\Api\Models\ApprovalRule\ApprovalRule;
use Commercetools\Api\Models\AssociateRole\AssociateRole;
use Commercetools\Api\Models\AttributeGroup\AttributeGroup;
use Commercetools\Api\Models\BusinessUnit\BusinessUnit;
use Commercetools\Api\Models\BusinessUnit\Company;
use Commercetools\Api\Models\BusinessUnit\Division;
use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Channel\Channel;
use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\CustomerGroup\CustomerGroup;
use Commercetools\Api\Models\CustomObject\CustomObject;
use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\DiscountGroup\DiscountGroup;
use Commercetools\Api\Models\Extension\Extension;
use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\Message\ApprovalFlowApprovedMessage;
use Commercetools\Api\Models\Message\ApprovalFlowCompletedMessage;
use Commercetools\Api\Models\Message\ApprovalFlowCreatedMessage;
use Commercetools\Api\Models\Message\ApprovalFlowRejectedMessage;
use Commercetools\Api\Models\Message\ApprovalRuleApproversSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleCreatedMessage;
use Commercetools\Api\Models\Message\ApprovalRuleDescriptionSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleKeySetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleNameSetMessage;
use Commercetools\Api\Models\Message\ApprovalRulePredicateSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleRequestersSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleStatusSetMessage;
use Commercetools\Api\Models\Message\AssociateRoleBuyerAssignableChangedMessage;
use Commercetools\Api\Models\Message\AssociateRoleCreatedMessage;
use Commercetools\Api\Models\Message\AssociateRoleDeletedMessage;
use Commercetools\Api\Models\Message\AssociateRoleNameSetMessage;
use Commercetools\Api\Models\Message\AssociateRolePermissionAddedMessage;
use Commercetools\Api\Models\Message\AssociateRolePermissionRemovedMessage;
use Commercetools\Api\Models\Message\AssociateRolePermissionsSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomTypeSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitApprovalRuleModeChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateModeChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociatesSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitContactEmailSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitCreatedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomTypeSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitDefaultBillingAddressSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitDefaultShippingAddressSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitDeletedMessage;
use Commercetools\Api\Models\Message\BusinessUnitNameChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitParentChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStatusChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreModeChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoresSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitTopLevelUnitSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitTypeSetMessage;
use Commercetools\Api\Models\Message\CartDiscountCreatedMessage;
use Commercetools\Api\Models\Message\CartDiscountDeletedMessage;
use Commercetools\Api\Models\Message\CartDiscountStoreAddedMessage;
use Commercetools\Api\Models\Message\CartDiscountStoreRemovedMessage;
use Commercetools\Api\Models\Message\CartDiscountStoresSetMessage;
use Commercetools\Api\Models\Message\CategoryCreatedMessage;
use Commercetools\Api\Models\Message\CategorySlugChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessage;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomTypeSetMessage;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessage;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessage;
use Commercetools\Api\Models\Message\CustomerCreatedMessage;
use Commercetools\Api\Models\Message\CustomerCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\CustomerCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\CustomerCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\CustomerCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\CustomerCustomTypeSetMessage;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessage;
use Commercetools\Api\Models\Message\CustomerDeletedMessage;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessage;
use Commercetools\Api\Models\Message\CustomerEmailTokenCreatedMessage;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessage;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupAssignmentAddedMessage;
use Commercetools\Api\Models\Message\CustomerGroupAssignmentRemovedMessage;
use Commercetools\Api\Models\Message\CustomerGroupAssignmentsSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomTypeSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupSetMessage;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessage;
use Commercetools\Api\Models\Message\CustomerPasswordTokenCreatedMessage;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessage;
use Commercetools\Api\Models\Message\CustomerTitleSetMessage;
use Commercetools\Api\Models\Message\DiscountCodeCreatedMessage;
use Commercetools\Api\Models\Message\DiscountCodeDeletedMessage;
use Commercetools\Api\Models\Message\DiscountCodeKeySetMessage;
use Commercetools\Api\Models\Message\DiscountGroupCreatedMessage;
use Commercetools\Api\Models\Message\DiscountGroupDeletedMessage;
use Commercetools\Api\Models\Message\DiscountGroupKeySetMessage;
use Commercetools\Api\Models\Message\DiscountGroupSortOrderSetMessage;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessage;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessage;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessage;
use Commercetools\Api\Models\Message\Message;
use Commercetools\Api\Models\Message\OrderMessage;
use Commercetools\Api\Models\Message\OrderPaymentAddedMessage;
use Commercetools\Api\Models\Message\PaymentCreatedMessage;
use Commercetools\Api\Models\Message\PaymentInteractionAddedMessage;
use Commercetools\Api\Models\Message\PaymentInterfaceIdSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodCreatedMessage;
use Commercetools\Api\Models\Message\PaymentMethodCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\PaymentMethodCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\PaymentMethodCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\PaymentMethodCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\PaymentMethodCustomTypeSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodDefaultSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodDeletedMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoCustomTypeSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoInterfaceAccountSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoInterfaceSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoMethodSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoNameSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodInfoTokenSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodInterfaceAccountSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodKeySetMessage;
use Commercetools\Api\Models\Message\PaymentMethodMethodSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodNameSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodPaymentInterfaceSetMessage;
use Commercetools\Api\Models\Message\PaymentMethodPaymentMethodStatusSetMessage;
use Commercetools\Api\Models\Message\PaymentStatusInterfaceCodeSetMessage;
use Commercetools\Api\Models\Message\PaymentStatusStateTransitionMessage;
use Commercetools\Api\Models\Message\PaymentTransactionAddedMessage;
use Commercetools\Api\Models\Message\PaymentTransactionStateChangedMessage;
use Commercetools\Api\Models\Message\ProductAddedToCategoryMessage;
use Commercetools\Api\Models\Message\ProductCreatedMessage;
use Commercetools\Api\Models\Message\ProductDeletedMessage;
use Commercetools\Api\Models\Message\ProductImageAddedMessage;
use Commercetools\Api\Models\Message\ProductPriceAddedMessage;
use Commercetools\Api\Models\Message\ProductPriceChangedMessage;
use Commercetools\Api\Models\Message\ProductPriceCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\ProductPriceCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\ProductPriceCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\ProductPriceCustomFieldsRemovedMessage;
use Commercetools\Api\Models\Message\ProductPriceCustomFieldsSetMessage;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessage;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\ProductPriceKeySetMessage;
use Commercetools\Api\Models\Message\ProductPriceModeSetMessage;
use Commercetools\Api\Models\Message\ProductPriceRemovedMessage;
use Commercetools\Api\Models\Message\ProductPricesSetMessage;
use Commercetools\Api\Models\Message\ProductPublishedMessage;
use Commercetools\Api\Models\Message\ProductRemovedFromCategoryMessage;
use Commercetools\Api\Models\Message\ProductRevertedStagedChangesMessage;
use Commercetools\Api\Models\Message\ProductSelectionCreatedMessage;
use Commercetools\Api\Models\Message\ProductSelectionDeletedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductAddedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductExcludedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessage;
use Commercetools\Api\Models\Message\ProductSelectionVariantExclusionChangedMessage;
use Commercetools\Api\Models\Message\ProductSelectionVariantSelectionChangedMessage;
use Commercetools\Api\Models\Message\ProductSlugChangedMessage;
use Commercetools\Api\Models\Message\ProductStateTransitionMessage;
use Commercetools\Api\Models\Message\ProductTailoringCreatedMessage;
use Commercetools\Api\Models\Message\ProductTailoringDeletedMessage;
use Commercetools\Api\Models\Message\ProductTailoringDescriptionSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringImageAddedMessage;
use Commercetools\Api\Models\Message\ProductTailoringImagesSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringNameSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringPublishedMessage;
use Commercetools\Api\Models\Message\ProductTailoringSlugSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringUnpublishedMessage;
use Commercetools\Api\Models\Message\ProductUnpublishedMessage;
use Commercetools\Api\Models\Message\ProductVariantAddedMessage;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessage;
use Commercetools\Api\Models\Message\ProductVariantTailoringAddedMessage;
use Commercetools\Api\Models\Message\ProductVariantTailoringRemovedMessage;
use Commercetools\Api\Models\Message\QuoteCreatedMessage;
use Commercetools\Api\Models\Message\QuoteCustomerChangedMessage;
use Commercetools\Api\Models\Message\QuoteDeletedMessage;
use Commercetools\Api\Models\Message\QuoteRenegotiationRequestedMessage;
use Commercetools\Api\Models\Message\QuoteRequestCreatedMessage;
use Commercetools\Api\Models\Message\QuoteRequestCustomerChangedMessage;
use Commercetools\Api\Models\Message\QuoteRequestDeletedMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateTransitionMessage;
use Commercetools\Api\Models\Message\QuoteStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\RecurringOrderCreatedMessage;
use Commercetools\Api\Models\Message\RecurringOrderCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\RecurringOrderCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\RecurringOrderCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\RecurringOrderCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\RecurringOrderCustomTypeSetMessage;
use Commercetools\Api\Models\Message\RecurringOrderDeletedMessage;
use Commercetools\Api\Models\Message\RecurringOrderKeySetMessage;
use Commercetools\Api\Models\Message\RecurringOrderScheduleSetMessage;
use Commercetools\Api\Models\Message\RecurringOrderStartsAtSetMessage;
use Commercetools\Api\Models\Message\RecurringOrderStateChangedMessage;
use Commercetools\Api\Models\Message\RecurringOrderStateTransitionMessage;
use Commercetools\Api\Models\Message\ReviewCreatedMessage;
use Commercetools\Api\Models\Message\ReviewRatingSetMessage;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessage;
use Commercetools\Api\Models\Message\ShoppingListMessage;
use Commercetools\Api\Models\Message\StagedQuoteCreatedMessage;
use Commercetools\Api\Models\Message\StagedQuoteDeletedMessage;
use Commercetools\Api\Models\Message\StagedQuoteSellerCommentSetMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateChangedMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\StagedQuoteValidToSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceActiveChangedMessage;
use Commercetools\Api\Models\Message\StandalonePriceCreatedMessage;
use Commercetools\Api\Models\Message\StandalonePriceDeletedMessage;
use Commercetools\Api\Models\Message\StandalonePriceDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceKeySetMessage;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesAppliedMessage;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesRemovedMessage;
use Commercetools\Api\Models\Message\StandalonePriceTierAddedMessage;
use Commercetools\Api\Models\Message\StandalonePriceTierRemovedMessage;
use Commercetools\Api\Models\Message\StandalonePriceTiersSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceValidFromAndUntilSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceValidFromSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceValidUntilSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceValueChangedMessage;
use Commercetools\Api\Models\Message\StoreCountriesChangedMessage;
use Commercetools\Api\Models\Message\StoreCreatedMessage;
use Commercetools\Api\Models\Message\StoreDeletedMessage;
use Commercetools\Api\Models\Message\StoreDistributionChannelsChangedMessage;
use Commercetools\Api\Models\Message\StoreLanguagesChangedMessage;
use Commercetools\Api\Models\Message\StoreNameSetMessage;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessage;
use Commercetools\Api\Models\Message\StoreSupplyChannelsChangedMessage;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\OrderEdit\StagedOrder;
use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\PaymentMethod\PaymentMethod;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\ProductDiscount\ProductDiscount;
use Commercetools\Api\Models\ProductSelection\ProductSelection;
use Commercetools\Api\Models\ProductTailoring\ProductTailoring;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\Quote\Quote;
use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicy;
use Commercetools\Api\Models\RecurringOrder\RecurringOrder;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\ShippingMethod\ShippingMethod;
use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\StagedQuote\StagedQuote;
use Commercetools\Api\Models\StandalonePrice\StandalonePrice;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\Store\Store;
use Commercetools\Api\Models\Subscription\Subscription;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\Type\Type;
use Commercetools\Api\Models\Zone\Zone;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface BaseResource extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**

     * @return null|string
     */
    public function getId();

    /**

     * @return null|int
     */
    public function getVersion();

    /**

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
