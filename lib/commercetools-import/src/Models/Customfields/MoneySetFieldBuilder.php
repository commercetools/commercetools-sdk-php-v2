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
use Commercetools\Import\Models\Common\TypedMoneyCollection;
use stdClass;

/**
 * @implements Builder<MoneySetField>
 */
final class MoneySetFieldBuilder implements Builder
{
    /**

     * @var ?TypedMoneyCollection
     */
    private $value;

    /**
     * <p>JSON array of money values in cent precision format.
     * The order of items in the array is not fixed.</p>
     *

     * @return null|TypedMoneyCollection
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?TypedMoneyCollection $value
     * @return $this
     */
    public function withValue(?TypedMoneyCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): MoneySetField
    {
        return new MoneySetFieldModel(
            $this->value
        );
    }

    public static function of(): MoneySetFieldBuilder
    {
        return new self();
    }
}
