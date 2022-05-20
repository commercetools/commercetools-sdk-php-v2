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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetCustomTypeAction>
 * @method StandalonePriceSetCustomTypeAction current()
 * @method StandalonePriceSetCustomTypeAction end()
 * @method StandalonePriceSetCustomTypeAction at($offset)
 */
class StandalonePriceSetCustomTypeActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetCustomTypeAction $value
     * @psalm-param StandalonePriceSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetCustomTypeAction $data */
                $data = StandalonePriceSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
