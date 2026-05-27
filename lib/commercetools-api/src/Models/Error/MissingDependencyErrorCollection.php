<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<MissingDependencyError>
 * @method MissingDependencyError current()
 * @method MissingDependencyError end()
 * @method MissingDependencyError at($offset)
 */
class MissingDependencyErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MissingDependencyError $value
     * @psalm-param MissingDependencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingDependencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingDependencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingDependencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingDependencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingDependencyError $data */
                $data = MissingDependencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
