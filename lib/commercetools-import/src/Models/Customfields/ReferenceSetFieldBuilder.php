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
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

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
