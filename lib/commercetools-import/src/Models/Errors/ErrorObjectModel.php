<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ErrorObjectModel extends JsonObjectModel implements ErrorObject
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @psalm-var array<string, class-string<ErrorObject> >
     */
    private static $discriminatorClasses = [
        'access_denied' => AccessDeniedErrorModel::class,
        'invalid_scope' => InvalidScopeErrorModel::class,
        'DuplicateAttributeValue' => DuplicateAttributeValueErrorModel::class,
        'DuplicateAttributeValues' => DuplicateAttributeValuesErrorModel::class,
        'DuplicateField' => DuplicateFieldErrorModel::class,
        'DuplicateVariantValues' => DuplicateVariantValuesErrorModel::class,
        'insufficient_scope' => InsufficientScopeErrorModel::class,
        'InvalidCredentials' => InvalidCredentialsErrorModel::class,
        'invalid_token' => InvalidTokenErrorModel::class,
        'InvalidField' => InvalidFieldErrorModel::class,
        'InvalidJsonInput' => InvalidJsonInputModel::class,
        'InvalidInput' => InvalidInputModel::class,
        'ResourceNotFound' => ResourceNotFoundErrorModel::class,
        'ResourceCreation' => ResourceCreationErrorModel::class,
        'ResourceUpdate' => ResourceUpdateErrorModel::class,
        'ResourceDeletion' => ResourceDeletionErrorModel::class,
        'RequiredField' => RequiredFieldErrorModel::class,
        'InvalidTransition' => InvalidStateTransitionErrorModel::class,
        'ConcurrentModification' => ConcurrentModificationErrorModel::class,
        'Contention' => ContentionErrorModel::class,
        'Generic' => GenericErrorModel::class,
    ];

    public function __construct(
        string $message = null
    ) {
        $this->message = $message;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>The error's description.</p>.
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ErrorObject>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ErrorObject::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
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
