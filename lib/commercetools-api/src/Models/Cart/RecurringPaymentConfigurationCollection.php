<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecurringPaymentConfiguration>
 * @method RecurringPaymentConfiguration current()
 * @method RecurringPaymentConfiguration end()
 * @method RecurringPaymentConfiguration at($offset)
 */
class RecurringPaymentConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurringPaymentConfiguration $value
     * @psalm-param RecurringPaymentConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringPaymentConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringPaymentConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringPaymentConfiguration
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringPaymentConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringPaymentConfiguration $data */
                $data = RecurringPaymentConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
