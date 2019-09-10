<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionNoResponseError>
 * @method ExtensionNoResponseError current()
 * @method ExtensionNoResponseError at($offset)
 */
class ExtensionNoResponseErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionNoResponseError $value
     * @psalm-param ExtensionNoResponseError|stdClass $value
     * @return ExtensionNoResponseErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionNoResponseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionNoResponseError
     */
    protected function mapper()
    {
        return function(int $index): ?ExtensionNoResponseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionNoResponseErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}