<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\StandalonePrice\StandalonePriceUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetKeyAction>
 * @method StandalonePriceSetKeyAction current()
 * @method StandalonePriceSetKeyAction end()
 * @method StandalonePriceSetKeyAction at($offset)
 */
class StandalonePriceSetKeyActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetKeyAction $value
     * @psalm-param StandalonePriceSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetKeyAction $data */
                $data = StandalonePriceSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
