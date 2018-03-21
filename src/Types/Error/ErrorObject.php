<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface ErrorObject extends JsonObject {
    const DISCRIMINATOR = 'code';
    const SUB_TYPES = [
        'insufficient_scope' => Types\Error\InsufficientScopeError::class,
        'InvalidCredentials' => Types\Error\InvalidCredentialsError::class,
        'InvalidCurrentPassword' => Types\Error\InvalidCurrentPasswordError::class,
        'InvalidField' => Types\Error\InvalidFieldError::class,
        'InvalidOperation' => Types\Error\InvalidOperationError::class,
        'InvalidSubject' => Types\Error\InvalidSubjectError::class,
        'invalid_token' => Types\Error\InvalidTokenError::class,
        'OutOfStock' => Types\Error\OutOfStockError::class,
        'PriceChanged' => Types\Error\PriceChangedError::class,
        'RequiredField' => Types\Error\RequiredFieldError::class,
        'ResourceNotFound' => Types\Error\ResourceNotFoundError::class,
        'DuplicatePriceScope' => Types\Error\DuplicatePriceScopeError::class,
        'ConcurrentModification' => Types\Error\ConcurrentModificationError::class,
        'DuplicateField' => Types\Error\DuplicateFieldError::class,
        'access_denied' => Types\Error\AccessDeniedError::class,
        'DuplicateAttributeValue' => Types\Error\DuplicateAttributeValueError::class,
        'DuplicateVariantValues' => Types\Error\DuplicateVariantValuesError::class,
        'DuplicateAttributeValues' => Types\Error\DuplicateAttributeValuesError::class,
        'DiscountCodeNonApplicable' => Types\Error\DiscountCodeNonApplicableError::class,

    ];

    const FIELD_CODE = 'code';
    const FIELD_MESSAGE = 'message';

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code);

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message);

}
