<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeNestedTypeModel extends JsonObjectModel implements AttributeNestedType
{
    public const DISCRIMINATOR_VALUE = 'nested';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?ProductTypeReference
     */
    protected $typeReference;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductTypeReference $typeReference = null
    ) {
        $this->typeReference = $typeReference;
        $this->name = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|ProductTypeReference
     */
    public function getTypeReference()
    {
        if (is_null($this->typeReference)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE_REFERENCE);
            if (is_null($data)) {
                return null;
            }

            $this->typeReference = ProductTypeReferenceModel::of($data);
        }

        return $this->typeReference;
    }


    /**
     * @param ?ProductTypeReference $typeReference
     */
    public function setTypeReference(?ProductTypeReference $typeReference): void
    {
        $this->typeReference = $typeReference;
    }
}
