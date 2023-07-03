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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceAddPriceTierAction>
 * @method StandalonePriceAddPriceTierAction current()
 * @method StandalonePriceAddPriceTierAction end()
 * @method StandalonePriceAddPriceTierAction at($offset)
 */
class StandalonePriceAddPriceTierActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceAddPriceTierAction $value
     * @psalm-param StandalonePriceAddPriceTierAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceAddPriceTierActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceAddPriceTierAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceAddPriceTierAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceAddPriceTierAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceAddPriceTierAction $data */
                $data = StandalonePriceAddPriceTierActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
