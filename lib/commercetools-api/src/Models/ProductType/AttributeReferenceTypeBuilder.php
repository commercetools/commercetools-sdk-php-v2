<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeReferenceType>
 */
final class AttributeReferenceTypeBuilder implements Builder
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

    public function build(): AttributeReferenceType
    {
        return new AttributeReferenceTypeModel(
            $this->referenceTypeId
        );
    }

    public static function of(): AttributeReferenceTypeBuilder
    {
        return new self();
    }
}
