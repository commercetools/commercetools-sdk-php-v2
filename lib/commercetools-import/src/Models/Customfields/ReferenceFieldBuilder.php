<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\KeyReference;
use Commercetools\Import\Models\Common\KeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<ReferenceField>
 */
final class ReferenceFieldBuilder implements Builder
{
    /**
     * @var null|KeyReference|KeyReferenceBuilder
     */
    private $value;

    /**
     * <p>References a resource by key</p>
     *
     * @return null|KeyReference
     */
    public function getValue()
    {
        return $this->value instanceof KeyReferenceBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?KeyReference $value
     * @return $this
     */
    public function withValue(?KeyReference $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?KeyReferenceBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ReferenceField
    {
        return new ReferenceFieldModel(
            $this->value instanceof KeyReferenceBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): ReferenceFieldBuilder
    {
        return new self();
    }
}
