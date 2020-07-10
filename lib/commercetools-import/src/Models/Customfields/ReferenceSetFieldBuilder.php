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
use Models\Common\KeyReferenceCollection;

/**
 * @implements Builder<ReferenceSetField>
 */
final class ReferenceSetFieldBuilder implements Builder
{
    /**
     * @var ?KeyReferenceCollection
     */
    private $value;

    /**
     * @return null|KeyReferenceCollection
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?KeyReferenceCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): ReferenceSetField
    {
        return new ReferenceSetFieldModel(
            $this->value
        );
    }

    public static function of(): ReferenceSetFieldBuilder
    {
        return new self();
    }
}
