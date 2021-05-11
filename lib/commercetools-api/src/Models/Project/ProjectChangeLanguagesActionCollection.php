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
 * @extends ProjectUpdateActionCollection<ProjectChangeLanguagesAction>
 * @method ProjectChangeLanguagesAction current()
 * @method ProjectChangeLanguagesAction at($offset)
 */
class ProjectChangeLanguagesActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeLanguagesAction $value
     * @psalm-param ProjectChangeLanguagesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeLanguagesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeLanguagesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeLanguagesAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectChangeLanguagesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeLanguagesAction $data */
                $data = ProjectChangeLanguagesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
