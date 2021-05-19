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
 * @extends ChangeCollection<SetShippingInfoTaxedPriceChange>
 * @method SetShippingInfoTaxedPriceChange current()
 * @method SetShippingInfoTaxedPriceChange at($offset)
 */
class SetShippingInfoTaxedPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingInfoTaxedPriceChange $value
     * @psalm-param SetShippingInfoTaxedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingInfoTaxedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingInfoTaxedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingInfoTaxedPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetShippingInfoTaxedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingInfoTaxedPriceChange $data */
                $data = SetShippingInfoTaxedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
