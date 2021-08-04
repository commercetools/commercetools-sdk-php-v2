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
 * @extends ChangeCollection<SetShippingRateChange>
 * @method SetShippingRateChange current()
 * @method SetShippingRateChange end()
 * @method SetShippingRateChange at($offset)
 */
class SetShippingRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingRateChange $value
     * @psalm-param SetShippingRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingRateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingRateChange $data */
                $data = SetShippingRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
