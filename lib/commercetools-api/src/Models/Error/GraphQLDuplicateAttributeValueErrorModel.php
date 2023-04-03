<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\Attribute;
use Commercetools\Api\Models\Product\AttributeModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLDuplicateAttributeValueErrorModel extends JsonObjectModel implements GraphQLDuplicateAttributeValueError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateAttributeValue';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?Attribute
     */
    protected $attribute;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Attribute $attribute = null,
        ?string $code = null
    ) {
        $this->attribute = $attribute;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>Conflicting Attributes.</p>
     *
     *
     * @return null|Attribute
     */
    public function getAttribute()
    {
        if (is_null($this->attribute)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE);
            if (is_null($data)) {
                return null;
            }

            $this->attribute = AttributeModel::of($data);
        }

        return $this->attribute;
    }


    /**
     * @param ?Attribute $attribute
     */
    public function setAttribute(?Attribute $attribute): void
    {
        $this->attribute = $attribute;
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
