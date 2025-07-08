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
use stdClass;

/**
 * @implements Builder<BooleanField>
 */
final class BooleanFieldBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $value;

    /**
     * <p><code>true</code> or <code>false</code></p>
     *

     * @return null|bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?bool $value
     * @return $this
     */
    public function withValue(?bool $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): BooleanField
    {
        return new BooleanFieldModel(
            $this->value
        );
    }

    public static function of(): BooleanFieldBuilder
    {
        return new self();
    }
}
