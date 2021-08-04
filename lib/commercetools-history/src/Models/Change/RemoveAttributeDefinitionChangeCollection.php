<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveAttributeDefinitionChange>
 * @method RemoveAttributeDefinitionChange current()
 * @method RemoveAttributeDefinitionChange end()
 * @method RemoveAttributeDefinitionChange at($offset)
 */
class RemoveAttributeDefinitionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveAttributeDefinitionChange $value
     * @psalm-param RemoveAttributeDefinitionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAttributeDefinitionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAttributeDefinitionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAttributeDefinitionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveAttributeDefinitionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveAttributeDefinitionChange $data */
                $data = RemoveAttributeDefinitionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
