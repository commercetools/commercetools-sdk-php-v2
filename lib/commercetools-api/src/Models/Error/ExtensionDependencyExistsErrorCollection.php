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
 * @extends ErrorObjectCollection<ExtensionDependencyExistsError>
 * @method ExtensionDependencyExistsError current()
 * @method ExtensionDependencyExistsError end()
 * @method ExtensionDependencyExistsError at($offset)
 */
class ExtensionDependencyExistsErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExtensionDependencyExistsError $value
     * @psalm-param ExtensionDependencyExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionDependencyExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionDependencyExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionDependencyExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionDependencyExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionDependencyExistsError $data */
                $data = ExtensionDependencyExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
