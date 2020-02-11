<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomFieldReferenceTypeModel extends JsonObjectModel implements CustomFieldReferenceType
{
    public const DISCRIMINATOR_VALUE = 'Reference';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $referenceTypeId;


    public function __construct(
        string $referenceTypeId = null
    ) {
        $this->referenceTypeId = $referenceTypeId;
        $this->name = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FieldType::FIELD_NAME);
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
            $data = $this->raw(CustomFieldReferenceType::FIELD_REFERENCE_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->referenceTypeId = (string) $data;
        }

        return $this->referenceTypeId;
    }

    public function setReferenceTypeId(?string $referenceTypeId): void
    {
        $this->referenceTypeId = $referenceTypeId;
    }



}
