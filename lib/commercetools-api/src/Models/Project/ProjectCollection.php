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
 * @extends MapperSequence<Project>
 *
 * @method Project current()
 * @method Project at($offset)
 */
class ProjectCollection extends MapperSequence
{
    /**
     * @psalm-assert Project $value
     * @psalm-param Project|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProjectCollection
     */
    public function add($value)
    {
        if (!$value instanceof Project) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Project
     */
    protected function mapper()
    {
        return function (int $index): ?Project {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
