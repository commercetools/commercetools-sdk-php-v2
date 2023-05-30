<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

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
       'ConcurrentModification' => GraphQLConcurrentModificationErrorModel::class,
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
       'ExtensionBadResponse' => GraphQLExtensionBadResponseErrorModel::class,
       'ExtensionNoResponse' => GraphQLExtensionNoResponseErrorModel::class,
       'ExtensionPredicateEvaluationFailed' => GraphQLExtensionPredicateEvaluationFailedErrorModel::class,
       'ExtensionUpdateActionsFailed' => GraphQLExtensionUpdateActionsFailedErrorModel::class,
       'ExternalOAuthFailed' => GraphQLExternalOAuthFailedErrorModel::class,
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
       'MatchingPriceNotFound' => GraphQLMatchingPriceNotFoundErrorModel::class,
       'MaxResourceLimitExceeded' => GraphQLMaxResourceLimitExceededErrorModel::class,
       'MissingRoleOnChannel' => GraphQLMissingRoleOnChannelErrorModel::class,
       'MissingTaxRateForCountry' => GraphQLMissingTaxRateForCountryErrorModel::class,
       'MoneyOverflow' => GraphQLMoneyOverflowErrorModel::class,
       'NoMatchingProductDiscountFound' => GraphQLNoMatchingProductDiscountFoundErrorModel::class,
       'NotEnabled' => GraphQLNotEnabledErrorModel::class,
       'ObjectNotFound' => GraphQLObjectNotFoundErrorModel::class,
       'OutOfStock' => GraphQLOutOfStockErrorModel::class,
       'OverCapacity' => GraphQLOverCapacityErrorModel::class,
       'OverlappingStandalonePriceValidity' => GraphQLOverlappingStandalonePriceValidityErrorModel::class,
       'PendingOperation' => GraphQLPendingOperationErrorModel::class,
       'PriceChanged' => GraphQLPriceChangedErrorModel::class,
       'ProductAssignmentMissing' => GraphQLProductAssignmentMissingErrorModel::class,
       'ProductPresentWithDifferentVariantSelection' => GraphQLProductPresentWithDifferentVariantSelectionErrorModel::class,
       'ProjectNotConfiguredForLanguages' => GraphQLProjectNotConfiguredForLanguagesErrorModel::class,
       'QueryComplexityLimitExceeded' => GraphQLQueryComplexityLimitExceededErrorModel::class,
       'QueryTimedOut' => GraphQLQueryTimedOutErrorModel::class,
       'ReferenceExists' => GraphQLReferenceExistsErrorModel::class,
       'ReferencedResourceNotFound' => GraphQLReferencedResourceNotFoundErrorModel::class,
       'RequiredField' => GraphQLRequiredFieldErrorModel::class,
       'ResourceNotFound' => GraphQLResourceNotFoundErrorModel::class,
       'ResourceSizeLimitExceeded' => GraphQLResourceSizeLimitExceededErrorModel::class,
       'SearchDeactivated' => GraphQLSearchDeactivatedErrorModel::class,
       'SearchExecutionFailure' => GraphQLSearchExecutionFailureErrorModel::class,
       'SearchFacetPathNotFound' => GraphQLSearchFacetPathNotFoundErrorModel::class,
       'SearchIndexingInProgress' => GraphQLSearchIndexingInProgressErrorModel::class,
       'SemanticError' => GraphQLSemanticErrorErrorModel::class,
       'ShippingMethodDoesNotMatchCart' => GraphQLShippingMethodDoesNotMatchCartErrorModel::class,
       'SyntaxError' => GraphQLSyntaxErrorErrorModel::class,
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
