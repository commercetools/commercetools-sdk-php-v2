<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProjectSetShippingRateInputTypeAction>
 *
 * @method ProjectSetShippingRateInputTypeAction current()
 * @method ProjectSetShippingRateInputTypeAction at($offset)
 */
class ProjectSetShippingRateInputTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectSetShippingRateInputTypeAction $value
     * @psalm-param ProjectSetShippingRateInputTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProjectSetShippingRateInputTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectSetShippingRateInputTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectSetShippingRateInputTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectSetShippingRateInputTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectSetShippingRateInputTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
