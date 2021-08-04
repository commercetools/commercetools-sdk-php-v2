<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetCountryAction>
 * @method StagedOrderSetCountryAction current()
 * @method StagedOrderSetCountryAction at($offset)
 */
class StagedOrderSetCountryActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetCountryAction $value
     * @psalm-param StagedOrderSetCountryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCountryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCountryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCountryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetCountryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetCountryAction $data */
                $data = StagedOrderSetCountryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
