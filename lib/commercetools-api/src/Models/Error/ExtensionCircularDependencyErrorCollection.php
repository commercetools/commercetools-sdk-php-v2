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
 * @extends ErrorObjectCollection<ExtensionCircularDependencyError>
 * @method ExtensionCircularDependencyError current()
 * @method ExtensionCircularDependencyError end()
 * @method ExtensionCircularDependencyError at($offset)
 */
class ExtensionCircularDependencyErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExtensionCircularDependencyError $value
     * @psalm-param ExtensionCircularDependencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionCircularDependencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionCircularDependencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionCircularDependencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionCircularDependencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionCircularDependencyError $data */
                $data = ExtensionCircularDependencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
