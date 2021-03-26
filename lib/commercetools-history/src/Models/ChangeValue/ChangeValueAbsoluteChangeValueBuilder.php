<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\MoneyCollection;

/**
 * @implements Builder<ChangeValueAbsoluteChangeValue>
 */
final class ChangeValueAbsoluteChangeValueBuilder implements Builder
{
    /**
     * @var ?MoneyCollection
     */
    private $money;

    /**
     * @return null|MoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param ?MoneyCollection $money
     * @return $this
     */
    public function withMoney(?MoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }


    public function build(): ChangeValueAbsoluteChangeValue
    {
        return new ChangeValueAbsoluteChangeValueModel(
            $this->money
        );
    }

    public static function of(): ChangeValueAbsoluteChangeValueBuilder
    {
        return new self();
    }
}
