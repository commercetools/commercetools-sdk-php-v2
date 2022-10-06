<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyBusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitRemoveAssociateAction>
 * @method MyBusinessUnitRemoveAssociateAction current()
 * @method MyBusinessUnitRemoveAssociateAction end()
 * @method MyBusinessUnitRemoveAssociateAction at($offset)
 */
class MyBusinessUnitRemoveAssociateActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitRemoveAssociateAction $value
     * @psalm-param MyBusinessUnitRemoveAssociateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitRemoveAssociateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitRemoveAssociateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitRemoveAssociateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitRemoveAssociateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitRemoveAssociateAction $data */
                $data = MyBusinessUnitRemoveAssociateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
