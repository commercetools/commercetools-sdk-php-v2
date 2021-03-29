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
 * @extends MapperSequence<ProjectChangeCartsConfiguration>
 * @method ProjectChangeCartsConfiguration current()
 * @method ProjectChangeCartsConfiguration at($offset)
 */
class ProjectChangeCartsConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectChangeCartsConfiguration $value
     * @psalm-param ProjectChangeCartsConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeCartsConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeCartsConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeCartsConfiguration
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectChangeCartsConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectChangeCartsConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
