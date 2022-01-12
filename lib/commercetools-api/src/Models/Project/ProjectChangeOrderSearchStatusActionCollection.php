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
 * @extends ProjectUpdateActionCollection<ProjectChangeOrderSearchStatusAction>
 * @method ProjectChangeOrderSearchStatusAction current()
 * @method ProjectChangeOrderSearchStatusAction end()
 * @method ProjectChangeOrderSearchStatusAction at($offset)
 */
class ProjectChangeOrderSearchStatusActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeOrderSearchStatusAction $value
     * @psalm-param ProjectChangeOrderSearchStatusAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeOrderSearchStatusActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeOrderSearchStatusAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeOrderSearchStatusAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeOrderSearchStatusAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeOrderSearchStatusAction $data */
                $data = ProjectChangeOrderSearchStatusActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
