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
     * @var ?string
     */
    protected $type;

    /**
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
       'AddAttributeDefinitionChange' => AddAttributeDefinitionChangeModel::class,
       'AddBillingAddressIdChange' => AddBillingAddressIdChangeModel::class,
       'AddChannelRolesChange' => AddChannelRolesChangeModel::class,
       'AddCustomLineItemChange' => AddCustomLineItemChangeModel::class,
       'AddDeliveryChange' => AddDeliveryChangeModel::class,
       'AddEnumValueChange' => AddEnumValueChangeModel::class,
       'AddExternalImageChange' => AddExternalImageChangeModel::class,
       'AddFieldDefinitionChange' => AddFieldDefinitionChangeModel::class,
       'AddInterfaceInteractionChange' => AddInterfaceInteractionChangeModel::class,
       'AddItemShippingAddressesChange' => AddItemShippingAddressesChangeModel::class,
       'AddLocalizedEnumValueChange' => AddLocalizedEnumValueChangeModel::class,
       'AddLocationChange' => AddLocationChangeModel::class,
       'AddOrderLineItemChange' => AddOrderLineItemChangeModel::class,
       'AddParcelToDeliveryChange' => AddParcelToDeliveryChangeModel::class,
       'AddPaymentChange' => AddPaymentChangeModel::class,
       'AddPlainEnumValueChange' => AddPlainEnumValueChangeModel::class,
       'AddPriceChange' => AddPriceChangeModel::class,
       'AddReturnInfoChange' => AddReturnInfoChangeModel::class,
       'AddShippingAddressIdChange' => AddShippingAddressIdChangeModel::class,
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
       'ChangeAssetNameChange' => ChangeAssetNameChangeModel::class,
       'ChangeAssetOrderChange' => ChangeAssetOrderChangeModel::class,
       'ChangeAttributeConstraintChange' => ChangeAttributeConstraintChangeModel::class,
       'ChangeAttributeOrderByNameChange' => ChangeAttributeOrderByNameChangeModel::class,
       'ChangeCartDiscountsChange' => ChangeCartDiscountsChangeModel::class,
       'ChangeCartPredicateChange' => ChangeCartPredicateChangeModel::class,
       'ChangeCustomLineItemQuantityChange' => ChangeCustomLineItemQuantityChangeModel::class,
       'ChangeDescriptionChange' => ChangeDescriptionChangeModel::class,
       'ChangeEmailChange' => ChangeEmailChangeModel::class,
       'ChangeEnumValueLabelChange' => ChangeEnumValueLabelChangeModel::class,
       'ChangeEnumValueOrderChange' => ChangeEnumValueOrderChangeModel::class,
       'ChangeFieldDefinitionOrderChange' => ChangeFieldDefinitionOrderChangeModel::class,
       'ChangeGroupsChange' => ChangeGroupsChangeModel::class,
       'ChangeInitialChange' => ChangeInitialChangeModel::class,
       'ChangeInputHintChange' => ChangeInputHintChangeModel::class,
       'ChangeIsActiveChange' => ChangeIsActiveChangeModel::class,
       'ChangeIsSearchableChange' => ChangeIsSearchableChangeModel::class,
       'ChangeKeyChange' => ChangeKeyChangeModel::class,
       'ChangeLabelChange' => ChangeLabelChangeModel::class,
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
       'ChangePaymentStateChange' => ChangePaymentStateChangeModel::class,
       'ChangePlainEnumValueLabelChange' => ChangePlainEnumValueLabelChangeModel::class,
       'ChangePlainEnumValueOrderChange' => ChangePlainEnumValueOrderChangeModel::class,
       'ChangePredicateChange' => ChangePredicateChangeModel::class,
       'ChangePriceChange' => ChangePriceChangeModel::class,
       'ChangeQuantityChange' => ChangeQuantityChangeModel::class,
       'ChangeRequiresDiscountCodeChange' => ChangeRequiresDiscountCodeChangeModel::class,
       'ChangeReviewRatingStatisticsChange' => ChangeReviewRatingStatisticsChangeModel::class,
       'ChangeShipmentStateChange' => ChangeShipmentStateChangeModel::class,
       'ChangeShoppingListLineItemQuantityChange' => ChangeShoppingListLineItemQuantityChangeModel::class,
       'ChangeShoppingListLineItemsOrderChange' => ChangeShoppingListLineItemsOrderChangeModel::class,
       'ChangeSlugChange' => ChangeSlugChangeModel::class,
       'ChangeSortOrderChange' => ChangeSortOrderChangeModel::class,
       'ChangeStackingModeChange' => ChangeStackingModeChangeModel::class,
       'ChangeStateTypeChange' => ChangeStateTypeChangeModel::class,
       'ChangeTargetChange' => ChangeTargetChangeModel::class,
       'ChangeTextLineItemNameChange' => ChangeTextLineItemNameChangeModel::class,
       'ChangeTextLineItemQuantityChange' => ChangeTextLineItemQuantityChangeModel::class,
       'ChangeTextLineItemsOrderChange' => ChangeTextLineItemsOrderChangeModel::class,
       'ChangeTransactionInteractionIdChange' => ChangeTransactionInteractionIdChangeModel::class,
       'ChangeTransactionStateChange' => ChangeTransactionStateChangeModel::class,
       'ChangeTransactionTimestampChange' => ChangeTransactionTimestampChangeModel::class,
       'ChangeValueChange' => ChangeValueChangeModel::class,
       'MoveImageToPositionChange' => MoveImageToPositionChangeModel::class,
       'PublishChange' => PublishChangeModel::class,
       'RemoveAddressChange' => RemoveAddressChangeModel::class,
       'RemoveAssetChange' => RemoveAssetChangeModel::class,
       'RemoveAttributeDefinitionChange' => RemoveAttributeDefinitionChangeModel::class,
       'RemoveBillingAddressIdChange' => RemoveBillingAddressIdChangeModel::class,
       'RemoveChannelRolesChange' => RemoveChannelRolesChangeModel::class,
       'RemoveCustomLineItemChange' => RemoveCustomLineItemChangeModel::class,
       'RemoveDeliveryItemsChange' => RemoveDeliveryItemsChangeModel::class,
       'RemoveEnumValuesChange' => RemoveEnumValuesChangeModel::class,
       'RemoveFieldDefinitionChange' => RemoveFieldDefinitionChangeModel::class,
       'RemoveFromCategoryChange' => RemoveFromCategoryChangeModel::class,
       'RemoveImageChange' => RemoveImageChangeModel::class,
       'RemoveItemShippingAddressesChange' => RemoveItemShippingAddressesChangeModel::class,
       'RemoveLocalizedEnumValuesChange' => RemoveLocalizedEnumValuesChangeModel::class,
       'RemoveLocationChange' => RemoveLocationChangeModel::class,
       'RemoveOrderLineItemChange' => RemoveOrderLineItemChangeModel::class,
       'RemoveParcelFromDeliveryChange' => RemoveParcelFromDeliveryChangeModel::class,
       'RemovePaymentChange' => RemovePaymentChangeModel::class,
       'RemovePriceChange' => RemovePriceChangeModel::class,
       'RemoveShippingAddressIdChange' => RemoveShippingAddressIdChangeModel::class,
       'RemoveShoppingListLineItemChange' => RemoveShoppingListLineItemChangeModel::class,
       'RemoveStateRolesChange' => RemoveStateRolesChangeModel::class,
       'RemoveTaxRateChange' => RemoveTaxRateChangeModel::class,
       'RemoveTextLineItemChange' => RemoveTextLineItemChangeModel::class,
       'RemoveVariantChange' => RemoveVariantChangeModel::class,
       'SetAddressChange' => SetAddressChangeModel::class,
       'SetAnonymousIdChange' => SetAnonymousIdChangeModel::class,
       'SetApplicationVersionChange' => SetApplicationVersionChangeModel::class,
       'SetAssetCustomFieldChange' => SetAssetCustomFieldChangeModel::class,
       'SetAssetCustomTypeChange' => SetAssetCustomTypeChangeModel::class,
       'SetAssetDescriptionChange' => SetAssetDescriptionChangeModel::class,
       'SetAssetKeyChange' => SetAssetKeyChangeModel::class,
       'SetAssetSourcesChange' => SetAssetSourcesChangeModel::class,
       'SetAssetTagsChange' => SetAssetTagsChangeModel::class,
       'SetAttributeChange' => SetAttributeChangeModel::class,
       'SetAuthorNameChange' => SetAuthorNameChangeModel::class,
       'SetBillingAddressChange' => SetBillingAddressChangeModel::class,
       'SetCartPredicateChange' => SetCartPredicateChangeModel::class,
       'SetCategoryOrderHintChange' => SetCategoryOrderHintChangeModel::class,
       'SetChannelRolesChange' => SetChannelRolesChangeModel::class,
       'SetCompanyNameChange' => SetCompanyNameChangeModel::class,
       'SetCustomFieldChange' => SetCustomFieldChangeModel::class,
       'SetCustomLineItemCustomFieldChange' => SetCustomLineItemCustomFieldChangeModel::class,
       'SetCustomLineItemCustomTypeChange' => SetCustomLineItemCustomTypeChangeModel::class,
       'SetCustomLineItemMoneyChange' => SetCustomLineItemMoneyChangeModel::class,
       'SetCustomLineItemShippingDetailsChange' => SetCustomLineItemShippingDetailsChangeModel::class,
       'SetCustomLineItemTaxRateChange' => SetCustomLineItemTaxRateChangeModel::class,
       'SetCustomLineItemTaxedPriceChange' => SetCustomLineItemTaxedPriceChangeModel::class,
       'SetCustomLineItemTotalPriceChange' => SetCustomLineItemTotalPriceChangeModel::class,
       'SetCustomTypeChange' => SetCustomTypeChangeModel::class,
       'SetCustomerChange' => SetCustomerChangeModel::class,
       'SetCustomerEmailChange' => SetCustomerEmailChangeModel::class,
       'SetCustomerGroupChange' => SetCustomerGroupChangeModel::class,
       'SetCustomerIdChange' => SetCustomerIdChangeModel::class,
       'SetCustomerNumberChange' => SetCustomerNumberChangeModel::class,
       'SetDateOfBirthChange' => SetDateOfBirthChangeModel::class,
       'SetDefaultBillingAddressChange' => SetDefaultBillingAddressChangeModel::class,
       'SetDefaultShippingAddressChange' => SetDefaultShippingAddressChangeModel::class,
       'SetDeleteDaysAfterLastModificationChange' => SetDeleteDaysAfterLastModificationChangeModel::class,
       'SetDeliveryAddressChange' => SetDeliveryAddressChangeModel::class,
       'SetDeliveryItemsChange' => SetDeliveryItemsChangeModel::class,
       'SetDescriptionChange' => SetDescriptionChangeModel::class,
       'SetDiscountedPriceChange' => SetDiscountedPriceChangeModel::class,
       'SetDistributionChannelsChange' => SetDistributionChannelsChangeModel::class,
       'SetExpectedDeliveryChange' => SetExpectedDeliveryChangeModel::class,
       'SetExternalIdChange' => SetExternalIdChangeModel::class,
       'SetFirstNameChange' => SetFirstNameChangeModel::class,
       'SetGeoLocationChange' => SetGeoLocationChangeModel::class,
       'SetImageLabelChange' => SetImageLabelChangeModel::class,
       'SetInputTipChange' => SetInputTipChangeModel::class,
       'SetInterfaceIdChange' => SetInterfaceIdChangeModel::class,
       'SetIsValidChange' => SetIsValidChangeModel::class,
       'SetKeyChange' => SetKeyChangeModel::class,
       'SetLanguagesChange' => SetLanguagesChangeModel::class,
       'SetLastNameChange' => SetLastNameChangeModel::class,
       'SetLineItemDiscountedPriceChange' => SetLineItemDiscountedPriceChangeModel::class,
       'SetLineItemDiscountedPricePerQuantityChange' => SetLineItemDiscountedPricePerQuantityChangeModel::class,
       'SetLineItemPriceChange' => SetLineItemPriceChangeModel::class,
       'SetLineItemProductSlugChange' => SetLineItemProductSlugChangeModel::class,
       'SetLineItemShippingDetailsChange' => SetLineItemShippingDetailsChangeModel::class,
       'SetLineItemTaxRateChange' => SetLineItemTaxRateChangeModel::class,
       'SetLineItemTaxedPriceChange' => SetLineItemTaxedPriceChangeModel::class,
       'SetLineItemTotalPriceChange' => SetLineItemTotalPriceChangeModel::class,
       'SetLocaleChange' => SetLocaleChangeModel::class,
       'SetLocalizedDescriptionChange' => SetLocalizedDescriptionChangeModel::class,
       'SetMaxApplicationsChange' => SetMaxApplicationsChangeModel::class,
       'SetMaxApplicationsPerCustomerChange' => SetMaxApplicationsPerCustomerChangeModel::class,
       'SetMetaDescriptionChange' => SetMetaDescriptionChangeModel::class,
       'SetMetaKeywordsChange' => SetMetaKeywordsChangeModel::class,
       'SetMetaTitleChange' => SetMetaTitleChangeModel::class,
       'SetMethodInfoInterfaceChange' => SetMethodInfoInterfaceChangeModel::class,
       'SetMethodInfoMethodChange' => SetMethodInfoMethodChangeModel::class,
       'SetMethodInfoNameChange' => SetMethodInfoNameChangeModel::class,
       'SetMiddleNameChange' => SetMiddleNameChangeModel::class,
       'SetNameChange' => SetNameChangeModel::class,
       'SetOrderLineItemCustomFieldChange' => SetOrderLineItemCustomFieldChangeModel::class,
       'SetOrderLineItemCustomTypeChange' => SetOrderLineItemCustomTypeChangeModel::class,
       'SetOrderNumberChange' => SetOrderNumberChangeModel::class,
       'SetOrderTaxedPriceChange' => SetOrderTaxedPriceChangeModel::class,
       'SetOrderTotalPriceChange' => SetOrderTotalPriceChangeModel::class,
       'SetParcelItemsChange' => SetParcelItemsChangeModel::class,
       'SetParcelMeasurementsChange' => SetParcelMeasurementsChangeModel::class,
       'SetParcelTrackingDataChange' => SetParcelTrackingDataChangeModel::class,
       'SetPricesChange' => SetPricesChangeModel::class,
       'SetProductPriceCustomFieldChange' => SetProductPriceCustomFieldChangeModel::class,
       'SetProductPriceCustomTypeChange' => SetProductPriceCustomTypeChangeModel::class,
       'SetProductVariantKeyChange' => SetProductVariantKeyChangeModel::class,
       'SetRatingChange' => SetRatingChangeModel::class,
       'SetReservationsChange' => SetReservationsChangeModel::class,
       'SetRestockableInDaysChange' => SetRestockableInDaysChangeModel::class,
       'SetReturnPaymentStateChange' => SetReturnPaymentStateChangeModel::class,
       'SetReturnShipmentStateChange' => SetReturnShipmentStateChangeModel::class,
       'SetSalutationChange' => SetSalutationChangeModel::class,
       'SetSearchKeywordsChange' => SetSearchKeywordsChangeModel::class,
       'SetShippingAddressChange' => SetShippingAddressChangeModel::class,
       'SetShoppingListLineItemCustomFieldChange' => SetShoppingListLineItemCustomFieldChangeModel::class,
       'SetShoppingListLineItemCustomTypeChange' => SetShoppingListLineItemCustomTypeChangeModel::class,
       'SetSkuChange' => SetSkuChangeModel::class,
       'SetSlugChange' => SetSlugChangeModel::class,
       'SetStateRolesChange' => SetStateRolesChangeModel::class,
       'SetStatusInterfaceCodeChange' => SetStatusInterfaceCodeChangeModel::class,
       'SetStatusInterfaceTextChange' => SetStatusInterfaceTextChangeModel::class,
       'SetStoreChange' => SetStoreChangeModel::class,
       'SetStoresChange' => SetStoresChangeModel::class,
       'SetSupplyChannelChange' => SetSupplyChannelChangeModel::class,
       'SetSupplyChannelsChange' => SetSupplyChannelsChangeModel::class,
       'SetTargetChange' => SetTargetChangeModel::class,
       'SetTaxCategoryChange' => SetTaxCategoryChangeModel::class,
       'SetTextChange' => SetTextChangeModel::class,
       'SetTextLineItemCustomFieldChange' => SetTextLineItemCustomFieldChangeModel::class,
       'SetTextLineItemCustomTypeChange' => SetTextLineItemCustomTypeChangeModel::class,
       'SetTextLineItemDescriptionChange' => SetTextLineItemDescriptionChangeModel::class,
       'SetTitleChange' => SetTitleChangeModel::class,
       'SetTransitionsChange' => SetTransitionsChangeModel::class,
       'SetValidFromAndUntilChange' => SetValidFromAndUntilChangeModel::class,
       'SetValidFromChange' => SetValidFromChangeModel::class,
       'SetValidUntilChange' => SetValidUntilChangeModel::class,
       'SetVariantAvailabilityChange' => SetVariantAvailabilityChangeModel::class,
       'SetVatIdChange' => SetVatIdChangeModel::class,
       'TransitionCustomLineItemStateChange' => TransitionCustomLineItemStateChangeModel::class,
       'TransitionLineItemStateChange' => TransitionLineItemStateChangeModel::class,
       'TransitionStateChange' => TransitionStateChangeModel::class,
       'UnknownChange' => UnknownChangeModel::class,
       'UnpublishChange' => UnpublishChangeModel::class,
       'UpdateSyncInfoChange' => UpdateSyncInfoChangeModel::class,
       'VerifyEmailChange' => VerifyEmailChangeModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null
    ) {
        $this->change = $change;
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
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
            $this->change =  (string) $data;
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
