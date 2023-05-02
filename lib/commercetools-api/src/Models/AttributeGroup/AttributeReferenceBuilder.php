<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeReference>
 */
final class AttributeReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>The Attribute's <code>name</code> as given in its <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
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


    public function build(): AttributeReference
    {
        return new AttributeReferenceModel(
            $this->key
        );
    }

    public static function of(): AttributeReferenceBuilder
    {
        return new self();
    }
}
