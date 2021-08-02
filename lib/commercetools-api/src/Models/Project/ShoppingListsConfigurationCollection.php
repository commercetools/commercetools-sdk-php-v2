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
 * @extends MapperSequence<ShoppingListsConfiguration>
 * @method ShoppingListsConfiguration current()
 * @method ShoppingListsConfiguration at($offset)
 */
class ShoppingListsConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListsConfiguration $value
     * @psalm-param ShoppingListsConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListsConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListsConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListsConfiguration
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListsConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListsConfiguration $data */
                $data = ShoppingListsConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
