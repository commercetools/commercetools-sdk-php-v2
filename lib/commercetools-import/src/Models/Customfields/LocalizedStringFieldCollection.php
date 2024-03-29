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
 * @extends CustomFieldCollection<LocalizedStringField>
 * @method LocalizedStringField current()
 * @method LocalizedStringField end()
 * @method LocalizedStringField at($offset)
 */
class LocalizedStringFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert LocalizedStringField $value
     * @psalm-param LocalizedStringField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedStringFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedStringField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedStringField
     */
    protected function mapper()
    {
        return function (?int $index): ?LocalizedStringField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizedStringField $data */
                $data = LocalizedStringFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
