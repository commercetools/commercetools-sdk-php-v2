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
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceRemoveStagedChangesAction>
 * @method StandalonePriceRemoveStagedChangesAction current()
 * @method StandalonePriceRemoveStagedChangesAction end()
 * @method StandalonePriceRemoveStagedChangesAction at($offset)
 */
class StandalonePriceRemoveStagedChangesActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceRemoveStagedChangesAction $value
     * @psalm-param StandalonePriceRemoveStagedChangesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceRemoveStagedChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceRemoveStagedChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceRemoveStagedChangesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceRemoveStagedChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceRemoveStagedChangesAction $data */
                $data = StandalonePriceRemoveStagedChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
