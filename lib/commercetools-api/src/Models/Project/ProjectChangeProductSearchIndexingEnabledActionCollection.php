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
 * @extends MapperSequence<ProjectChangeProductSearchIndexingEnabledAction>
 * @method ProjectChangeProductSearchIndexingEnabledAction current()
 * @method ProjectChangeProductSearchIndexingEnabledAction at($offset)
 */
class ProjectChangeProductSearchIndexingEnabledActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectChangeProductSearchIndexingEnabledAction $value
     * @psalm-param ProjectChangeProductSearchIndexingEnabledAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeProductSearchIndexingEnabledActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeProductSearchIndexingEnabledAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeProductSearchIndexingEnabledAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectChangeProductSearchIndexingEnabledAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectChangeProductSearchIndexingEnabledActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
