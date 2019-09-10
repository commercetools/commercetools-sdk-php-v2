<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProjectUpdateAction>
 * @method ProjectUpdateAction current()
 * @method ProjectUpdateAction at($offset)
 */
class ProjectUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectUpdateAction $value
     * @psalm-param ProjectUpdateAction|stdClass $value
     * @return ProjectUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProjectUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProjectUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}