<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChangeModel extends JsonObjectModel implements Change
{

    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     * @psalm-var array<string, class-string<Change> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'AddAddressChange' => AddAddressChangeModel::class,
       'AddAssetChange' => AddAssetChangeModel::class,
       'AddAssociateChange' => AddAssociateChangeModel::class,
       'AddAttributeDefinitionChange' => AddAttributeDefinitionChangeModel::class,
       'AddBillingAddressIdChange' => AddBillingAddressIdChangeModel::class,
       'AddChannelRolesChange' => AddChannelRolesChangeModel::class,
       'AddCustomLineItemChange' => AddCustomLineItemChangeModel::class,
       'AddDeliveryChange' => AddDeliveryChangeModel::class,
       'AddDiscountCodeChange' => AddDiscountCodeChangeModel::class,
       'AddEnumValueChange' => AddEnumValueChangeModel::class,
       'AddExternalImageChange' => AddExternalImageChangeModel::class,
       'AddFieldDefinitionChange' => AddFieldDefinitionChangeModel::class,
       'AddInheritedAssociateChange' => AddInheritedAssociateChangeModel::class,
       'AddInterfaceInteractionChange' => AddInterfaceInteractionChangeModel::class,
       'AddItemShippingAddressesChange' => AddItemShippingAddressesChangeModel::class,
       'AddLocalizedEnumValueChange' => AddLocalizedEnumValueChangeModel::class,
       'AddLocationChange' => AddLocationChangeModel::class,
       'AddOrderLineItemChange' => AddOrderLineItemChangeModel::class,
       'AddParcelToDeliveryChange' => AddParcelToDeliveryChangeModel::class,
       'AddPaymentChange' => AddPaymentChangeModel::class,
       'AddPlainEnumValueChange' => AddPlainEnumValueChangeModel::class,
       'AddPriceChange' => AddPriceChangeModel::class,
       'AddProductChange' => AddProductChangeModel::class,
       'AddProductSelectionChange' => AddProductSelectionChangeModel::class,
       'AddPropertyChange' => AddPropertyChangeModel::class,
       'AddReturnInfoChange' => AddReturnInfoChangeModel::class,
       'AddShippingAddressIdChange' => AddShippingAddressIdChangeModel::class,
       'AddShippingChange' => AddShippingChangeModel::class,
       'AddShoppingListLineItemChange' => AddShoppingListLineItemChangeModel::class,
       'AddStateRolesChange' => AddStateRolesChangeModel::class,
       'AddTaxRateChange' => AddTaxRateChangeModel::class,
       'AddTextLineItemChange' => AddTextLineItemChangeModel::class,
       'AddToCategoryChange' => AddToCategoryChangeModel::class,
       'AddTransactionChange' => AddTransactionChangeModel::class,
       'AddVariantChange' => AddVariantChangeModel::class,
       'ChangeAddressChange' => ChangeAddressChangeModel::class,
       'ChangeAmountAuthorizedChange' => ChangeAmountAuthorizedChangeModel::class,
       'ChangeAmountPlannedChange' => ChangeAmountPlannedChangeModel::class,
       'ChangeApprovalRuleModeChange' => ChangeApprovalRuleModeChangeModel::class,
       'ChangeAssetNameChange' => ChangeAssetNameChangeModel::class,
       'ChangeAssetOrderChange' => ChangeAssetOrderChangeModel::class,
       'ChangeAssociateChange' => ChangeAssociateChangeModel::class,
       'ChangeAssociateModeChange' => ChangeAssociateModeChangeModel::class,
       'ChangeAttributeConstraintChange' => ChangeAttributeConstraintChangeModel::class,
       'ChangeAttributeOrderByNameChange' => ChangeAttributeOrderByNameChangeModel::class,
       'ChangeBuyerAssignableChange' => ChangeBuyerAssignableChangeModel::class,
       'ChangeCartDiscountsChange' => ChangeCartDiscountsChangeModel::class,
       'ChangeCartPredicateChange' => ChangeCartPredicateChangeModel::class,
       'ChangeCustomLineItemPriceRoundingModeChange' => ChangeCustomLineItemPriceRoundingModeChangeModel::class,
       'ChangeCustomLineItemQuantityChange' => ChangeCustomLineItemQuantityChangeModel::class,
       'ChangeCustomerChange' => ChangeCustomerChangeModel::class,
       'ChangeDescriptionChange' => ChangeDescriptionChangeModel::class,
       'ChangeDiscountTypeCombinationChange' => ChangeDiscountTypeCombinationChangeModel::class,
       'ChangeEmailChange' => ChangeEmailChangeModel::class,
       'ChangeEnumValueLabelChange' => ChangeEnumValueLabelChangeModel::class,
       'ChangeEnumValueOrderChange' => ChangeEnumValueOrderChangeModel::class,
       'ChangeFieldDefinitionOrderChange' => ChangeFieldDefinitionOrderChangeModel::class,
       'ChangeGroupsChange' => ChangeGroupsChangeModel::class,
       'ChangeIncludedInStatisticsChange' => ChangeIncludedInStatisticsChangeModel::class,
       'ChangeInheritedAssociateChange' => ChangeInheritedAssociateChangeModel::class,
       'ChangeInitialChange' => ChangeInitialChangeModel::class,
       'ChangeInputHintChange' => ChangeInputHintChangeModel::class,
       'ChangeIsActiveChange' => ChangeIsActiveChangeModel::class,
       'ChangeIsSearchableChange' => ChangeIsSearchableChangeModel::class,
       'ChangeKeyChange' => ChangeKeyChangeModel::class,
       'ChangeLabelChange' => ChangeLabelChangeModel::class,
       'ChangeLastVariantIdChange' => ChangeLastVariantIdChangeModel::class,
       'ChangeLineItemNameChange' => ChangeLineItemNameChangeModel::class,
       'ChangeLineItemPriceRoundingModeChange' => ChangeLineItemPriceRoundingModeChangeModel::class,
       'ChangeLineItemPublishedChange' => ChangeLineItemPublishedChangeModel::class,
       'ChangeLineItemQuantityChange' => ChangeLineItemQuantityChangeModel::class,
       'ChangeLocalizedDescriptionChange' => ChangeLocalizedDescriptionChangeModel::class,
       'ChangeLocalizedEnumValueLabelChange' => ChangeLocalizedEnumValueLabelChangeModel::class,
       'ChangeLocalizedEnumValueOrderChange' => ChangeLocalizedEnumValueOrderChangeModel::class,
       'ChangeLocalizedNameChange' => ChangeLocalizedNameChangeModel::class,
       'ChangeMasterVariantChange' => ChangeMasterVariantChangeModel::class,
       'ChangeNameChange' => ChangeNameChangeModel::class,
       'ChangeOrderHintChange' => ChangeOrderHintChangeModel::class,
       'ChangeOrderStateChange' => ChangeOrderStateChangeModel::class,
       'ChangeParentChange' => ChangeParentChangeModel::class,
       'ChangeParentUnitChange' => ChangeParentUnitChangeModel::class,
       'ChangePaymentStateChange' => ChangePaymentStateChangeModel::class,
       'ChangePlainEnumValueLabelChange' => ChangePlainEnumValueLabelChangeModel::class,
       'ChangePlainEnumValueOrderChange' => ChangePlainEnumValueOrderChangeModel::class,
       'ChangePredicateChange' => ChangePredicateChangeModel::class,
       'ChangePriceChange' => ChangePriceChangeModel::class,
       'ChangePriceRoundingModeChange' => ChangePriceRoundingModeChangeModel::class,
       'ChangeProductSelectionActiveChange' => ChangeProductSelectionActiveChangeModel::class,
       'ChangeQuantityChange' => ChangeQuantityChangeModel::class,
       'ChangeQuoteRequestStateChange' => ChangeQuoteRequestStateChangeModel::class,
       'ChangeQuoteStateChange' => ChangeQuoteStateChangeModel::class,
       'ChangeRequiresDiscountCodeChange' => ChangeRequiresDiscountCodeChangeModel::class,
       'ChangeReviewRatingStatisticsChange' => ChangeReviewRatingStatisticsChangeModel::class,
       'ChangeShipmentStateChange' => ChangeShipmentStateChangeModel::class,
       'ChangeShoppingListLineItemQuantityChange' => ChangeShoppingListLineItemQuantityChangeModel::class,
       'ChangeShoppingListLineItemsOrderChange' => ChangeShoppingListLineItemsOrderChangeModel::class,
       'ChangeSlugChange' => ChangeSlugChangeModel::class,
       'ChangeSortOrderChange' => ChangeSortOrderChangeModel::class,
       'ChangeStackingModeChange' => ChangeStackingModeChangeModel::class,
       'ChangeStagedQuoteStateChange' => ChangeStagedQuoteStateChangeModel::class,
       'ChangeStateTypeChange' => ChangeStateTypeChangeModel::class,
       'ChangeStatusChange' => ChangeStatusChangeModel::class,
       'ChangeTargetChange' => ChangeTargetChangeModel::class,
       'ChangeTaxCalculationModeChange' => ChangeTaxCalculationModeChangeModel::class,
       'ChangeTaxModeChange' => ChangeTaxModeChangeModel::class,
       'ChangeTaxRoundingModeChange' => ChangeTaxRoundingModeChangeModel::class,
       'ChangeTextLineItemNameChange' => ChangeTextLineItemNameChangeModel::class,
       'ChangeTextLineItemQuantityChange' => ChangeTextLineItemQuantityChangeModel::class,
       'ChangeTextLineItemsOrderChange' => ChangeTextLineItemsOrderChangeModel::class,
       'ChangeTopLevelUnitChange' => ChangeTopLevelUnitChangeModel::class,
       'ChangeTransactionInteractionIdChange' => ChangeTransactionInteractionIdChangeModel::class,
       'ChangeTransactionStateChange' => ChangeTransactionStateChangeModel::class,
       'ChangeTransactionTimestampChange' => ChangeTransactionTimestampChangeModel::class,
       'ChangeValueChange' => ChangeValueChangeModel::class,
       'ExcludeProductChange' => ExcludeProductChangeModel::class,
       'MoveImageToPositionChange' => MoveImageToPositionChangeModel::class,
       'PublishChange' => PublishChangeModel::class,
       'RemoveAddressChange' => RemoveAddressChangeModel::class,
       'RemoveAssetChange' => RemoveAssetChangeModel::class,
       'RemoveAssociateChange' => RemoveAssociateChangeModel::class,
       'RemoveAttributeDefinitionChange' => RemoveAttributeDefinitionChangeModel::class,
       'RemoveBillingAddressIdChange' => RemoveBillingAddressIdChangeModel::class,
       'RemoveChannelRolesChange' => RemoveChannelRolesChangeModel::class,
       'RemoveCustomLineItemChange' => RemoveCustomLineItemChangeModel::class,
       'RemoveDeliveryItemsChange' => RemoveDeliveryItemsChangeModel::class,
       'RemoveDiscountCodeChange' => RemoveDiscountCodeChangeModel::class,
       'RemoveEnumValuesChange' => RemoveEnumValuesChangeModel::class,
       'RemoveFieldDefinitionChange' => RemoveFieldDefinitionChangeModel::class,
       'RemoveFromCategoryChange' => RemoveFromCategoryChangeModel::class,
       'RemoveImageChange' => RemoveImageChangeModel::class,
       'RemoveInheritedAssociateChange' => RemoveInheritedAssociateChangeModel::class,
       'RemoveItemShippingAddressesChange' => RemoveItemShippingAddressesChangeModel::class,
       'RemoveLocalizedEnumValuesChange' => RemoveLocalizedEnumValuesChangeModel::class,
       'RemoveLocationChange' => RemoveLocationChangeModel::class,
       'RemoveOrderLineItemChange' => RemoveOrderLineItemChangeModel::class,
       'RemoveParcelFromDeliveryChange' => RemoveParcelFromDeliveryChangeModel::class,
       'RemovePaymentChange' => RemovePaymentChangeModel::class,
       'RemovePriceChange' => RemovePriceChangeModel::class,
       'RemoveProductChange' => RemoveProductChangeModel::class,
       'RemoveProductSelectionChange' => RemoveProductSelectionChangeModel::class,
       'RemovePropertyChange' => RemovePropertyChangeModel::class,
       'RemoveShippingAddressIdChange' => RemoveShippingAddressIdChangeModel::class,
       'RemoveShippingChange' => RemoveShippingChangeModel::class,
       'RemoveShoppingListLineItemChange' => RemoveShoppingListLineItemChangeModel::class,
       'RemoveStateRolesChange' => RemoveStateRolesChangeModel::class,
       'RemoveTaxRateChange' => RemoveTaxRateChangeModel::class,
       'RemoveTextLineItemChange' => RemoveTextLineItemChangeModel::class,
       'RemoveVariantChange' => RemoveVariantChangeModel::class,
       'ReplaceTaxRateChange' => ReplaceTaxRateChangeModel::class,
       'RequestQuoteRenegotiationChange' => RequestQuoteRenegotiationChangeModel::class,
       'RevertStagedChangesChange' => RevertStagedChangesChangeModel::class,
       'RevertStagedVariantChangesChange' => RevertStagedVariantChangesChangeModel::class,
       'SetAddressChange' => SetAddressChangeModel::class,
       'SetAddressCustomFieldChange' => SetAddressCustomFieldChangeModel::class,
       'SetAddressCustomTypeChange' => SetAddressCustomTypeChangeModel::class,
       'SetAncestorsChange' => SetAncestorsChangeModel::class,
       'SetAnonymousIdChange' => SetAnonymousIdChangeModel::class,
       'SetApplicationVersionChange' => SetApplicationVersionChangeModel::class,
       'SetAssetCustomFieldChange' => SetAssetCustomFieldChangeModel::class,
       'SetAssetCustomTypeChange' => SetAssetCustomTypeChangeModel::class,
       'SetAssetDescriptionChange' => SetAssetDescriptionChangeModel::class,
       'SetAssetKeyChange' => SetAssetKeyChangeModel::class,
       'SetAssetSourcesChange' => SetAssetSourcesChangeModel::class,
       'SetAssetTagsChange' => SetAssetTagsChangeModel::class,
       'SetAssociatesChange' => SetAssociatesChangeModel::class,
       'SetAttributeChange' => SetAttributeChangeModel::class,
       'SetAuthenticationModeChange' => SetAuthenticationModeChangeModel::class,
       'SetAuthorNameChange' => SetAuthorNameChangeModel::class,
       'SetBillingAddressChange' => SetBillingAddressChangeModel::class,
       'SetBillingAddressCustomFieldChange' => SetBillingAddressCustomFieldChangeModel::class,
       'SetBillingAddressCustomTypeChange' => SetBillingAddressCustomTypeChangeModel::class,
       'SetBusinessUnitChange' => SetBusinessUnitChangeModel::class,
       'SetCartPredicateChange' => SetCartPredicateChangeModel::class,
       'SetCategoryOrderHintChange' => SetCategoryOrderHintChangeModel::class,
       'SetChannelRolesChange' => SetChannelRolesChangeModel::class,
       'SetCompanyNameChange' => SetCompanyNameChangeModel::class,
       'SetContactEmailChange' => SetContactEmailChangeModel::class,
       'SetCountriesChange' => SetCountriesChangeModel::class,
       'SetCountryChange' => SetCountryChangeModel::class,
       'SetCustomFieldChange' => SetCustomFieldChangeModel::class,
       'SetCustomLineItemCustomFieldChange' => SetCustomLineItemCustomFieldChangeModel::class,
       'SetCustomLineItemCustomTypeChange' => SetCustomLineItemCustomTypeChangeModel::class,
       'SetCustomLineItemDiscountedPriceChange' => SetCustomLineItemDiscountedPriceChangeModel::class,
       'SetCustomLineItemDiscountedPricePerQuantityChange' => SetCustomLineItemDiscountedPricePerQuantityChangeModel::class,
       'SetCustomLineItemMoneyChange' => SetCustomLineItemMoneyChangeModel::class,
       'SetCustomLineItemShippingDetailsChange' => SetCustomLineItemShippingDetailsChangeModel::class,
       'SetCustomLineItemTaxAmountChange' => SetCustomLineItemTaxAmountChangeModel::class,
       'SetCustomLineItemTaxCategoryChange' => SetCustomLineItemTaxCategoryChangeModel::class,
       'SetCustomLineItemTaxRateChange' => SetCustomLineItemTaxRateChangeModel::class,
       'SetCustomLineItemTaxedPriceChange' => SetCustomLineItemTaxedPriceChangeModel::class,
       'SetCustomLineItemTotalPriceChange' => SetCustomLineItemTotalPriceChangeModel::class,
       'SetCustomShippingMethodChange' => SetCustomShippingMethodChangeModel::class,
       'SetCustomTypeChange' => SetCustomTypeChangeModel::class,
       'SetCustomerChange' => SetCustomerChangeModel::class,
       'SetCustomerEmailChange' => SetCustomerEmailChangeModel::class,
       'SetCustomerGroupAssignmentsChange' => SetCustomerGroupAssignmentsChangeModel::class,
       'SetCustomerGroupChange' => SetCustomerGroupChangeModel::class,
       'SetCustomerIdChange' => SetCustomerIdChangeModel::class,
       'SetCustomerNumberChange' => SetCustomerNumberChangeModel::class,
       'SetDateOfBirthChange' => SetDateOfBirthChangeModel::class,
       'SetDefaultBillingAddressChange' => SetDefaultBillingAddressChangeModel::class,
       'SetDefaultShippingAddressChange' => SetDefaultShippingAddressChangeModel::class,
       'SetDeleteDaysAfterLastModificationChange' => SetDeleteDaysAfterLastModificationChangeModel::class,
       'SetDeliveryAddressChange' => SetDeliveryAddressChangeModel::class,
       'SetDeliveryAddressCustomFieldChange' => SetDeliveryAddressCustomFieldChangeModel::class,
       'SetDeliveryAddressCustomTypeChange' => SetDeliveryAddressCustomTypeChangeModel::class,
       'SetDeliveryCustomFieldChange' => SetDeliveryCustomFieldChangeModel::class,
       'SetDeliveryCustomTypeChange' => SetDeliveryCustomTypeChangeModel::class,
       'SetDeliveryItemsChange' => SetDeliveryItemsChangeModel::class,
       'SetDescriptionChange' => SetDescriptionChangeModel::class,
       'SetDirectDiscountsChange' => SetDirectDiscountsChangeModel::class,
       'SetDiscountOnTotalPriceChange' => SetDiscountOnTotalPriceChangeModel::class,
       'SetDiscountedPriceChange' => SetDiscountedPriceChangeModel::class,
       'SetDistributionChannelsChange' => SetDistributionChannelsChangeModel::class,
       'SetExpectedDeliveryChange' => SetExpectedDeliveryChangeModel::class,
       'SetExternalIdChange' => SetExternalIdChangeModel::class,
       'SetFirstNameChange' => SetFirstNameChangeModel::class,
       'SetGeoLocationChange' => SetGeoLocationChangeModel::class,
       'SetImageLabelChange' => SetImageLabelChangeModel::class,
       'SetInheritedAssociatesChange' => SetInheritedAssociatesChangeModel::class,
       'SetInheritedStoresChange' => SetInheritedStoresChangeModel::class,
       'SetInputTipChange' => SetInputTipChangeModel::class,
       'SetInterfaceIdChange' => SetInterfaceIdChangeModel::class,
       'SetIsValidChange' => SetIsValidChangeModel::class,
       'SetItemShippingAddressCustomFieldChange' => SetItemShippingAddressCustomFieldChangeModel::class,
       'SetItemShippingAddressCustomTypeChange' => SetItemShippingAddressCustomTypeChangeModel::class,
       'SetKeyChange' => SetKeyChangeModel::class,
       'SetLanguagesChange' => SetLanguagesChangeModel::class,
       'SetLastNameChange' => SetLastNameChangeModel::class,
       'SetLineItemDeactivatedAtChange' => SetLineItemDeactivatedAtChangeModel::class,
       'SetLineItemDiscountedPriceChange' => SetLineItemDiscountedPriceChangeModel::class,
       'SetLineItemDiscountedPricePerQuantityChange' => SetLineItemDiscountedPricePerQuantityChangeModel::class,
       'SetLineItemDistributionChannelChange' => SetLineItemDistributionChannelChangeModel::class,
       'SetLineItemPriceChange' => SetLineItemPriceChangeModel::class,
       'SetLineItemProductKeyChange' => SetLineItemProductKeyChangeModel::class,
       'SetLineItemProductSlugChange' => SetLineItemProductSlugChangeModel::class,
       'SetLineItemShippingDetailsChange' => SetLineItemShippingDetailsChangeModel::class,
       'SetLineItemTaxAmountChange' => SetLineItemTaxAmountChangeModel::class,
       'SetLineItemTaxRateChange' => SetLineItemTaxRateChangeModel::class,
       'SetLineItemTaxedPriceChange' => SetLineItemTaxedPriceChangeModel::class,
       'SetLineItemTotalPriceChange' => SetLineItemTotalPriceChangeModel::class,
       'SetLocaleChange' => SetLocaleChangeModel::class,
       'SetLocalizedDescriptionChange' => SetLocalizedDescriptionChangeModel::class,
       'SetLocalizedNameChange' => SetLocalizedNameChangeModel::class,
       'SetMaxApplicationsChange' => SetMaxApplicationsChangeModel::class,
       'SetMaxApplicationsPerCustomerChange' => SetMaxApplicationsPerCustomerChangeModel::class,
       'SetMaxCartQuantityChange' => SetMaxCartQuantityChangeModel::class,
       'SetMetaDescriptionChange' => SetMetaDescriptionChangeModel::class,
       'SetMetaKeywordsChange' => SetMetaKeywordsChangeModel::class,
       'SetMetaTitleChange' => SetMetaTitleChangeModel::class,
       'SetMethodInfoInterfaceChange' => SetMethodInfoInterfaceChangeModel::class,
       'SetMethodInfoMethodChange' => SetMethodInfoMethodChangeModel::class,
       'SetMethodInfoNameChange' => SetMethodInfoNameChangeModel::class,
       'SetMiddleNameChange' => SetMiddleNameChangeModel::class,
       'SetMinCartQuantityChange' => SetMinCartQuantityChangeModel::class,
       'SetNameChange' => SetNameChangeModel::class,
       'SetOrderLineItemCustomFieldChange' => SetOrderLineItemCustomFieldChangeModel::class,
       'SetOrderLineItemCustomTypeChange' => SetOrderLineItemCustomTypeChangeModel::class,
       'SetOrderNumberChange' => SetOrderNumberChangeModel::class,
       'SetOrderTaxedPriceChange' => SetOrderTaxedPriceChangeModel::class,
       'SetOrderTotalPriceChange' => SetOrderTotalPriceChangeModel::class,
       'SetOrderTotalTaxChange' => SetOrderTotalTaxChangeModel::class,
       'SetParcelCustomFieldChange' => SetParcelCustomFieldChangeModel::class,
       'SetParcelCustomTypeChange' => SetParcelCustomTypeChangeModel::class,
       'SetParcelItemsChange' => SetParcelItemsChangeModel::class,
       'SetParcelMeasurementsChange' => SetParcelMeasurementsChangeModel::class,
       'SetParcelTrackingDataChange' => SetParcelTrackingDataChangeModel::class,
       'SetPasswordChange' => SetPasswordChangeModel::class,
       'SetPermissionsChange' => SetPermissionsChangeModel::class,
       'SetPriceKeyChange' => SetPriceKeyChangeModel::class,
       'SetPriceModeChange' => SetPriceModeChangeModel::class,
       'SetPricesChange' => SetPricesChangeModel::class,
       'SetProductAttributeChange' => SetProductAttributeChangeModel::class,
       'SetProductCountChange' => SetProductCountChangeModel::class,
       'SetProductPriceCustomFieldChange' => SetProductPriceCustomFieldChangeModel::class,
       'SetProductPriceCustomTypeChange' => SetProductPriceCustomTypeChangeModel::class,
       'SetProductSelectionsChange' => SetProductSelectionsChangeModel::class,
       'SetProductVariantKeyChange' => SetProductVariantKeyChangeModel::class,
       'SetPropertyChange' => SetPropertyChangeModel::class,
       'SetPurchaseOrderNumberChange' => SetPurchaseOrderNumberChangeModel::class,
       'SetRatingChange' => SetRatingChangeModel::class,
       'SetReferencesChange' => SetReferencesChangeModel::class,
       'SetReservationsChange' => SetReservationsChangeModel::class,
       'SetRestockableInDaysChange' => SetRestockableInDaysChangeModel::class,
       'SetReturnInfoChange' => SetReturnInfoChangeModel::class,
       'SetReturnItemCustomLineItemCustomFieldChange' => SetReturnItemCustomLineItemCustomFieldChangeModel::class,
       'SetReturnItemCustomLineItemCustomTypeChange' => SetReturnItemCustomLineItemCustomTypeChangeModel::class,
       'SetReturnItemLineItemCustomFieldChange' => SetReturnItemLineItemCustomFieldChangeModel::class,
       'SetReturnItemLineItemCustomTypeChange' => SetReturnItemLineItemCustomTypeChangeModel::class,
       'SetReturnPaymentStateChange' => SetReturnPaymentStateChangeModel::class,
       'SetReturnShipmentStateChange' => SetReturnShipmentStateChangeModel::class,
       'SetSalutationChange' => SetSalutationChangeModel::class,
       'SetSearchKeywordsChange' => SetSearchKeywordsChangeModel::class,
       'SetSellerCommentChange' => SetSellerCommentChangeModel::class,
       'SetShippingAddressChange' => SetShippingAddressChangeModel::class,
       'SetShippingAddressCustomFieldChange' => SetShippingAddressCustomFieldChangeModel::class,
       'SetShippingAddressCustomTypeChange' => SetShippingAddressCustomTypeChangeModel::class,
       'SetShippingCustomFieldChange' => SetShippingCustomFieldChangeModel::class,
       'SetShippingCustomTypeChange' => SetShippingCustomTypeChangeModel::class,
       'SetShippingInfoDiscountedPriceChange' => SetShippingInfoDiscountedPriceChangeModel::class,
       'SetShippingInfoPriceChange' => SetShippingInfoPriceChangeModel::class,
       'SetShippingInfoTaxedPriceChange' => SetShippingInfoTaxedPriceChangeModel::class,
       'SetShippingMethodChange' => SetShippingMethodChangeModel::class,
       'SetShippingMethodTaxAmountChange' => SetShippingMethodTaxAmountChangeModel::class,
       'SetShippingMethodTaxCategoryChange' => SetShippingMethodTaxCategoryChangeModel::class,
       'SetShippingMethodTaxRateChange' => SetShippingMethodTaxRateChangeModel::class,
       'SetShippingRateChange' => SetShippingRateChangeModel::class,
       'SetShippingRateInputChange' => SetShippingRateInputChangeModel::class,
       'SetShoppingListLineItemCustomFieldChange' => SetShoppingListLineItemCustomFieldChangeModel::class,
       'SetShoppingListLineItemCustomTypeChange' => SetShoppingListLineItemCustomTypeChangeModel::class,
       'SetSkuChange' => SetSkuChangeModel::class,
       'SetSlugChange' => SetSlugChangeModel::class,
       'SetStateRolesChange' => SetStateRolesChangeModel::class,
       'SetStatusInterfaceCodeChange' => SetStatusInterfaceCodeChangeModel::class,
       'SetStatusInterfaceTextChange' => SetStatusInterfaceTextChangeModel::class,
       'SetStoreChange' => SetStoreChangeModel::class,
       'SetStoreModeChange' => SetStoreModeChangeModel::class,
       'SetStoresChange' => SetStoresChangeModel::class,
       'SetSupplyChannelChange' => SetSupplyChannelChangeModel::class,
       'SetSupplyChannelsChange' => SetSupplyChannelsChangeModel::class,
       'SetTargetChange' => SetTargetChangeModel::class,
       'SetTaxCategoryChange' => SetTaxCategoryChangeModel::class,
       'SetTaxedShippingPriceChange' => SetTaxedShippingPriceChangeModel::class,
       'SetTextChange' => SetTextChangeModel::class,
       'SetTextLineItemCustomFieldChange' => SetTextLineItemCustomFieldChangeModel::class,
       'SetTextLineItemCustomTypeChange' => SetTextLineItemCustomTypeChangeModel::class,
       'SetTextLineItemDescriptionChange' => SetTextLineItemDescriptionChangeModel::class,
       'SetTitleChange' => SetTitleChangeModel::class,
       'SetTransactionCustomFieldChange' => SetTransactionCustomFieldChangeModel::class,
       'SetTransactionCustomTypeChange' => SetTransactionCustomTypeChangeModel::class,
       'SetTransitionsChange' => SetTransitionsChangeModel::class,
       'SetUnitTypeChange' => SetUnitTypeChangeModel::class,
       'SetValidFromAndUntilChange' => SetValidFromAndUntilChangeModel::class,
       'SetValidFromChange' => SetValidFromChangeModel::class,
       'SetValidToChange' => SetValidToChangeModel::class,
       'SetValidUntilChange' => SetValidUntilChangeModel::class,
       'SetValueChange' => SetValueChangeModel::class,
       'SetVariantAvailabilityChange' => SetVariantAvailabilityChangeModel::class,
       'SetVariantExclusionChange' => SetVariantExclusionChangeModel::class,
       'SetVariantSelectionChange' => SetVariantSelectionChangeModel::class,
       'SetVatIdChange' => SetVatIdChangeModel::class,
       'ShippingMethodAddShippingRateChange' => ShippingMethodAddShippingRateChangeModel::class,
       'ShippingMethodAddZoneChange' => ShippingMethodAddZoneChangeModel::class,
       'ShippingMethodChangeActiveChange' => ShippingMethodChangeActiveChangeModel::class,
       'ShippingMethodChangeIsDefaultChange' => ShippingMethodChangeIsDefaultChangeModel::class,
       'ShippingMethodChangeNameChange' => ShippingMethodChangeNameChangeModel::class,
       'ShippingMethodChangeTaxCategoryChange' => ShippingMethodChangeTaxCategoryChangeModel::class,
       'ShippingMethodRemoveShippingRateChange' => ShippingMethodRemoveShippingRateChangeModel::class,
       'ShippingMethodRemoveZoneChange' => ShippingMethodRemoveZoneChangeModel::class,
       'ShippingMethodSetCustomFieldChange' => ShippingMethodSetCustomFieldChangeModel::class,
       'ShippingMethodSetCustomTypeChange' => ShippingMethodSetCustomTypeChangeModel::class,
       'ShippingMethodSetKeyChange' => ShippingMethodSetKeyChangeModel::class,
       'ShippingMethodSetLocalizedDescriptionChange' => ShippingMethodSetLocalizedDescriptionChangeModel::class,
       'ShippingMethodSetLocalizedNameChange' => ShippingMethodSetLocalizedNameChangeModel::class,
       'ShippingMethodSetPredicateChange' => ShippingMethodSetPredicateChangeModel::class,
       'StandalonePriceChangeActiveChange' => StandalonePriceChangeActiveChangeModel::class,
       'StandalonePriceChangeValueChange' => StandalonePriceChangeValueChangeModel::class,
       'StandalonePriceSetCustomFieldChange' => StandalonePriceSetCustomFieldChangeModel::class,
       'StandalonePriceSetCustomTypeChange' => StandalonePriceSetCustomTypeChangeModel::class,
       'StandalonePriceSetDiscountedPriceChange' => StandalonePriceSetDiscountedPriceChangeModel::class,
       'StandalonePriceSetKeyChange' => StandalonePriceSetKeyChangeModel::class,
       'StandalonePriceSetPriceTiersChange' => StandalonePriceSetPriceTiersChangeModel::class,
       'StandalonePriceSetValidFromAndUntilChange' => StandalonePriceSetValidFromAndUntilChangeModel::class,
       'StandalonePriceSetValidFromChange' => StandalonePriceSetValidFromChangeModel::class,
       'StandalonePriceSetValidUntilChange' => StandalonePriceSetValidUntilChangeModel::class,
       'TransitionCustomLineItemStateChange' => TransitionCustomLineItemStateChangeModel::class,
       'TransitionLineItemStateChange' => TransitionLineItemStateChangeModel::class,
       'TransitionStateChange' => TransitionStateChangeModel::class,
       'UnknownChange' => UnknownChangeModel::class,
       'UnpublishChange' => UnpublishChangeModel::class,
       'UpdateItemShippingAddressChange' => UpdateItemShippingAddressChangeModel::class,
       'UpdateSyncInfoChange' => UpdateSyncInfoChangeModel::class,
       'VerifyEmailChange' => VerifyEmailChangeModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->type = $type;

    }

    /**
     * <p>Unique discriminator value to reliably deserialize the data type.</p>
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
     * <p><a href="#type-of-change">Type of change</a> on a resource that is similar to the update action it relates to, where possible.
     * It is not a unique identifier for the data structure, for example, the <code>setDescription</code> change can occur with a localized and non-localized representation.</p>
     * <p><a href="ctp:history:type:Record">Records</a> can be filtered by this value using the <code>changes</code> query parameter.</p>
     *
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }



    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Change>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = Change::DISCRIMINATOR_FIELD;
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

       /** @psalm-var class-string<Change> */
       $type = ChangeModel::class;
       return $type;
    }
}
