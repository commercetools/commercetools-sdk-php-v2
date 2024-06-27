<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\ApprovalFlow\ApprovalFlow;
use Commercetools\Api\Models\ApprovalFlow\ApprovalFlowBuilder;
use Commercetools\Api\Models\ApprovalRule\ApprovalRule;
use Commercetools\Api\Models\ApprovalRule\ApprovalRuleBuilder;
use Commercetools\Api\Models\AssociateRole\AssociateRole;
use Commercetools\Api\Models\AssociateRole\AssociateRoleBuilder;
use Commercetools\Api\Models\AttributeGroup\AttributeGroup;
use Commercetools\Api\Models\AttributeGroup\AttributeGroupBuilder;
use Commercetools\Api\Models\BusinessUnit\BusinessUnit;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitBuilder;
use Commercetools\Api\Models\BusinessUnit\Company;
use Commercetools\Api\Models\BusinessUnit\CompanyBuilder;
use Commercetools\Api\Models\BusinessUnit\Division;
use Commercetools\Api\Models\BusinessUnit\DivisionBuilder;
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
use Commercetools\Api\Models\Message\ApprovalFlowApprovedMessage;
use Commercetools\Api\Models\Message\ApprovalFlowApprovedMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalFlowCompletedMessage;
use Commercetools\Api\Models\Message\ApprovalFlowCompletedMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalFlowCreatedMessage;
use Commercetools\Api\Models\Message\ApprovalFlowCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalFlowRejectedMessage;
use Commercetools\Api\Models\Message\ApprovalFlowRejectedMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRuleApproversSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleApproversSetMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRuleCreatedMessage;
use Commercetools\Api\Models\Message\ApprovalRuleCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRuleDescriptionSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleDescriptionSetMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRuleKeySetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleKeySetMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRuleNameSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleNameSetMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRulePredicateSetMessage;
use Commercetools\Api\Models\Message\ApprovalRulePredicateSetMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRuleRequestersSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleRequestersSetMessageBuilder;
use Commercetools\Api\Models\Message\ApprovalRuleStatusSetMessage;
use Commercetools\Api\Models\Message\ApprovalRuleStatusSetMessageBuilder;
use Commercetools\Api\Models\Message\AssociateRoleBuyerAssignableChangedMessage;
use Commercetools\Api\Models\Message\AssociateRoleBuyerAssignableChangedMessageBuilder;
use Commercetools\Api\Models\Message\AssociateRoleCreatedMessage;
use Commercetools\Api\Models\Message\AssociateRoleCreatedMessageBuilder;
use Commercetools\Api\Models\Message\AssociateRoleDeletedMessage;
use Commercetools\Api\Models\Message\AssociateRoleDeletedMessageBuilder;
use Commercetools\Api\Models\Message\AssociateRoleNameChangedMessage;
use Commercetools\Api\Models\Message\AssociateRoleNameChangedMessageBuilder;
use Commercetools\Api\Models\Message\AssociateRolePermissionAddedMessage;
use Commercetools\Api\Models\Message\AssociateRolePermissionAddedMessageBuilder;
use Commercetools\Api\Models\Message\AssociateRolePermissionRemovedMessage;
use Commercetools\Api\Models\Message\AssociateRolePermissionRemovedMessageBuilder;
use Commercetools\Api\Models\Message\AssociateRolePermissionsSetMessage;
use Commercetools\Api\Models\Message\AssociateRolePermissionsSetMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressAddedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldAddedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomFieldRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomTypeRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomTypeSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressCustomTypeSetMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAssociateAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateAddedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAssociateChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAssociateModeChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateModeChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAssociateRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitAssociatesSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociatesSetMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressAddedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitContactEmailSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitContactEmailSetMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitCreatedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCreatedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldAddedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomFieldRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomTypeRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitCustomTypeSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitCustomTypeSetMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitDefaultBillingAddressSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitDefaultBillingAddressSetMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitDefaultShippingAddressSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitDefaultShippingAddressSetMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitDeletedMessage;
use Commercetools\Api\Models\Message\BusinessUnitDeletedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitNameChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitNameChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitParentChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitParentChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressAddedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitStatusChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStatusChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitStoreAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreAddedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitStoreModeChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreModeChangedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitStoreRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreRemovedMessageBuilder;
use Commercetools\Api\Models\Message\BusinessUnitStoresSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoresSetMessageBuilder;
use Commercetools\Api\Models\Message\CartDiscountCreatedMessage;
use Commercetools\Api\Models\Message\CartDiscountCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CartDiscountDeletedMessage;
use Commercetools\Api\Models\Message\CartDiscountDeletedMessageBuilder;
use Commercetools\Api\Models\Message\CartDiscountStoreAddedMessage;
use Commercetools\Api\Models\Message\CartDiscountStoreAddedMessageBuilder;
use Commercetools\Api\Models\Message\CartDiscountStoreRemovedMessage;
use Commercetools\Api\Models\Message\CartDiscountStoreRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CartDiscountStoresSetMessage;
use Commercetools\Api\Models\Message\CartDiscountStoresSetMessageBuilder;
use Commercetools\Api\Models\Message\CategoryCreatedMessage;
use Commercetools\Api\Models\Message\CategoryCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CategorySlugChangedMessage;
use Commercetools\Api\Models\Message\CategorySlugChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessage;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldAddedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomFieldRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomTypeRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressCustomTypeSetMessage;
use Commercetools\Api\Models\Message\CustomerAddressCustomTypeSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessage;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCreatedMessage;
use Commercetools\Api\Models\Message\CustomerCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\CustomerCustomFieldAddedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\CustomerCustomFieldChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\CustomerCustomFieldRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\CustomerCustomTypeRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCustomTypeSetMessage;
use Commercetools\Api\Models\Message\CustomerCustomTypeSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessage;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerDeletedMessage;
use Commercetools\Api\Models\Message\CustomerDeletedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessage;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerEmailTokenCreatedMessage;
use Commercetools\Api\Models\Message\CustomerEmailTokenCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessage;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessage;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldAddedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldAddedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldChangedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldRemovedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomFieldRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupCustomTypeRemovedMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomTypeRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupCustomTypeSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupCustomTypeSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessage;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerPasswordTokenCreatedMessage;
use Commercetools\Api\Models\Message\CustomerPasswordTokenCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessage;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerTitleSetMessage;
use Commercetools\Api\Models\Message\CustomerTitleSetMessageBuilder;
use Commercetools\Api\Models\Message\DiscountCodeCreatedMessage;
use Commercetools\Api\Models\Message\DiscountCodeCreatedMessageBuilder;
use Commercetools\Api\Models\Message\DiscountCodeDeletedMessage;
use Commercetools\Api\Models\Message\DiscountCodeDeletedMessageBuilder;
use Commercetools\Api\Models\Message\DiscountCodeKeySetMessage;
use Commercetools\Api\Models\Message\DiscountCodeKeySetMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessage;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessage;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessage;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessageBuilder;
use Commercetools\Api\Models\Message\Message;
use Commercetools\Api\Models\Message\MessageBuilder;
use Commercetools\Api\Models\Message\OrderMessage;
use Commercetools\Api\Models\Message\OrderMessageBuilder;
use Commercetools\Api\Models\Message\OrderPaymentAddedMessage;
use Commercetools\Api\Models\Message\OrderPaymentAddedMessageBuilder;
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
use Commercetools\Api\Models\Message\ProductPriceAddedMessage;
use Commercetools\Api\Models\Message\ProductPriceAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceChangedMessage;
use Commercetools\Api\Models\Message\ProductPriceChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessage;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceKeySetMessage;
use Commercetools\Api\Models\Message\ProductPriceKeySetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceModeSetMessage;
use Commercetools\Api\Models\Message\ProductPriceModeSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceRemovedMessage;
use Commercetools\Api\Models\Message\ProductPriceRemovedMessageBuilder;
use Commercetools\Api\Models\Message\ProductPricesSetMessage;
use Commercetools\Api\Models\Message\ProductPricesSetMessageBuilder;
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
use Commercetools\Api\Models\Message\ProductSelectionProductExcludedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductExcludedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionVariantExclusionChangedMessage;
use Commercetools\Api\Models\Message\ProductSelectionVariantExclusionChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionVariantSelectionChangedMessage;
use Commercetools\Api\Models\Message\ProductSelectionVariantSelectionChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSlugChangedMessage;
use Commercetools\Api\Models\Message\ProductSlugChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductStateTransitionMessage;
use Commercetools\Api\Models\Message\ProductStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringCreatedMessage;
use Commercetools\Api\Models\Message\ProductTailoringCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringDeletedMessage;
use Commercetools\Api\Models\Message\ProductTailoringDeletedMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringDescriptionSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringDescriptionSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringImageAddedMessage;
use Commercetools\Api\Models\Message\ProductTailoringImageAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringImagesSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringImagesSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringNameSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringNameSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringPublishedMessage;
use Commercetools\Api\Models\Message\ProductTailoringPublishedMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringSlugSetMessage;
use Commercetools\Api\Models\Message\ProductTailoringSlugSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductTailoringUnpublishedMessage;
use Commercetools\Api\Models\Message\ProductTailoringUnpublishedMessageBuilder;
use Commercetools\Api\Models\Message\ProductUnpublishedMessage;
use Commercetools\Api\Models\Message\ProductUnpublishedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantAddedMessage;
use Commercetools\Api\Models\Message\ProductVariantAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessage;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantTailoringAddedMessage;
use Commercetools\Api\Models\Message\ProductVariantTailoringAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantTailoringRemovedMessage;
use Commercetools\Api\Models\Message\ProductVariantTailoringRemovedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteCreatedMessage;
use Commercetools\Api\Models\Message\QuoteCreatedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteCustomerChangedMessage;
use Commercetools\Api\Models\Message\QuoteCustomerChangedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteDeletedMessage;
use Commercetools\Api\Models\Message\QuoteDeletedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRenegotiationRequestedMessage;
use Commercetools\Api\Models\Message\QuoteRenegotiationRequestedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestCreatedMessage;
use Commercetools\Api\Models\Message\QuoteRequestCreatedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestCustomerChangedMessage;
use Commercetools\Api\Models\Message\QuoteRequestCustomerChangedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestDeletedMessage;
use Commercetools\Api\Models\Message\QuoteRequestDeletedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestStateTransitionMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\QuoteStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\QuoteStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\ReviewCreatedMessage;
use Commercetools\Api\Models\Message\ReviewCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ReviewRatingSetMessage;
use Commercetools\Api\Models\Message\ReviewRatingSetMessageBuilder;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessage;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteCreatedMessage;
use Commercetools\Api\Models\Message\StagedQuoteCreatedMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteDeletedMessage;
use Commercetools\Api\Models\Message\StagedQuoteDeletedMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteSellerCommentSetMessage;
use Commercetools\Api\Models\Message\StagedQuoteSellerCommentSetMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteStateChangedMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteValidToSetMessage;
use Commercetools\Api\Models\Message\StagedQuoteValidToSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceActiveChangedMessage;
use Commercetools\Api\Models\Message\StandalonePriceActiveChangedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceCreatedMessage;
use Commercetools\Api\Models\Message\StandalonePriceCreatedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceDeletedMessage;
use Commercetools\Api\Models\Message\StandalonePriceDeletedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceExternalDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceKeySetMessage;
use Commercetools\Api\Models\Message\StandalonePriceKeySetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesAppliedMessage;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesAppliedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesRemovedMessage;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesRemovedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceTierAddedMessage;
use Commercetools\Api\Models\Message\StandalonePriceTierAddedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceTierRemovedMessage;
use Commercetools\Api\Models\Message\StandalonePriceTierRemovedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceTiersSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceTiersSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceValidFromAndUntilSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceValidFromAndUntilSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceValidFromSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceValidFromSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceValidUntilSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceValidUntilSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceValueChangedMessage;
use Commercetools\Api\Models\Message\StandalonePriceValueChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreCountriesChangedMessage;
use Commercetools\Api\Models\Message\StoreCountriesChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreCreatedMessage;
use Commercetools\Api\Models\Message\StoreCreatedMessageBuilder;
use Commercetools\Api\Models\Message\StoreDeletedMessage;
use Commercetools\Api\Models\Message\StoreDeletedMessageBuilder;
use Commercetools\Api\Models\Message\StoreDistributionChannelsChangedMessage;
use Commercetools\Api\Models\Message\StoreDistributionChannelsChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreLanguagesChangedMessage;
use Commercetools\Api\Models\Message\StoreLanguagesChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreNameSetMessage;
use Commercetools\Api\Models\Message\StoreNameSetMessageBuilder;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessage;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreSupplyChannelsChangedMessage;
use Commercetools\Api\Models\Message\StoreSupplyChannelsChangedMessageBuilder;
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
use Commercetools\Api\Models\ProductTailoring\ProductTailoring;
use Commercetools\Api\Models\ProductTailoring\ProductTailoringBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeBuilder;
use Commercetools\Api\Models\Quote\Quote;
use Commercetools\Api\Models\Quote\QuoteBuilder;
use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestBuilder;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethod;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodBuilder;
use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\ShoppingList\ShoppingListBuilder;
use Commercetools\Api\Models\StagedQuote\StagedQuote;
use Commercetools\Api\Models\StagedQuote\StagedQuoteBuilder;
use Commercetools\Api\Models\StandalonePrice\StandalonePrice;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceBuilder;
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
