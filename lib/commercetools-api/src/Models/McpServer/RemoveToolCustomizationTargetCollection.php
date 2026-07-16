<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveToolCustomizationTarget>
 * @method RemoveToolCustomizationTarget current()
 * @method RemoveToolCustomizationTarget end()
 * @method RemoveToolCustomizationTarget at($offset)
 */
class RemoveToolCustomizationTargetCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveToolCustomizationTarget $value
     * @psalm-param RemoveToolCustomizationTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveToolCustomizationTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveToolCustomizationTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveToolCustomizationTarget
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveToolCustomizationTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveToolCustomizationTarget $data */
                $data = RemoveToolCustomizationTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
