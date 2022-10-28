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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceApplyStagedChangesAction>
 * @method StandalonePriceApplyStagedChangesAction current()
 * @method StandalonePriceApplyStagedChangesAction end()
 * @method StandalonePriceApplyStagedChangesAction at($offset)
 */
class StandalonePriceApplyStagedChangesActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceApplyStagedChangesAction $value
     * @psalm-param StandalonePriceApplyStagedChangesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceApplyStagedChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceApplyStagedChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceApplyStagedChangesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceApplyStagedChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceApplyStagedChangesAction $data */
                $data = StandalonePriceApplyStagedChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
