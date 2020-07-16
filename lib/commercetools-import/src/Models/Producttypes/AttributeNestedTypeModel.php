<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\ProductTypeKeyReferenceModel;
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
     * @var ?ProductTypeKeyReference
     */
    protected $typeReference;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductTypeKeyReference $typeReference = null
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
     * <p>References a product type by its key.</p>
     *
     * @return null|ProductTypeKeyReference
     */
    public function getTypeReference()
    {
        if (is_null($this->typeReference)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE_REFERENCE);
            if (is_null($data)) {
                return null;
            }

            $this->typeReference = ProductTypeKeyReferenceModel::of($data);
        }

        return $this->typeReference;
    }


    /**
     * @param ?ProductTypeKeyReference $typeReference
     */
    public function setTypeReference(?ProductTypeKeyReference $typeReference): void
    {
        $this->typeReference = $typeReference;
    }
}
