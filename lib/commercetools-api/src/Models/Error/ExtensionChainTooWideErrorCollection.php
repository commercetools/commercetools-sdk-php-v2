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
 * @extends ErrorObjectCollection<ExtensionChainTooWideError>
 * @method ExtensionChainTooWideError current()
 * @method ExtensionChainTooWideError end()
 * @method ExtensionChainTooWideError at($offset)
 */
class ExtensionChainTooWideErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExtensionChainTooWideError $value
     * @psalm-param ExtensionChainTooWideError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionChainTooWideErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionChainTooWideError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionChainTooWideError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionChainTooWideError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionChainTooWideError $data */
                $data = ExtensionChainTooWideErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
