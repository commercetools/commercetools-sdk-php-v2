<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ErrorObjectModel extends JsonObjectModel implements ErrorObject
{
    const DISCRIMINATOR_VALUE = '';
    public function __construct(
        string $code = null,
        string $message = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $message;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       if (is_null($this->code)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->code = (string)$data;
       }
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       if (is_null($this->message)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_MESSAGE);
           if (is_null($data)) {
               return null;
           }
           $this->message = (string)$data;
       }
       return $this->message;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    /**
     * @psalm-var array<string, class-string<ErrorObject> >
     * 
     */
    private static $discriminatorClasses = [
       'ExtensionBadResponse' => ExtensionBadResponseErrorModel::class,
       'ExtensionNoResponse' => ExtensionNoResponseErrorModel::class,
       'ExtensionUpdateActionsFailed' => ExtensionUpdateActionsFailedErrorModel::class,
       'insufficient_scope' => InsufficientScopeErrorModel::class,
       'InvalidCredentials' => InvalidCredentialsErrorModel::class,
       'InvalidCurrentPassword' => InvalidCurrentPasswordErrorModel::class,
       'InvalidField' => InvalidFieldErrorModel::class,
       'InvalidInput' => InvalidInputErrorModel::class,
       'InvalidItemShippingDetails' => InvalidItemShippingDetailsErrorModel::class,
       'InvalidJsonInput' => InvalidJsonInputErrorModel::class,
       'InvalidOperation' => InvalidOperationErrorModel::class,
       'InvalidSubject' => InvalidSubjectErrorModel::class,
       'invalid_token' => InvalidTokenErrorModel::class,
       'MatchingPriceNotFound' => MatchingPriceNotFoundErrorModel::class,
       'MissingTaxRateForCountry' => MissingTaxRateForCountryErrorModel::class,
       'NoMatchingProductDiscountFound' => NoMatchingProductDiscountFoundErrorModel::class,
       'OutOfStock' => OutOfStockErrorModel::class,
       'PriceChanged' => PriceChangedErrorModel::class,
       'ReferenceExists' => ReferenceExistsErrorModel::class,
       'RequiredField' => RequiredFieldErrorModel::class,
       'ResourceNotFound' => ResourceNotFoundErrorModel::class,
       'ShippingMethodDoesNotMatchCart' => ShippingMethodDoesNotMatchCartErrorModel::class,
       'access_denied' => AccessDeniedErrorModel::class,
       'ConcurrentModification' => ConcurrentModificationErrorModel::class,
       'DiscountCodeNonApplicable' => DiscountCodeNonApplicableErrorModel::class,
       'DuplicateAttributeValue' => DuplicateAttributeValueErrorModel::class,
       'DuplicateAttributeValues' => DuplicateAttributeValuesErrorModel::class,
       'DuplicateField' => DuplicateFieldErrorModel::class,
       'DuplicateFieldWithConflictingResource' => DuplicateFieldWithConflictingResourceErrorModel::class,
       'DuplicatePriceScope' => DuplicatePriceScopeErrorModel::class,
       'DuplicateVariantValues' => DuplicateVariantValuesErrorModel::class,
       'EnumValueIsUsed' => EnumValueIsUsedErrorModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ErrorObject>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = ErrorObject::DISCRIMINATOR_FIELD;
       if (is_object($value) && isset($value->$fieldName)) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value->$fieldName;
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       if (is_array($value) && isset($value[$fieldName])) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value[$fieldName];
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       
       /** @psalm-var class-string<ErrorObject> */
       $type = ErrorObjectModel::class;
       return $type;
    }
}