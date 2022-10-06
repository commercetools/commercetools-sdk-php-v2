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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitAddAssociateAction>
 * @method BusinessUnitAddAssociateAction current()
 * @method BusinessUnitAddAssociateAction end()
 * @method BusinessUnitAddAssociateAction at($offset)
 */
class BusinessUnitAddAssociateActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitAddAssociateAction $value
     * @psalm-param BusinessUnitAddAssociateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddAssociateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddAssociateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddAssociateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddAssociateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddAssociateAction $data */
                $data = BusinessUnitAddAssociateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
