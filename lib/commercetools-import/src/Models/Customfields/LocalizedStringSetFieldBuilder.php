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
use Models\Common\LocalizedStringCollection;

/**
 * @implements Builder<LocalizedStringSetField>
 */
final class LocalizedStringSetFieldBuilder implements Builder
{
    /**
     * @var ?LocalizedStringCollection
     */
    private $value;

    /**
     * @return null|LocalizedStringCollection
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?LocalizedStringCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): LocalizedStringSetField
    {
        return new LocalizedStringSetFieldModel(
            $this->value
        );
    }

    public static function of(): LocalizedStringSetFieldBuilder
    {
        return new self();
    }
}
