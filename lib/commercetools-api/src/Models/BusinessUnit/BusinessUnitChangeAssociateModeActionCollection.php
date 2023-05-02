<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitChangeAssociateModeAction>
 * @method BusinessUnitChangeAssociateModeAction current()
 * @method BusinessUnitChangeAssociateModeAction end()
 * @method BusinessUnitChangeAssociateModeAction at($offset)
 */
class BusinessUnitChangeAssociateModeActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitChangeAssociateModeAction $value
     * @psalm-param BusinessUnitChangeAssociateModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitChangeAssociateModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitChangeAssociateModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitChangeAssociateModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitChangeAssociateModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitChangeAssociateModeAction $data */
                $data = BusinessUnitChangeAssociateModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
