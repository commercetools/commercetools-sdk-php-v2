<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceModel;
use stdClass;

final class AttributeNestedTypeModel extends JsonObjectModel implements AttributeNestedType
{
    const DISCRIMINATOR_VALUE = 'nested';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?ImportReference
     */
    protected $typeReference;

    public function __construct(
        string $name = null,
        ImportReference $typeReference = null
    ) {
        $this->name = $name;
        $this->typeReference = $typeReference;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getTypeReference()
    {
        if (is_null($this->typeReference)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AttributeNestedType::FIELD_TYPE_REFERENCE);
            if (is_null($data)) {
                return null;
            }

            $this->typeReference = ImportReferenceModel::of($data);
        }

        return $this->typeReference;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setTypeReference(?ImportReference $typeReference): void
    {
        $this->typeReference = $typeReference;
    }
}
