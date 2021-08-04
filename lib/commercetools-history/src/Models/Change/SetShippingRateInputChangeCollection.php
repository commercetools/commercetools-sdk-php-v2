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
 * @extends ChangeCollection<SetShippingRateInputChange>
 * @method SetShippingRateInputChange current()
 * @method SetShippingRateInputChange end()
 * @method SetShippingRateInputChange at($offset)
 */
class SetShippingRateInputChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingRateInputChange $value
     * @psalm-param SetShippingRateInputChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingRateInputChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingRateInputChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingRateInputChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingRateInputChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingRateInputChange $data */
                $data = SetShippingRateInputChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
