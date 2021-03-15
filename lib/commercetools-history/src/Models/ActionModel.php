<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ActionModel extends JsonObjectModel implements Action
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
     * @psalm-var array<string, class-string<Action> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'AddAddressAction' => AddAddressActionModel::class,
       'AddAssetAction' => AddAssetActionModel::class,
       'AddAttributeDefinitionAction' => AddAttributeDefinitionActionModel::class,
       'AddBillingAddressIdAction' => AddBillingAddressIdActionModel::class,
       'AddChannelRolesAction' => AddChannelRolesActionModel::class,
       'AddCustomLineItemAction' => AddCustomLineItemActionModel::class,
       'AddDeliveryAction' => AddDeliveryActionModel::class,
       'AddEnumValueAction' => AddEnumValueActionModel::class,
       'AddExternalImageAction' => AddExternalImageActionModel::class,
       'AddFieldDefinitionAction' => AddFieldDefinitionActionModel::class,
       'AddInterfaceInteractionAction' => AddInterfaceInteractionActionModel::class,
       'AddItemShippingAddressesAction' => AddItemShippingAddressesActionModel::class,
       'AddLocalizedEnumValueAction' => AddLocalizedEnumValueActionModel::class,
       'AddLocationAction' => AddLocationActionModel::class,
       'AddOrderLineItemAction' => AddOrderLineItemActionModel::class,
       'AddParcelToDeliveryAction' => AddParcelToDeliveryActionModel::class,
       'AddPaymentAction' => AddPaymentActionModel::class,
       'AddPlainEnumValueAction' => AddPlainEnumValueActionModel::class,
       'AddPriceAction' => AddPriceActionModel::class,
       'AddReturnInfoAction' => AddReturnInfoActionModel::class,
       'AddShippingAddressIdAction' => AddShippingAddressIdActionModel::class,
       'AddShoppingListLineItemAction' => AddShoppingListLineItemActionModel::class,
       'AddStateRolesAction' => AddStateRolesActionModel::class,
       'AddTaxRateAction' => AddTaxRateActionModel::class,
       'AddTextLineItemAction' => AddTextLineItemActionModel::class,
       'AddToCategoryAction' => AddToCategoryActionModel::class,
       'AddTransactionAction' => AddTransactionActionModel::class,
       'AddVariantAction' => AddVariantActionModel::class,
       'ChangeAddressAction' => ChangeAddressActionModel::class,
       'ChangeAmountPlannedAction' => ChangeAmountPlannedActionModel::class,
       'ChangeAssetNameAction' => ChangeAssetNameActionModel::class,
       'ChangeAssetOrderAction' => ChangeAssetOrderActionModel::class,
       'ChangeAttributeConstraintAction' => ChangeAttributeConstraintActionModel::class,
       'ChangeAttributeOrderByNameAction' => ChangeAttributeOrderByNameActionModel::class,
       'ChangeCartDiscountsAction' => ChangeCartDiscountsActionModel::class,
       'ChangeCartPredicateAction' => ChangeCartPredicateActionModel::class,
       'ChangeCustomLineItemQuantityAction' => ChangeCustomLineItemQuantityActionModel::class,
       'ChangeDescriptionAction' => ChangeDescriptionActionModel::class,
       'ChangeEmailAction' => ChangeEmailActionModel::class,
       'ChangeEnumValueLabelAction' => ChangeEnumValueLabelActionModel::class,
       'ChangeEnumValueOrderAction' => ChangeEnumValueOrderActionModel::class,
       'ChangeFieldDefinitionOrderAction' => ChangeFieldDefinitionOrderActionModel::class,
       'ChangeGroupsAction' => ChangeGroupsActionModel::class,
       'ChangeInitialAction' => ChangeInitialActionModel::class,
       'ChangeInputHintAction' => ChangeInputHintActionModel::class,
       'ChangeIsActiveAction' => ChangeIsActiveActionModel::class,
       'ChangeIsSearchableAction' => ChangeIsSearchableActionModel::class,
       'ChangeKeyAction' => ChangeKeyActionModel::class,
       'ChangeLabelAction' => ChangeLabelActionModel::class,
       'ChangeLineItemQuantityAction' => ChangeLineItemQuantityActionModel::class,
       'ChangeLocalizedDescriptionAction' => ChangeLocalizedDescriptionActionModel::class,
       'ChangeLocalizedEnumValueLabelAction' => ChangeLocalizedEnumValueLabelActionModel::class,
       'ChangeLocalizedEnumValueOrderAction' => ChangeLocalizedEnumValueOrderActionModel::class,
       'ChangeLocalizedNameAction' => ChangeLocalizedNameActionModel::class,
       'ChangeMasterVariantAction' => ChangeMasterVariantActionModel::class,
       'ChangeNameAction' => ChangeNameActionModel::class,
       'ChangeOrderHintAction' => ChangeOrderHintActionModel::class,
       'ChangeOrderStateAction' => ChangeOrderStateActionModel::class,
       'ChangeParentAction' => ChangeParentActionModel::class,
       'ChangePaymentStateAction' => ChangePaymentStateActionModel::class,
       'ChangePlainEnumValueLabelAction' => ChangePlainEnumValueLabelActionModel::class,
       'ChangePlainEnumValueOrderAction' => ChangePlainEnumValueOrderActionModel::class,
       'ChangePredicateAction' => ChangePredicateActionModel::class,
       'ChangePriceAction' => ChangePriceActionModel::class,
       'ChangeQuantityAction' => ChangeQuantityActionModel::class,
       'ChangeRequiresDiscountCodeAction' => ChangeRequiresDiscountCodeActionModel::class,
       'ChangeReviewRatingStatisticsAction' => ChangeReviewRatingStatisticsActionModel::class,
       'ChangeShipmentStateAction' => ChangeShipmentStateActionModel::class,
       'ChangeShoppingListLineItemQuantityAction' => ChangeShoppingListLineItemQuantityActionModel::class,
       'ChangeShoppingListLineItemsOrderAction' => ChangeShoppingListLineItemsOrderActionModel::class,
       'ChangeSlugAction' => ChangeSlugActionModel::class,
       'ChangeSortOrderAction' => ChangeSortOrderActionModel::class,
       'ChangeStackingModeAction' => ChangeStackingModeActionModel::class,
       'ChangeStateTypeAction' => ChangeStateTypeActionModel::class,
       'ChangeTargetAction' => ChangeTargetActionModel::class,
       'ChangeTextLineItemNameAction' => ChangeTextLineItemNameActionModel::class,
       'ChangeTextLineItemQuantityAction' => ChangeTextLineItemQuantityActionModel::class,
       'ChangeTextLineItemsOrderAction' => ChangeTextLineItemsOrderActionModel::class,
       'ChangeTransactionInteractionIdAction' => ChangeTransactionInteractionIdActionModel::class,
       'ChangeTransactionStateAction' => ChangeTransactionStateActionModel::class,
       'ChangeTransactionTimestampAction' => ChangeTransactionTimestampActionModel::class,
       'ChangeValueAction' => ChangeValueActionModel::class,
       'MoveImageToPositionAction' => MoveImageToPositionActionModel::class,
       'PublishAction' => PublishActionModel::class,
       'RemoveAddressAction' => RemoveAddressActionModel::class,
       'RemoveAssetAction' => RemoveAssetActionModel::class,
       'RemoveAttributeDefinitionAction' => RemoveAttributeDefinitionActionModel::class,
       'RemoveBillingAddressIdAction' => RemoveBillingAddressIdActionModel::class,
       'RemoveChannelRolesAction' => RemoveChannelRolesActionModel::class,
       'RemoveCustomLineItemAction' => RemoveCustomLineItemActionModel::class,
       'RemoveDeliveryItemsAction' => RemoveDeliveryItemsActionModel::class,
       'RemoveEnumValuesAction' => RemoveEnumValuesActionModel::class,
       'RemoveFieldDefinitionAction' => RemoveFieldDefinitionActionModel::class,
       'RemoveFromCategoryAction' => RemoveFromCategoryActionModel::class,
       'RemoveImageAction' => RemoveImageActionModel::class,
       'RemoveItemShippingAddressesAction' => RemoveItemShippingAddressesActionModel::class,
       'RemoveLocalizedEnumValuesAction' => RemoveLocalizedEnumValuesActionModel::class,
       'RemoveLocationAction' => RemoveLocationActionModel::class,
       'RemoveOrderLineItemAction' => RemoveOrderLineItemActionModel::class,
       'RemoveParcelFromDeliveryAction' => RemoveParcelFromDeliveryActionModel::class,
       'RemovePaymentAction' => RemovePaymentActionModel::class,
       'RemovePriceAction' => RemovePriceActionModel::class,
       'RemoveShippingAddressIdAction' => RemoveShippingAddressIdActionModel::class,
       'RemoveShoppingListLineItemAction' => RemoveShoppingListLineItemActionModel::class,
       'RemoveStateRolesAction' => RemoveStateRolesActionModel::class,
       'RemoveTaxRateAction' => RemoveTaxRateActionModel::class,
       'RemoveTextLineItemAction' => RemoveTextLineItemActionModel::class,
       'RemoveVariantAction' => RemoveVariantActionModel::class,
       'SetAddressAction' => SetAddressActionModel::class,
       'SetAnonymousIdAction' => SetAnonymousIdActionModel::class,
       'SetAssetCustomFieldAction' => SetAssetCustomFieldActionModel::class,
       'SetAssetCustomTypeAction' => SetAssetCustomTypeActionModel::class,
       'SetAssetDescriptionAction' => SetAssetDescriptionActionModel::class,
       'SetAssetKeyAction' => SetAssetKeyActionModel::class,
       'SetAssetSourcesAction' => SetAssetSourcesActionModel::class,
       'SetAssetTagsAction' => SetAssetTagsActionModel::class,
       'SetAttributeAction' => SetAttributeActionModel::class,
       'SetAuthorNameAction' => SetAuthorNameActionModel::class,
       'SetBillingAddressAction' => SetBillingAddressActionModel::class,
       'SetCartPredicateAction' => SetCartPredicateActionModel::class,
       'SetCategoryOrderHintAction' => SetCategoryOrderHintActionModel::class,
       'SetChannelRolesAction' => SetChannelRolesActionModel::class,
       'SetCompanyNameAction' => SetCompanyNameActionModel::class,
       'SetCustomFieldAction' => SetCustomFieldActionModel::class,
       'SetCustomLineItemCustomFieldAction' => SetCustomLineItemCustomFieldActionModel::class,
       'SetCustomLineItemCustomTypeAction' => SetCustomLineItemCustomTypeActionModel::class,
       'SetCustomLineItemMoneyAction' => SetCustomLineItemMoneyActionModel::class,
       'SetCustomLineItemShippingDetailsAction' => SetCustomLineItemShippingDetailsActionModel::class,
       'SetCustomLineItemTaxRateAction' => SetCustomLineItemTaxRateActionModel::class,
       'SetCustomLineItemTaxedPriceAction' => SetCustomLineItemTaxedPriceActionModel::class,
       'SetCustomLineItemTotalPriceAction' => SetCustomLineItemTotalPriceActionModel::class,
       'SetCustomTypeAction' => SetCustomTypeActionModel::class,
       'SetCustomerAction' => SetCustomerActionModel::class,
       'SetCustomerEmailAction' => SetCustomerEmailActionModel::class,
       'SetCustomerGroupAction' => SetCustomerGroupActionModel::class,
       'SetCustomerIdAction' => SetCustomerIdActionModel::class,
       'SetCustomerNumberAction' => SetCustomerNumberActionModel::class,
       'SetDateOfBirthAction' => SetDateOfBirthActionModel::class,
       'SetDefaultBillingAddressAction' => SetDefaultBillingAddressActionModel::class,
       'SetDefaultShippingAddressAction' => SetDefaultShippingAddressActionModel::class,
       'SetDeleteDaysAfterLastModificationAction' => SetDeleteDaysAfterLastModificationActionModel::class,
       'SetDeliveryAddressAction' => SetDeliveryAddressActionModel::class,
       'SetDeliveryItemsAction' => SetDeliveryItemsActionModel::class,
       'SetDescriptionAction' => SetDescriptionActionModel::class,
       'SetDiscountedPriceAction' => SetDiscountedPriceActionModel::class,
       'SetDistributionChannelsAction' => SetDistributionChannelsActionModel::class,
       'SetExpectedDeliveryAction' => SetExpectedDeliveryActionModel::class,
       'SetExternalIdAction' => SetExternalIdActionModel::class,
       'SetFirstNameAction' => SetFirstNameActionModel::class,
       'SetGeoLocationAction' => SetGeoLocationActionModel::class,
       'SetImageLabelAction' => SetImageLabelActionModel::class,
       'SetInputTipAction' => SetInputTipActionModel::class,
       'SetInterfaceIdAction' => SetInterfaceIdActionModel::class,
       'SetIsValidAction' => SetIsValidActionModel::class,
       'SetKeyAction' => SetKeyActionModel::class,
       'SetLanguagesAction' => SetLanguagesActionModel::class,
       'SetLastNameAction' => SetLastNameActionModel::class,
       'SetLineItemDiscountedPriceAction' => SetLineItemDiscountedPriceActionModel::class,
       'SetLineItemDiscountedPricePerQuantityAction' => SetLineItemDiscountedPricePerQuantityActionModel::class,
       'SetLineItemPriceAction' => SetLineItemPriceActionModel::class,
       'SetLineItemProductSlugAction' => SetLineItemProductSlugActionModel::class,
       'SetLineItemShippingDetailsAction' => SetLineItemShippingDetailsActionModel::class,
       'SetLineItemTaxRateAction' => SetLineItemTaxRateActionModel::class,
       'SetLineItemTaxedPriceAction' => SetLineItemTaxedPriceActionModel::class,
       'SetLineItemTotalPriceAction' => SetLineItemTotalPriceActionModel::class,
       'SetLocaleAction' => SetLocaleActionModel::class,
       'SetLocalizedDescriptionAction' => SetLocalizedDescriptionActionModel::class,
       'SetMaxApplicationsAction' => SetMaxApplicationsActionModel::class,
       'SetMaxApplicationsPerCustomerAction' => SetMaxApplicationsPerCustomerActionModel::class,
       'SetMetaDescriptionAction' => SetMetaDescriptionActionModel::class,
       'SetMetaKeywordsAction' => SetMetaKeywordsActionModel::class,
       'SetMetaTitleAction' => SetMetaTitleActionModel::class,
       'SetMethodInfoInterfaceAction' => SetMethodInfoInterfaceActionModel::class,
       'SetMethodInfoMethodAction' => SetMethodInfoMethodActionModel::class,
       'SetMethodInfoNameAction' => SetMethodInfoNameActionModel::class,
       'SetMiddleNameAction' => SetMiddleNameActionModel::class,
       'SetNameAction' => SetNameActionModel::class,
       'SetOrderLineItemCustomFieldAction' => SetOrderLineItemCustomFieldActionModel::class,
       'SetOrderLineItemCustomTypeAction' => SetOrderLineItemCustomTypeActionModel::class,
       'SetOrderNumberAction' => SetOrderNumberActionModel::class,
       'SetOrderTaxedPriceAction' => SetOrderTaxedPriceActionModel::class,
       'SetOrderTotalPriceAction' => SetOrderTotalPriceActionModel::class,
       'SetParcelItemsAction' => SetParcelItemsActionModel::class,
       'SetParcelMeasurementsAction' => SetParcelMeasurementsActionModel::class,
       'SetParcelTrackingDataAction' => SetParcelTrackingDataActionModel::class,
       'SetPricesAction' => SetPricesActionModel::class,
       'SetProductPriceCustomFieldAction' => SetProductPriceCustomFieldActionModel::class,
       'SetProductPriceCustomTypeAction' => SetProductPriceCustomTypeActionModel::class,
       'SetProductVariantKeyAction' => SetProductVariantKeyActionModel::class,
       'SetRatingAction' => SetRatingActionModel::class,
       'SetReservationsAction' => SetReservationsActionModel::class,
       'SetRestockableInDaysAction' => SetRestockableInDaysActionModel::class,
       'SetReturnPaymentStateAction' => SetReturnPaymentStateActionModel::class,
       'SetReturnShipmentStateAction' => SetReturnShipmentStateActionModel::class,
       'SetSalutationAction' => SetSalutationActionModel::class,
       'SetSearchKeywordsAction' => SetSearchKeywordsActionModel::class,
       'SetShippingAddressAction' => SetShippingAddressActionModel::class,
       'SetShoppingListLineItemCustomFieldAction' => SetShoppingListLineItemCustomFieldActionModel::class,
       'SetShoppingListLineItemCustomTypeAction' => SetShoppingListLineItemCustomTypeActionModel::class,
       'SetSkuAction' => SetSkuActionModel::class,
       'SetSlugAction' => SetSlugActionModel::class,
       'SetStateRolesAction' => SetStateRolesActionModel::class,
       'SetStatusInterfaceCodeAction' => SetStatusInterfaceCodeActionModel::class,
       'SetStatusInterfaceTextAction' => SetStatusInterfaceTextActionModel::class,
       'SetStoreAction' => SetStoreActionModel::class,
       'SetStoresAction' => SetStoresActionModel::class,
       'SetSupplyChannelAction' => SetSupplyChannelActionModel::class,
       'SetSupplyChannelsAction' => SetSupplyChannelsActionModel::class,
       'SetTargetAction' => SetTargetActionModel::class,
       'SetTaxCategoryAction' => SetTaxCategoryActionModel::class,
       'SetTextAction' => SetTextActionModel::class,
       'SetTextLineItemCustomFieldAction' => SetTextLineItemCustomFieldActionModel::class,
       'SetTextLineItemCustomTypeAction' => SetTextLineItemCustomTypeActionModel::class,
       'SetTextLineItemDescriptionAction' => SetTextLineItemDescriptionActionModel::class,
       'SetTitleAction' => SetTitleActionModel::class,
       'SetTransitionsAction' => SetTransitionsActionModel::class,
       'SetValidFromAction' => SetValidFromActionModel::class,
       'SetValidFromAndUntilAction' => SetValidFromAndUntilActionModel::class,
       'SetValidUntilAction' => SetValidUntilActionModel::class,
       'SetVariantAvailabilityAction' => SetVariantAvailabilityActionModel::class,
       'SetVatIdAction' => SetVatIdActionModel::class,
       'TransitionCustomLineItemStateAction' => TransitionCustomLineItemStateActionModel::class,
       'TransitionLineItemStateAction' => TransitionLineItemStateActionModel::class,
       'TransitionStateAction' => TransitionStateActionModel::class,
       'UnknownAction' => UnknownActionModel::class,
       'UnpublishAction' => UnpublishActionModel::class,
       'UpdateSyncInfoAction' => UpdateSyncInfoActionModel::class,
       'VerifyEmailAction' => VerifyEmailActionModel::class,
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
     * @psalm-return class-string<Action>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = Action::DISCRIMINATOR_FIELD;
       if (is_object($value) && isset($value->$fieldName)) {
           /** @psalm-var string $discriminatorValue */
           $discriminatorValue = $value->$fieldName;
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       if (is_array($value) && isset($value[$fieldName])) {
           /** @psalm-var string $discriminatorValue */
           $discriminatorValue = $value[$fieldName];
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }

       /** @psalm-var class-string<Action> */
       $type = ActionModel::class;
       return $type;
    }
}
