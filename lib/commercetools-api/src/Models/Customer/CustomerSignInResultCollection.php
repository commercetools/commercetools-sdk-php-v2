<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerSignInResult>
 * @method CustomerSignInResult current()
 * @method CustomerSignInResult at($offset)
 */
class CustomerSignInResultCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSignInResult $value
     * @psalm-param CustomerSignInResult|stdClass $value
     * @return CustomerSignInResultCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSignInResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSignInResult
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerSignInResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSignInResultModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}