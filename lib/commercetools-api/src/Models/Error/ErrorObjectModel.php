<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Agent\AgentBusinessUnitAmbiguousError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitAmbiguousErrorModel;
use Commercetools\Api\Models\Agent\AgentBusinessUnitLimitExceededError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitLimitExceededErrorModel;
use Commercetools\Api\Models\Agent\AgentBusinessUnitUnresolvedError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitUnresolvedErrorModel;
use Commercetools\Api\Models\Agent\AgentExtractionFailedError;
use Commercetools\Api\Models\Agent\AgentExtractionFailedErrorModel;
use Commercetools\Api\Models\Agent\AgentFeatureDisabledError;
use Commercetools\Api\Models\Agent\AgentFeatureDisabledErrorModel;
use Commercetools\Api\Models\Agent\AgentMissingCountryError;
use Commercetools\Api\Models\Agent\AgentMissingCountryErrorModel;
use Commercetools\Api\Models\Agent\AgentMissingCustomerEmailError;
use Commercetools\Api\Models\Agent\AgentMissingCustomerEmailErrorModel;
use Commercetools\Api\Models\Agent\AgentMissingEntityTypeError;
use Commercetools\Api\Models\Agent\AgentMissingEntityTypeErrorModel;
use Commercetools\Api\Models\Agent\AgentNoLineItemsExtractedError;
use Commercetools\Api\Models\Agent\AgentNoLineItemsExtractedErrorModel;
use Commercetools\Api\Models\Agent\AgentOutOfScopeError;
use Commercetools\Api\Models\Agent\AgentOutOfScopeErrorModel;
use Commercetools\Api\Models\Agent\AgentProductSearchNotEnabledError;
use Commercetools\Api\Models\Agent\AgentProductSearchNotEnabledErrorModel;
use Commercetools\Api\Models\Agent\AgentProductsNotFoundError;
use Commercetools\Api\Models\Agent\AgentProductsNotFoundErrorModel;
use Commercetools\Api\Models\Agent\AgentQuoteRequestCreationFailedError;
use Commercetools\Api\Models\Agent\AgentQuoteRequestCreationFailedErrorModel;
use Commercetools\Api\Models\Agent\AgentStoreAmbiguousError;
use Commercetools\Api\Models\Agent\AgentStoreAmbiguousErrorModel;
use Commercetools\Api\Models\Agent\AgentStoreDistributionChannelsUnsupportedError;
use Commercetools\Api\Models\Agent\AgentStoreDistributionChannelsUnsupportedErrorModel;
use Commercetools\Api\Models\Agent\AgentStoreUnresolvedError;
use Commercetools\Api\Models\Agent\AgentStoreUnresolvedErrorModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ErrorObjectModel extends JsonObjectModel implements ErrorObject
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     * @psalm-var array<string, class-string<ErrorObject> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'AnonymousIdAlreadyInUse' => AnonymousIdAlreadyInUseErrorModel::class,
       'AssociateMissingPermission' => AssociateMissingPermissionErrorModel::class,
       'AttributeDefinitionAlreadyExists' => AttributeDefinitionAlreadyExistsErrorModel::class,
       'AttributeDefinitionTypeConflict' => AttributeDefinitionTypeConflictErrorModel::class,
       'AttributeNameDoesNotExist' => AttributeNameDoesNotExistErrorModel::class,
       'BadGateway' => BadGatewayErrorModel::class,
       'BulkOperationMaxItemsExceeded' => BulkOperationMaxItemsExceededErrorModel::class,
       'BusinessUnitAmbiguous' => AgentBusinessUnitAmbiguousErrorModel::class,
       'BusinessUnitLimitExceeded' => AgentBusinessUnitLimitExceededErrorModel::class,
       'BusinessUnitUnresolved' => AgentBusinessUnitUnresolvedErrorModel::class,
       'ConcurrentModification' => ConcurrentModificationErrorModel::class,
       'ContentTooLarge' => ContentTooLargeErrorModel::class,
       'CountryNotConfiguredInStore' => CountryNotConfiguredInStoreErrorModel::class,
       'DiscountCodeNonApplicable' => DiscountCodeNonApplicableErrorModel::class,
       'DuplicateAttributeValue' => DuplicateAttributeValueErrorModel::class,
       'DuplicateAttributeValues' => DuplicateAttributeValuesErrorModel::class,
       'DuplicateEnumValues' => DuplicateEnumValuesErrorModel::class,
       'DuplicateField' => DuplicateFieldErrorModel::class,
       'DuplicateFieldWithConflictingResource' => DuplicateFieldWithConflictingResourceErrorModel::class,
       'DuplicatePriceKey' => DuplicatePriceKeyErrorModel::class,
       'DuplicatePriceScope' => DuplicatePriceScopeErrorModel::class,
       'DuplicateStandalonePriceScope' => DuplicateStandalonePriceScopeErrorModel::class,
       'DuplicateVariantValues' => DuplicateVariantValuesErrorModel::class,
       'EditPreviewFailed' => EditPreviewFailedErrorModel::class,
       'EnumKeyAlreadyExists' => EnumKeyAlreadyExistsErrorModel::class,
       'EnumKeyDoesNotExist' => EnumKeyDoesNotExistErrorModel::class,
       'EnumValueIsUsed' => EnumValueIsUsedErrorModel::class,
       'EnumValuesMustMatch' => EnumValuesMustMatchErrorModel::class,
       'ExactLockConflict' => ExactLockConflictErrorModel::class,
       'ExpiredCustomerEmailToken' => ExpiredCustomerEmailTokenErrorModel::class,
       'ExpiredCustomerPasswordToken' => ExpiredCustomerPasswordTokenErrorModel::class,
       'ExtensionBadResponse' => ExtensionBadResponseErrorModel::class,
       'ExtensionChainTooDeep' => ExtensionChainTooDeepErrorModel::class,
       'ExtensionChainTooWide' => ExtensionChainTooWideErrorModel::class,
       'ExtensionCircularDependency' => ExtensionCircularDependencyErrorModel::class,
       'ExtensionDependencyExists' => ExtensionDependencyExistsErrorModel::class,
       'ExtensionNoResponse' => ExtensionNoResponseErrorModel::class,
       'ExtensionPredicateEvaluationFailed' => ExtensionPredicateEvaluationFailedErrorModel::class,
       'ExtensionUpdateActionsFailed' => ExtensionUpdateActionsFailedErrorModel::class,
       'ExternalOAuthFailed' => ExternalOAuthFailedErrorModel::class,
       'ExtractionFailed' => AgentExtractionFailedErrorModel::class,
       'FeatureDisabled' => AgentFeatureDisabledErrorModel::class,
       'FeatureRemoved' => FeatureRemovedErrorModel::class,
       'General' => GeneralErrorModel::class,
       'InternalConstraintViolated' => InternalConstraintViolatedErrorModel::class,
       'InvalidCredentials' => InvalidCredentialsErrorModel::class,
       'InvalidCurrentPassword' => InvalidCurrentPasswordErrorModel::class,
       'InvalidField' => InvalidFieldErrorModel::class,
       'InvalidInput' => InvalidInputErrorModel::class,
       'InvalidItemShippingDetails' => InvalidItemShippingDetailsErrorModel::class,
       'InvalidJsonInput' => InvalidJsonInputErrorModel::class,
       'InvalidOperation' => InvalidOperationErrorModel::class,
       'InvalidSubject' => InvalidSubjectErrorModel::class,
       'LanguageUsedInStores' => LanguageUsedInStoresErrorModel::class,
       'LineItemQuantityAboveLimit' => LineItemQuantityAboveLimitErrorModel::class,
       'LineItemQuantityBelowLimit' => LineItemQuantityBelowLimitErrorModel::class,
       'LockedField' => LockedFieldErrorModel::class,
       'MatchingPriceNotFound' => MatchingPriceNotFoundErrorModel::class,
       'MaxCartDiscountsReached' => MaxCartDiscountsReachedErrorModel::class,
       'MaxDiscountGroupsReached' => MaxDiscountGroupsReachedErrorModel::class,
       'MaxResourceLimitExceeded' => MaxResourceLimitExceededErrorModel::class,
       'MaxStoreReferencesReached' => MaxStoreReferencesReachedErrorModel::class,
       'MissingCountry' => AgentMissingCountryErrorModel::class,
       'MissingCustomerEmail' => AgentMissingCustomerEmailErrorModel::class,
       'MissingEntityType' => AgentMissingEntityTypeErrorModel::class,
       'MissingRoleOnChannel' => MissingRoleOnChannelErrorModel::class,
       'MissingTaxRateForCountry' => MissingTaxRateForCountryErrorModel::class,
       'MoneyOverflow' => MoneyOverflowErrorModel::class,
       'NoLineItemsExtracted' => AgentNoLineItemsExtractedErrorModel::class,
       'NoMatchingProductDiscountFound' => NoMatchingProductDiscountFoundErrorModel::class,
       'ObjectNotFound' => ObjectNotFoundErrorModel::class,
       'OutOfScope' => AgentOutOfScopeErrorModel::class,
       'OutOfStock' => OutOfStockErrorModel::class,
       'OverCapacity' => OverCapacityErrorModel::class,
       'OverlappingPriceValidity' => OverlappingPriceValidityErrorModel::class,
       'OverlappingStandalonePriceValidity' => OverlappingStandalonePriceValidityErrorModel::class,
       'PendingOperation' => PendingOperationErrorModel::class,
       'PriceChanged' => PriceChangedErrorModel::class,
       'ProductAssignmentMissing' => ProductAssignmentMissingErrorModel::class,
       'ProductPresentWithDifferentVariantSelection' => ProductPresentWithDifferentVariantSelectionErrorModel::class,
       'ProductSearchNotEnabled' => AgentProductSearchNotEnabledErrorModel::class,
       'ProductsNotFound' => AgentProductsNotFoundErrorModel::class,
       'ProjectNotConfiguredForLanguages' => ProjectNotConfiguredForLanguagesErrorModel::class,
       'QueryComplexityLimitExceeded' => QueryComplexityLimitExceededErrorModel::class,
       'QueryTimedOut' => QueryTimedOutErrorModel::class,
       'QuoteRequestCreationFailed' => AgentQuoteRequestCreationFailedErrorModel::class,
       'RecurringOrderFailure' => RecurringOrderFailureErrorModel::class,
       'ReferenceExists' => ReferenceExistsErrorModel::class,
       'ReferencedResourceNotFound' => ReferencedResourceNotFoundErrorModel::class,
       'RequiredField' => RequiredFieldErrorModel::class,
       'ResourceNotFound' => ResourceNotFoundErrorModel::class,
       'ResourceSizeLimitExceeded' => ResourceSizeLimitExceededErrorModel::class,
       'SearchDeactivated' => SearchDeactivatedErrorModel::class,
       'SearchExecutionFailure' => SearchExecutionFailureErrorModel::class,
       'SearchFacetPathNotFound' => SearchFacetPathNotFoundErrorModel::class,
       'SearchIndexingInProgress' => SearchIndexingInProgressErrorModel::class,
       'SearchNotReady' => SearchNotReadyErrorModel::class,
       'SemanticError' => SemanticErrorErrorModel::class,
       'ShippingMethodDoesNotMatchCart' => ShippingMethodDoesNotMatchCartErrorModel::class,
       'StoreAmbiguous' => AgentStoreAmbiguousErrorModel::class,
       'StoreCartDiscountsLimitReached' => StoreCartDiscountsLimitReachedErrorModel::class,
       'StoreDistributionChannelsUnsupported' => AgentStoreDistributionChannelsUnsupportedErrorModel::class,
       'StoreUnresolved' => AgentStoreUnresolvedErrorModel::class,
       'SyntaxError' => SyntaxErrorErrorModel::class,
       'Unauthorized' => UnauthorizedErrorModel::class,
       'ValidityLockConflict' => ValidityLockConflictErrorModel::class,
       'insufficient_scope' => InsufficientScopeErrorModel::class,
       'invalid_token' => InvalidTokenErrorModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * <p>Error identifier.</p>
     *
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>Plain text description of the cause of the error.</p>
     *
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }
        if (preg_match(ErrorObject::FIELD_PATTERN2, $key) === 1) {
            /** @psalm-var stdClass $data */
            return JsonObjectModel::of($data);
        }

        return $data;
    }


    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ErrorObject>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ErrorObject::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ErrorObject> */
        $type = ErrorObjectModel::class;
        return $type;
    }
}
