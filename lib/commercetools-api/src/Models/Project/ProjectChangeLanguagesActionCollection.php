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
 * @extends MapperSequence<ProjectChangeLanguagesAction>
 * @method ProjectChangeLanguagesAction current()
 * @method ProjectChangeLanguagesAction at($offset)
 */
class ProjectChangeLanguagesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectChangeLanguagesAction $value
     * @psalm-param ProjectChangeLanguagesAction|stdClass $value
     * @return ProjectChangeLanguagesActionCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?ProjectChangeLanguagesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectChangeLanguagesActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}