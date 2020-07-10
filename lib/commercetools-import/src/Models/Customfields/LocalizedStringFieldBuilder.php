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
use Models\Common\LocalizedString;
use Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<LocalizedStringField>
 */
final class LocalizedStringFieldBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $value;

    /**
     * @return null|LocalizedString
     */
    public function getValue()
    {
        return $this->value instanceof LocalizedStringBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?LocalizedString $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?LocalizedStringBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): LocalizedStringField
    {
        return new LocalizedStringFieldModel(
            $this->value instanceof LocalizedStringBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): LocalizedStringFieldBuilder
    {
        return new self();
    }
}
