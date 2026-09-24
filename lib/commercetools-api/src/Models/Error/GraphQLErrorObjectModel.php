<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitAmbiguousError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitAmbiguousErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitLimitExceededError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitLimitExceededErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitUnresolvedError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitUnresolvedErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentExtractionFailedError;
use Commercetools\Api\Models\Agent\GraphQLAgentExtractionFailedErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentFeatureDisabledError;
use Commercetools\Api\Models\Agent\GraphQLAgentFeatureDisabledErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCountryError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCountryErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCustomerEmailError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCustomerEmailErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingEntityTypeError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingEntityTypeErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentNoLineItemsExtractedError;
use Commercetools\Api\Models\Agent\GraphQLAgentNoLineItemsExtractedErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentOutOfScopeError;
use Commercetools\Api\Models\Agent\GraphQLAgentOutOfScopeErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentProductSearchNotEnabledError;
use Commercetools\Api\Models\Agent\GraphQLAgentProductSearchNotEnabledErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentProductsNotFoundError;
use Commercetools\Api\Models\Agent\GraphQLAgentProductsNotFoundErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentQuoteRequestCreationFailedError;
use Commercetools\Api\Models\Agent\GraphQLAgentQuoteRequestCreationFailedErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreAmbiguousError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreAmbiguousErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreDistributionChannelsUnsupportedError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreDistributionChannelsUnsupportedErrorModel;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreUnresolvedError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreUnresolvedErrorModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLErrorObjectModel extends JsonObjectModel implements GraphQLErrorObject
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     * @psalm-var array<string, class-string<GraphQLErrorObject> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'AnonymousIdAlreadyInUse' => GraphQLAnonymousIdAlreadyInUseErrorModel::class,
       'AssociateMissingPermission' => GraphQLAssociateMissingPermissionErrorModel::class,
       'AttributeDefinitionAlreadyExists' => GraphQLAttributeDefinitionAlreadyExistsErrorModel::class,
       'AttributeDefinitionTypeConflict' => GraphQLAttributeDefinitionTypeConflictErrorModel::class,
       'AttributeNameDoesNotExist' => GraphQLAttributeNameDoesNotExistErrorModel::class,
       'BadGateway' => GraphQLBadGatewayErrorModel::class,
       'BulkOperationMaxItemsExceeded' => GraphQLBulkOperationMaxItemsExceededErrorModel::class,
       'BusinessUnitAmbiguous' => GraphQLAgentBusinessUnitAmbiguousErrorModel::class,
       'BusinessUnitLimitExceeded' => GraphQLAgentBusinessUnitLimitExceededErrorModel::class,
       'BusinessUnitUnresolved' => GraphQLAgentBusinessUnitUnresolvedErrorModel::class,
       'ConcurrentModification' => GraphQLConcurrentModificationErrorModel::class,
       'ContentTooLarge' => GraphQLContentTooLargeErrorModel::class,
       'CountryNotConfiguredInStore' => GraphQLCountryNotConfiguredInStoreErrorModel::class,
       'DiscountCodeNonApplicable' => GraphQLDiscountCodeNonApplicableErrorModel::class,
       'DuplicateAttributeValue' => GraphQLDuplicateAttributeValueErrorModel::class,
       'DuplicateAttributeValues' => GraphQLDuplicateAttributeValuesErrorModel::class,
       'DuplicateEnumValues' => GraphQLDuplicateEnumValuesErrorModel::class,
       'DuplicateField' => GraphQLDuplicateFieldErrorModel::class,
       'DuplicateFieldWithConflictingResource' => GraphQLDuplicateFieldWithConflictingResourceErrorModel::class,
       'DuplicatePriceKey' => GraphQLDuplicatePriceKeyErrorModel::class,
       'DuplicatePriceScope' => GraphQLDuplicatePriceScopeErrorModel::class,
       'DuplicateStandalonePriceScope' => GraphQLDuplicateStandalonePriceScopeErrorModel::class,
       'DuplicateVariantValues' => GraphQLDuplicateVariantValuesErrorModel::class,
       'EditPreviewFailed' => GraphQLEditPreviewFailedErrorModel::class,
       'EnumKeyAlreadyExists' => GraphQLEnumKeyAlreadyExistsErrorModel::class,
       'EnumKeyDoesNotExist' => GraphQLEnumKeyDoesNotExistErrorModel::class,
       'EnumValueIsUsed' => GraphQLEnumValueIsUsedErrorModel::class,
       'EnumValuesMustMatch' => GraphQLEnumValuesMustMatchErrorModel::class,
       'ExactLockConflict' => GraphQLExactLockConflictErrorModel::class,
       'ExpiredCustomerEmailToken' => GraphQLExpiredCustomerEmailTokenErrorModel::class,
       'ExpiredCustomerPasswordToken' => GraphQLExpiredCustomerPasswordTokenErrorModel::class,
       'ExtensionBadResponse' => GraphQLExtensionBadResponseErrorModel::class,
       'ExtensionChainTooDeep' => GraphQLExtensionChainTooDeepErrorModel::class,
       'ExtensionChainTooWide' => GraphQLExtensionChainTooWideErrorModel::class,
       'ExtensionCircularDependency' => GraphQLExtensionCircularDependencyErrorModel::class,
       'ExtensionDependencyExists' => GraphQLExtensionDependencyExistsErrorModel::class,
       'ExtensionNoResponse' => GraphQLExtensionNoResponseErrorModel::class,
       'ExtensionPredicateEvaluationFailed' => GraphQLExtensionPredicateEvaluationFailedErrorModel::class,
       'ExtensionUpdateActionsFailed' => GraphQLExtensionUpdateActionsFailedErrorModel::class,
       'ExternalOAuthFailed' => GraphQLExternalOAuthFailedErrorModel::class,
       'ExtractionFailed' => GraphQLAgentExtractionFailedErrorModel::class,
       'FeatureDisabled' => GraphQLAgentFeatureDisabledErrorModel::class,
       'FeatureRemoved' => GraphQLFeatureRemovedErrorModel::class,
       'General' => GraphQLGeneralErrorModel::class,
       'InternalConstraintViolated' => GraphQLInternalConstraintViolatedErrorModel::class,
       'InvalidCredentials' => GraphQLInvalidCredentialsErrorModel::class,
       'InvalidCurrentPassword' => GraphQLInvalidCurrentPasswordErrorModel::class,
       'InvalidField' => GraphQLInvalidFieldErrorModel::class,
       'InvalidInput' => GraphQLInvalidInputErrorModel::class,
       'InvalidItemShippingDetails' => GraphQLInvalidItemShippingDetailsErrorModel::class,
       'InvalidJsonInput' => GraphQLInvalidJsonInputErrorModel::class,
       'InvalidOperation' => GraphQLInvalidOperationErrorModel::class,
       'InvalidSubject' => GraphQLInvalidSubjectErrorModel::class,
       'LanguageUsedInStores' => GraphQLLanguageUsedInStoresErrorModel::class,
       'LineItemQuantityAboveLimit' => GraphQLLineItemQuantityAboveLimitErrorModel::class,
       'LineItemQuantityBelowLimit' => GraphQLLineItemQuantityBelowLimitErrorModel::class,
       'LockedField' => GraphQLLockedFieldErrorModel::class,
       'MatchingPriceNotFound' => GraphQLMatchingPriceNotFoundErrorModel::class,
       'MaxCartDiscountsReached' => GraphQLMaxCartDiscountsReachedErrorModel::class,
       'MaxDiscountGroupsReached' => GraphQLMaxDiscountGroupsReachedErrorModel::class,
       'MaxResourceLimitExceeded' => GraphQLMaxResourceLimitExceededErrorModel::class,
       'MaxStoreReferencesReached' => GraphQLMaxStoreReferencesReachedErrorModel::class,
       'MissingCountry' => GraphQLAgentMissingCountryErrorModel::class,
       'MissingCustomerEmail' => GraphQLAgentMissingCustomerEmailErrorModel::class,
       'MissingEntityType' => GraphQLAgentMissingEntityTypeErrorModel::class,
       'MissingRoleOnChannel' => GraphQLMissingRoleOnChannelErrorModel::class,
       'MissingTaxRateForCountry' => GraphQLMissingTaxRateForCountryErrorModel::class,
       'MoneyOverflow' => GraphQLMoneyOverflowErrorModel::class,
       'NoLineItemsExtracted' => GraphQLAgentNoLineItemsExtractedErrorModel::class,
       'NoMatchingProductDiscountFound' => GraphQLNoMatchingProductDiscountFoundErrorModel::class,
       'ObjectNotFound' => GraphQLObjectNotFoundErrorModel::class,
       'OutOfScope' => GraphQLAgentOutOfScopeErrorModel::class,
       'OutOfStock' => GraphQLOutOfStockErrorModel::class,
       'OverCapacity' => GraphQLOverCapacityErrorModel::class,
       'OverlappingPriceValidity' => GraphQLOverlappingPriceValidityErrorModel::class,
       'OverlappingStandalonePriceValidity' => GraphQLOverlappingStandalonePriceValidityErrorModel::class,
       'PendingOperation' => GraphQLPendingOperationErrorModel::class,
       'PriceChanged' => GraphQLPriceChangedErrorModel::class,
       'ProductAssignmentMissing' => GraphQLProductAssignmentMissingErrorModel::class,
       'ProductPresentWithDifferentVariantSelection' => GraphQLProductPresentWithDifferentVariantSelectionErrorModel::class,
       'ProductSearchNotEnabled' => GraphQLAgentProductSearchNotEnabledErrorModel::class,
       'ProductsNotFound' => GraphQLAgentProductsNotFoundErrorModel::class,
       'ProjectNotConfiguredForLanguages' => GraphQLProjectNotConfiguredForLanguagesErrorModel::class,
       'QueryComplexityLimitExceeded' => GraphQLQueryComplexityLimitExceededErrorModel::class,
       'QueryTimedOut' => GraphQLQueryTimedOutErrorModel::class,
       'QuoteRequestCreationFailed' => GraphQLAgentQuoteRequestCreationFailedErrorModel::class,
       'RecurringOrderFailure' => GraphQLRecurringOrderFailureErrorModel::class,
       'ReferenceExists' => GraphQLReferenceExistsErrorModel::class,
       'ReferencedResourceNotFound' => GraphQLReferencedResourceNotFoundErrorModel::class,
       'RequiredField' => GraphQLRequiredFieldErrorModel::class,
       'ResourceNotFound' => GraphQLResourceNotFoundErrorModel::class,
       'ResourceSizeLimitExceeded' => GraphQLResourceSizeLimitExceededErrorModel::class,
       'SearchDeactivated' => GraphQLSearchDeactivatedErrorModel::class,
       'SearchExecutionFailure' => GraphQLSearchExecutionFailureErrorModel::class,
       'SearchFacetPathNotFound' => GraphQLSearchFacetPathNotFoundErrorModel::class,
       'SearchIndexingInProgress' => GraphQLSearchIndexingInProgressErrorModel::class,
       'SearchNotReady' => GraphQLSearchNotReadyErrorModel::class,
       'SemanticError' => GraphQLSemanticErrorErrorModel::class,
       'ShippingMethodDoesNotMatchCart' => GraphQLShippingMethodDoesNotMatchCartErrorModel::class,
       'StoreAmbiguous' => GraphQLAgentStoreAmbiguousErrorModel::class,
       'StoreCartDiscountsLimitReached' => GraphQLStoreCartDiscountsLimitReachedErrorModel::class,
       'StoreDistributionChannelsUnsupported' => GraphQLAgentStoreDistributionChannelsUnsupportedErrorModel::class,
       'StoreUnresolved' => GraphQLAgentStoreUnresolvedErrorModel::class,
       'SyntaxError' => GraphQLSyntaxErrorErrorModel::class,
       'Unauthorized' => GraphQLUnauthorizedErrorModel::class,
       'ValidityLockConflict' => GraphQLValidityLockConflictErrorModel::class,
       'insufficient_scope' => GraphQLInsufficientScopeErrorModel::class,
       'invalid_token' => GraphQLInvalidTokenErrorModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $code = null
    ) {
        $this->code = $code;
    }

    /**
     * <p>One of the error codes that is listed on the <a href="/errors">Errors</a> page.</p>
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
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }
        if (preg_match(GraphQLErrorObject::FIELD_PATTERN1, $key) === 1) {
            /** @psalm-var stdClass $data */
            return JsonObjectModel::of($data);
        }

        return $data;
    }


    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<GraphQLErrorObject>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = GraphQLErrorObject::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<GraphQLErrorObject> */
        $type = GraphQLErrorObjectModel::class;
        return $type;
    }
}
