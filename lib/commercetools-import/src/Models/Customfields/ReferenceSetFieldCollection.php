<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Customfields\CustomFieldCollection;
use stdClass;

/**
 * @extends CustomFieldCollection<ReferenceSetField>
 * @method ReferenceSetField current()
 * @method ReferenceSetField at($offset)
 */
class ReferenceSetFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert ReferenceSetField $value
     * @psalm-param ReferenceSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferenceSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceSetField
     */
    protected function mapper()
    {
        return function (?int $index): ?ReferenceSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReferenceSetField $data */
                $data = ReferenceSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
