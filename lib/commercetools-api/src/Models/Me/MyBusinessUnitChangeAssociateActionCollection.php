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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitChangeAssociateAction>
 * @method MyBusinessUnitChangeAssociateAction current()
 * @method MyBusinessUnitChangeAssociateAction end()
 * @method MyBusinessUnitChangeAssociateAction at($offset)
 */
class MyBusinessUnitChangeAssociateActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitChangeAssociateAction $value
     * @psalm-param MyBusinessUnitChangeAssociateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitChangeAssociateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitChangeAssociateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitChangeAssociateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitChangeAssociateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitChangeAssociateAction $data */
                $data = MyBusinessUnitChangeAssociateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
