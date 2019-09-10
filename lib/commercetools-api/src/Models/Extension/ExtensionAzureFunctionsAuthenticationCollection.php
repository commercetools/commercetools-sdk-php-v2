<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionAzureFunctionsAuthentication>
 * @method ExtensionAzureFunctionsAuthentication current()
 * @method ExtensionAzureFunctionsAuthentication at($offset)
 */
class ExtensionAzureFunctionsAuthenticationCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionAzureFunctionsAuthentication $value
     * @psalm-param ExtensionAzureFunctionsAuthentication|stdClass $value
     * @return ExtensionAzureFunctionsAuthenticationCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionAzureFunctionsAuthentication) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionAzureFunctionsAuthentication
     */
    protected function mapper()
    {
        return function(int $index): ?ExtensionAzureFunctionsAuthentication {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionAzureFunctionsAuthenticationModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}