<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ResourceIdentifier>
 * @method ResourceIdentifier current()
 * @method ResourceIdentifier end()
 * @method ResourceIdentifier at($offset)
 */
class ResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ResourceIdentifier $value
     * @psalm-param ResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceIdentifier $data */
                $data = ResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
