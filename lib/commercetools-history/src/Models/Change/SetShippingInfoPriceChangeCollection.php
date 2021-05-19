<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetShippingInfoPriceChange>
 * @method SetShippingInfoPriceChange current()
 * @method SetShippingInfoPriceChange at($offset)
 */
class SetShippingInfoPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingInfoPriceChange $value
     * @psalm-param SetShippingInfoPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingInfoPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingInfoPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingInfoPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetShippingInfoPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingInfoPriceChange $data */
                $data = SetShippingInfoPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
