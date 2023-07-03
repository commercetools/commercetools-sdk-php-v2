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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetValidUntilAction>
 * @method StandalonePriceSetValidUntilAction current()
 * @method StandalonePriceSetValidUntilAction end()
 * @method StandalonePriceSetValidUntilAction at($offset)
 */
class StandalonePriceSetValidUntilActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetValidUntilAction $value
     * @psalm-param StandalonePriceSetValidUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetValidUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetValidUntilAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetValidUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetValidUntilAction $data */
                $data = StandalonePriceSetValidUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
