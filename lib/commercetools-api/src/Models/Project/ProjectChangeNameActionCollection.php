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
 * @extends MapperSequence<ProjectChangeNameAction>
 *
 * @method ProjectChangeNameAction current()
 * @method ProjectChangeNameAction at($offset)
 */
class ProjectChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectChangeNameAction $value
     * @psalm-param ProjectChangeNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
