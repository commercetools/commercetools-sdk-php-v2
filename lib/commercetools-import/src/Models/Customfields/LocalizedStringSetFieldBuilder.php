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
use Commercetools\Import\Models\Common\LocalizedStringCollection;
use stdClass;

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
     * @param ?LocalizedStringCollection $value
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
