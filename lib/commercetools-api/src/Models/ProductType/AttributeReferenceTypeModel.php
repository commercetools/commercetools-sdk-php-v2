<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class AttributeReferenceTypeModel extends JsonObjectModel implements AttributeReferenceType
{
    const DISCRIMINATOR_VALUE = 'reference';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $referenceTypeId;

    public function __construct(
        string $name = null,
        string $referenceTypeId = null
    ) {
        $this->name = $name;
        $this->referenceTypeId = $referenceTypeId;
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
     * @return null|string
     */
    public function getReferenceTypeId()
    {
        if (is_null($this->referenceTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeReferenceType::FIELD_REFERENCE_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->referenceTypeId = (string) $data;
        }

        return $this->referenceTypeId;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setReferenceTypeId(?string $referenceTypeId): void
    {
        $this->referenceTypeId = $referenceTypeId;
    }
}
