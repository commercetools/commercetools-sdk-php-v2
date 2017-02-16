<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ErrorObject extends JsonObject {
    protected $code;
    protected $message;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'code';
    public function __construct(array $data = []) {
        $this->code = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'access_denied' => AccessDeniedError::class,
        'ConcurrentModification' => ConcurrentModificationError::class,
        'DiscountCodeNonApplicable' => DiscountCodeNonApplicableError::class,
        'DuplicateAttributeValue' => DuplicateAttributeValueError::class,
        'DuplicateAttributeValues' => DuplicateAttributeValuesError::class,
        'DuplicateField' => DuplicateFieldError::class,
        'DuplicatePriceScope' => DuplicatePriceScopeError::class,
        'DuplicateVariantValues' => DuplicateVariantValuesError::class,
        'insufficient_scope' => InsufficientScopeError::class,
        'InvalidCredentials' => InvalidCredentialsError::class,
        'InvalidCurrentPassword' => InvalidCurrentPasswordError::class,
        'InvalidField' => InvalidFieldError::class,
        'InvalidOperation' => InvalidOperationError::class,
        'InvalidSubject' => InvalidSubjectError::class,
        'invalid_token' => InvalidTokenError::class,
        'OutOfStock' => OutOfStockError::class,
        'PriceChanged' => PriceChangedError::class,
        'RequiredField' => RequiredFieldError::class,
        'ResourceNotFound' => ResourceNotFoundError::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return ErrorObject::class;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        if (is_null($this->code)) {
            $value = $this->raw('code');
            if (!is_null($value)) {
                $this->code = (string)$value;
            } else {
                return '';
            }
        }
        return $this->code;
    }
                

    /**
     * @return string
     */
    public function getMessage(): string
    {
        if (is_null($this->message)) {
            $value = $this->raw('message');
            if (!is_null($value)) {
                $this->message = (string)$value;
            } else {
                return '';
            }
        }
        return $this->message;
    }
                
}
