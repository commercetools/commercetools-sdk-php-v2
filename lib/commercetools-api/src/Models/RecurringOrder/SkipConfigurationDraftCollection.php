<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of SkipConfigurationDraft
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method SkipConfigurationDraft current()
 * @method SkipConfigurationDraft end()
 * @method SkipConfigurationDraft at($offset)
 */
class SkipConfigurationDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SkipConfigurationDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof SkipConfigurationDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?SkipConfigurationDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = SkipConfigurationDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
