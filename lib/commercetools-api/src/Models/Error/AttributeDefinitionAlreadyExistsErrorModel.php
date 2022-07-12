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
final class AttributeDefinitionAlreadyExistsErrorModel extends JsonObjectModel implements AttributeDefinitionAlreadyExistsError
{
    public const DISCRIMINATOR_VALUE = 'AttributeDefinitionAlreadyExists';
    /**

     * @var ?string
     */
    protected $code;

    /**

     * @var ?string
     */
    protected $message;

    /**

     * @var ?string
     */
    protected $conflictingProductTypeId;

    /**

     * @var ?string
     */
    protected $conflictingProductTypeName;

    /**

     * @var ?string
     */
    protected $conflictingAttributeName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $conflictingProductTypeId = null,
        ?string $conflictingProductTypeName = null,
        ?string $conflictingAttributeName = null
    ) {
        $this->message = $message;
        $this->conflictingProductTypeId = $conflictingProductTypeId;
        $this->conflictingProductTypeName = $conflictingProductTypeName;
        $this->conflictingAttributeName = $conflictingAttributeName;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**

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

     * @return null|string
     */
    public function getConflictingProductTypeId()
    {
        if (is_null($this->conflictingProductTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_PRODUCT_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingProductTypeId = (string) $data;
        }

        return $this->conflictingProductTypeId;
    }

    /**

     * @return null|string
     */
    public function getConflictingProductTypeName()
    {
        if (is_null($this->conflictingProductTypeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_PRODUCT_TYPE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingProductTypeName = (string) $data;
        }

        return $this->conflictingProductTypeName;
    }

    /**

     * @return null|string
     */
    public function getConflictingAttributeName()
    {
        if (is_null($this->conflictingAttributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingAttributeName = (string) $data;
        }

        return $this->conflictingAttributeName;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $conflictingProductTypeId
     */
    public function setConflictingProductTypeId(?string $conflictingProductTypeId): void
    {
        $this->conflictingProductTypeId = $conflictingProductTypeId;
    }

    /**
     * @param ?string $conflictingProductTypeName
     */
    public function setConflictingProductTypeName(?string $conflictingProductTypeName): void
    {
        $this->conflictingProductTypeName = $conflictingProductTypeName;
    }

    /**
     * @param ?string $conflictingAttributeName
     */
    public function setConflictingAttributeName(?string $conflictingAttributeName): void
    {
        $this->conflictingAttributeName = $conflictingAttributeName;
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

        return $data;
    }
}
