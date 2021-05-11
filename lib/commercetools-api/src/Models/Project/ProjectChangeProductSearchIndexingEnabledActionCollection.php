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
 * @extends ProjectUpdateActionCollection<ProjectChangeProductSearchIndexingEnabledAction>
 * @method ProjectChangeProductSearchIndexingEnabledAction current()
 * @method ProjectChangeProductSearchIndexingEnabledAction at($offset)
 */
class ProjectChangeProductSearchIndexingEnabledActionCollection extends ProjectUpdateActionCollection
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
                /** @var ProjectChangeProductSearchIndexingEnabledAction $data */
                $data = ProjectChangeProductSearchIndexingEnabledActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
