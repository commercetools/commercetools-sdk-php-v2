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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitChangeAssociateAction>
 * @method BusinessUnitChangeAssociateAction current()
 * @method BusinessUnitChangeAssociateAction end()
 * @method BusinessUnitChangeAssociateAction at($offset)
 */
class BusinessUnitChangeAssociateActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitChangeAssociateAction $value
     * @psalm-param BusinessUnitChangeAssociateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitChangeAssociateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitChangeAssociateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitChangeAssociateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitChangeAssociateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitChangeAssociateAction $data */
                $data = BusinessUnitChangeAssociateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
