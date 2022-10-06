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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitRemoveAssociateAction>
 * @method BusinessUnitRemoveAssociateAction current()
 * @method BusinessUnitRemoveAssociateAction end()
 * @method BusinessUnitRemoveAssociateAction at($offset)
 */
class BusinessUnitRemoveAssociateActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitRemoveAssociateAction $value
     * @psalm-param BusinessUnitRemoveAssociateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitRemoveAssociateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitRemoveAssociateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitRemoveAssociateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitRemoveAssociateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitRemoveAssociateAction $data */
                $data = BusinessUnitRemoveAssociateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
