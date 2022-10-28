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
 * @extends MapperSequence<BusinessUnitConfiguration>
 * @method BusinessUnitConfiguration current()
 * @method BusinessUnitConfiguration end()
 * @method BusinessUnitConfiguration at($offset)
 */
class BusinessUnitConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitConfiguration $value
     * @psalm-param BusinessUnitConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitConfiguration
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitConfiguration $data */
                $data = BusinessUnitConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
