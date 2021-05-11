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
 * @extends ProjectUpdateActionCollection<ProjectSetExternalOAuthAction>
 * @method ProjectSetExternalOAuthAction current()
 * @method ProjectSetExternalOAuthAction at($offset)
 */
class ProjectSetExternalOAuthActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectSetExternalOAuthAction $value
     * @psalm-param ProjectSetExternalOAuthAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectSetExternalOAuthActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectSetExternalOAuthAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectSetExternalOAuthAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectSetExternalOAuthAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectSetExternalOAuthAction $data */
                $data = ProjectSetExternalOAuthActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
