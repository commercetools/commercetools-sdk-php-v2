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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceRemovePriceTierAction>
 * @method StandalonePriceRemovePriceTierAction current()
 * @method StandalonePriceRemovePriceTierAction end()
 * @method StandalonePriceRemovePriceTierAction at($offset)
 */
class StandalonePriceRemovePriceTierActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceRemovePriceTierAction $value
     * @psalm-param StandalonePriceRemovePriceTierAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceRemovePriceTierActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceRemovePriceTierAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceRemovePriceTierAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceRemovePriceTierAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceRemovePriceTierAction $data */
                $data = StandalonePriceRemovePriceTierActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
