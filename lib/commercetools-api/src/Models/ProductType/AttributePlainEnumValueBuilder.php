<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributePlainEnumValue>
 */
final class AttributePlainEnumValueBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $label;

    /**
     * <p>Key of the value used as a programmatic identifier, for example in facets &amp; filters.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Descriptive label of the value.</p>
     *
     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
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

    /**
     * @param ?string $label
     * @return $this
     */
    public function withLabel(?string $label)
    {
        $this->label = $label;

        return $this;
    }


    public function build(): AttributePlainEnumValue
    {
        return new AttributePlainEnumValueModel(
            $this->key,
            $this->label
        );
    }

    public static function of(): AttributePlainEnumValueBuilder
    {
        return new self();
    }
}
