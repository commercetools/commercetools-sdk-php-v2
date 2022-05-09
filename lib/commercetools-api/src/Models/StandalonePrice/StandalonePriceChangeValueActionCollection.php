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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceChangeValueAction>
 * @method StandalonePriceChangeValueAction current()
 * @method StandalonePriceChangeValueAction end()
 * @method StandalonePriceChangeValueAction at($offset)
 */
class StandalonePriceChangeValueActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceChangeValueAction $value
     * @psalm-param StandalonePriceChangeValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceChangeValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceChangeValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceChangeValueAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceChangeValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceChangeValueAction $data */
                $data = StandalonePriceChangeValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
