<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<RecurrencePolicyResourceIdentifier>
 * @method RecurrencePolicyResourceIdentifier current()
 * @method RecurrencePolicyResourceIdentifier end()
 * @method RecurrencePolicyResourceIdentifier at($offset)
 */
class RecurrencePolicyResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert RecurrencePolicyResourceIdentifier $value
     * @psalm-param RecurrencePolicyResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicyResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicyResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicyResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicyResourceIdentifier $data */
                $data = RecurrencePolicyResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
