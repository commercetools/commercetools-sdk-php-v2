<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeStatusUpdateAction>
 * @method ChangeStatusUpdateAction current()
 * @method ChangeStatusUpdateAction at($offset)
 */
class ChangeStatusUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeStatusUpdateAction $value
     * @psalm-param ChangeStatusUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStatusUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStatusUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStatusUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeStatusUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeStatusUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
