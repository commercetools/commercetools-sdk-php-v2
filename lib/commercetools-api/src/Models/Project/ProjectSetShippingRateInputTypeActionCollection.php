<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Project\ProjectUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProjectUpdateActionCollection<ProjectSetShippingRateInputTypeAction>
 * @method ProjectSetShippingRateInputTypeAction current()
 * @method ProjectSetShippingRateInputTypeAction at($offset)
 */
class ProjectSetShippingRateInputTypeActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectSetShippingRateInputTypeAction $value
     * @psalm-param ProjectSetShippingRateInputTypeAction|stdClass $value
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
        return function (?int $index): ?ProjectSetShippingRateInputTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectSetShippingRateInputTypeAction $data */
                $data = ProjectSetShippingRateInputTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
