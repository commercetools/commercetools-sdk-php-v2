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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetPriceTiersAction>
 * @method StandalonePriceSetPriceTiersAction current()
 * @method StandalonePriceSetPriceTiersAction end()
 * @method StandalonePriceSetPriceTiersAction at($offset)
 */
class StandalonePriceSetPriceTiersActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetPriceTiersAction $value
     * @psalm-param StandalonePriceSetPriceTiersAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetPriceTiersActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetPriceTiersAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetPriceTiersAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetPriceTiersAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetPriceTiersAction $data */
                $data = StandalonePriceSetPriceTiersActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
