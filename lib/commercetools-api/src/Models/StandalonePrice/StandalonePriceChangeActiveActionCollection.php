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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceChangeActiveAction>
 * @method StandalonePriceChangeActiveAction current()
 * @method StandalonePriceChangeActiveAction end()
 * @method StandalonePriceChangeActiveAction at($offset)
 */
class StandalonePriceChangeActiveActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceChangeActiveAction $value
     * @psalm-param StandalonePriceChangeActiveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceChangeActiveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceChangeActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceChangeActiveAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceChangeActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceChangeActiveAction $data */
                $data = StandalonePriceChangeActiveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
