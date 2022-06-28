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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetCustomFieldAction>
 * @method StandalonePriceSetCustomFieldAction current()
 * @method StandalonePriceSetCustomFieldAction end()
 * @method StandalonePriceSetCustomFieldAction at($offset)
 */
class StandalonePriceSetCustomFieldActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetCustomFieldAction $value
     * @psalm-param StandalonePriceSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetCustomFieldAction $data */
                $data = StandalonePriceSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
