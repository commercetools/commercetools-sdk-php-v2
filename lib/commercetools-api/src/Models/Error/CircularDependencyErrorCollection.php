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
 * @extends ErrorObjectCollection<CircularDependencyError>
 * @method CircularDependencyError current()
 * @method CircularDependencyError end()
 * @method CircularDependencyError at($offset)
 */
class CircularDependencyErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert CircularDependencyError $value
     * @psalm-param CircularDependencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CircularDependencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof CircularDependencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CircularDependencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?CircularDependencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CircularDependencyError $data */
                $data = CircularDependencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
