<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Type of referenced resource.</p>
     *

     * @return null|string
     */
    public function getReferenceTypeId()
    {
        return $this->referenceTypeId;
    }

    /**
     * @param ?string $referenceTypeId
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
