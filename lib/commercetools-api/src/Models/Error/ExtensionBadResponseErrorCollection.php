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
 * @extends MapperSequence<ExtensionBadResponseError>
 * @method ExtensionBadResponseError current()
 * @method ExtensionBadResponseError at($offset)
 */
class ExtensionBadResponseErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionBadResponseError $value
     * @psalm-param ExtensionBadResponseError|stdClass $value
     * @return ExtensionBadResponseErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionBadResponseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionBadResponseError
     */
    protected function mapper()
    {
        return function(int $index): ?ExtensionBadResponseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionBadResponseErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}