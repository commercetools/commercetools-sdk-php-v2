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
 * @extends MapperSequence<InventoryConfiguration>
 * @method InventoryConfiguration current()
 * @method InventoryConfiguration end()
 * @method InventoryConfiguration at($offset)
 */
class InventoryConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryConfiguration $value
     * @psalm-param InventoryConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryConfiguration
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryConfiguration $data */
                $data = InventoryConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
