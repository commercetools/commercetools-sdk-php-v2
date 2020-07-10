<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Common\KeyReference;
use Models\Common\KeyReferenceBuilder;

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
     * <p>References a resource by its key.</p>
     *
     * @return null|KeyReference
     */
    public function getValue()
    {
        return $this->value instanceof KeyReferenceBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?KeyReference $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
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
