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
 * @extends MapperSequence<ProjectUpdate>
 * @method ProjectUpdate current()
 * @method ProjectUpdate at($offset)
 */
class ProjectUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectUpdate $value
     * @psalm-param ProjectUpdate|stdClass $value
     * @return ProjectUpdateCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProjectUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectUpdate
     */
    protected function mapper()
    {
        return function(int $index): ?ProjectUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectUpdateModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}