<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

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
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @psalm-var array<string, class-string<ErrorObject> >
     *
     */
    private static $discriminatorClasses = [
       'ConcurrentModification' => ConcurrentModificationErrorModel::class,
       'Contention' => ContentionErrorModel::class,
       'DuplicateAttributeValue' => DuplicateAttributeValueErrorModel::class,
       'DuplicateAttributeValues' => DuplicateAttributeValuesErrorModel::class,
       'DuplicateField' => DuplicateFieldErrorModel::class,
       'DuplicateVariantValues' => DuplicateVariantValuesErrorModel::class,
       'Generic' => GenericErrorModel::class,
       'InvalidCredentials' => InvalidCredentialsErrorModel::class,
       'InvalidField' => InvalidFieldErrorModel::class,
       'InvalidInput' => InvalidInputModel::class,
       'InvalidJsonInput' => InvalidJsonInputModel::class,
       'InvalidTransition' => InvalidStateTransitionErrorModel::class,
       'RequiredField' => RequiredFieldErrorModel::class,
       'ResourceCreation' => ResourceCreationErrorModel::class,
       'ResourceDeletion' => ResourceDeletionErrorModel::class,
       'ResourceNotFound' => ResourceNotFoundErrorModel::class,
       'ResourceUpdate' => ResourceUpdateErrorModel::class,
       'access_denied' => AccessDeniedErrorModel::class,
       'insufficient_scope' => InsufficientScopeErrorModel::class,
       'invalid_scope' => InvalidScopeErrorModel::class,
       'invalid_token' => InvalidTokenErrorModel::class,
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
     * <p>The error's description.</p>
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
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ErrorObject::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ErrorObject> */
        $type = ErrorObjectModel::class;
        return $type;
    }
}
