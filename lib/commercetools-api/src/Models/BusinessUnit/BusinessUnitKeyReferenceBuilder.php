<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\KeyReference;
use Commercetools\Api\Models\Common\KeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitKeyReference>
 */
final class BusinessUnitKeyReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Unique and immutable key of the referenced <a href="ctp:api:type:BusinessUnit">BusinessUnit</a>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): BusinessUnitKeyReference
    {
        return new BusinessUnitKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): BusinessUnitKeyReferenceBuilder
    {
        return new self();
    }
}
