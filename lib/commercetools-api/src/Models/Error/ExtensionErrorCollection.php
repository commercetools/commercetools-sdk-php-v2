<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionError>
 * @method ExtensionError current()
 * @method ExtensionError end()
 * @method ExtensionError at($offset)
 */
class ExtensionErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionError $value
     * @psalm-param ExtensionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionError $data */
                $data = ExtensionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
