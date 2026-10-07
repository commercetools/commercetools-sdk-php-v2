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
 * @extends MapperSequence<RecurringPaymentConfigurationDraft>
 * @method RecurringPaymentConfigurationDraft current()
 * @method RecurringPaymentConfigurationDraft end()
 * @method RecurringPaymentConfigurationDraft at($offset)
 */
class RecurringPaymentConfigurationDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurringPaymentConfigurationDraft $value
     * @psalm-param RecurringPaymentConfigurationDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringPaymentConfigurationDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringPaymentConfigurationDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringPaymentConfigurationDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringPaymentConfigurationDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringPaymentConfigurationDraft $data */
                $data = RecurringPaymentConfigurationDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
