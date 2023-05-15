<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomFieldEnumValue>
 * @method CustomFieldEnumValue current()
 * @method CustomFieldEnumValue end()
 * @method CustomFieldEnumValue at($offset)
 */
class CustomFieldEnumValueCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldEnumValue $value
     * @psalm-param CustomFieldEnumValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldEnumValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldEnumValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldEnumValue
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldEnumValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldEnumValue $data */
                $data = CustomFieldEnumValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
