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
 * @extends ProjectUpdateActionCollection<ProjectChangeCustomerSearchStatusAction>
 * @method ProjectChangeCustomerSearchStatusAction current()
 * @method ProjectChangeCustomerSearchStatusAction end()
 * @method ProjectChangeCustomerSearchStatusAction at($offset)
 */
class ProjectChangeCustomerSearchStatusActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeCustomerSearchStatusAction $value
     * @psalm-param ProjectChangeCustomerSearchStatusAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeCustomerSearchStatusActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeCustomerSearchStatusAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeCustomerSearchStatusAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeCustomerSearchStatusAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeCustomerSearchStatusAction $data */
                $data = ProjectChangeCustomerSearchStatusActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
