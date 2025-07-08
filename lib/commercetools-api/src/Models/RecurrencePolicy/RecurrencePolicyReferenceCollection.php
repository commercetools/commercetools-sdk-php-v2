<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<RecurrencePolicyReference>
 * @method RecurrencePolicyReference current()
 * @method RecurrencePolicyReference end()
 * @method RecurrencePolicyReference at($offset)
 */
class RecurrencePolicyReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert RecurrencePolicyReference $value
     * @psalm-param RecurrencePolicyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicyReference $data */
                $data = RecurrencePolicyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
