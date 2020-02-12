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
use Commercetools\Import\Models\Productvariants\Attribute;

use Commercetools\Import\Models\Productvariants\AttributeModel;
use stdClass;

final class DuplicateAttributeValueErrorModel extends JsonObjectModel implements DuplicateAttributeValueError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateAttributeValue';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?Attribute
     */
    protected $attribute;


    public function __construct(
        string $message = null,
        Attribute $attribute = null
    ) {
        $this->message = $message;
        $this->attribute = $attribute;
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

    /**
     * <p>The conflicting attribute.</p>
     *
     * @return null|Attribute
     */
    public function getAttribute()
    {
        if (is_null($this->attribute)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DuplicateAttributeValueError::FIELD_ATTRIBUTE);
            if (is_null($data)) {
                return null;
            }
            $className = AttributeModel::resolveDiscriminatorClass($data);
            $this->attribute = $className::of($data);
        }

        return $this->attribute;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setAttribute(?Attribute $attribute): void
    {
        $this->attribute = $attribute;
    }
}
