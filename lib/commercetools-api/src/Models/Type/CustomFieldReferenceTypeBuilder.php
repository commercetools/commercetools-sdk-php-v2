<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomFieldReferenceType>
 */
final class CustomFieldReferenceTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $referenceTypeId;

    /**
     * @return null|string
     */
    public function getReferenceTypeId()
    {
        return $this->referenceTypeId;
    }

    /**
     * @return $this
     */
    public function withReferenceTypeId(?string $referenceTypeId)
    {
        $this->referenceTypeId = $referenceTypeId;

        return $this;
    }


    public function build(): CustomFieldReferenceType
    {
        return new CustomFieldReferenceTypeModel(
            $this->referenceTypeId
        );
    }

    public static function of(): CustomFieldReferenceTypeBuilder
    {
        return new self();
    }
}
