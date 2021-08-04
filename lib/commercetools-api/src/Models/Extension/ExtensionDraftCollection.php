<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionDraft>
 * @method ExtensionDraft current()
 * @method ExtensionDraft at($offset)
 */
class ExtensionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionDraft $value
     * @psalm-param ExtensionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionDraft $data */
                $data = ExtensionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
