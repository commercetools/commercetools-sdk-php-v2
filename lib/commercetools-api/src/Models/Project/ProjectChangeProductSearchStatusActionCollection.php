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
 * @extends ProjectUpdateActionCollection<ProjectChangeProductSearchStatusAction>
 * @method ProjectChangeProductSearchStatusAction current()
 * @method ProjectChangeProductSearchStatusAction end()
 * @method ProjectChangeProductSearchStatusAction at($offset)
 */
class ProjectChangeProductSearchStatusActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeProductSearchStatusAction $value
     * @psalm-param ProjectChangeProductSearchStatusAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeProductSearchStatusActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeProductSearchStatusAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeProductSearchStatusAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeProductSearchStatusAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeProductSearchStatusAction $data */
                $data = ProjectChangeProductSearchStatusActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
