<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @extends KeyReferenceCollection<PaymentKeyReference>
 * @method PaymentKeyReference current()
 * @method PaymentKeyReference at($offset)
 */
class PaymentKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert PaymentKeyReference $value
     * @psalm-param PaymentKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentKeyReference $data */
                $data = PaymentKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
