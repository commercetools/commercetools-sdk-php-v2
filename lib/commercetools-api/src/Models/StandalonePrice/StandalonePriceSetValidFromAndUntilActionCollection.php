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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetValidFromAndUntilAction>
 * @method StandalonePriceSetValidFromAndUntilAction current()
 * @method StandalonePriceSetValidFromAndUntilAction end()
 * @method StandalonePriceSetValidFromAndUntilAction at($offset)
 */
class StandalonePriceSetValidFromAndUntilActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetValidFromAndUntilAction $value
     * @psalm-param StandalonePriceSetValidFromAndUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetValidFromAndUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetValidFromAndUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetValidFromAndUntilAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetValidFromAndUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetValidFromAndUntilAction $data */
                $data = StandalonePriceSetValidFromAndUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
