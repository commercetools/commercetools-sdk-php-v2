<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of McpServerConfigDraft
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method McpServerConfigDraft current()
 * @method McpServerConfigDraft end()
 * @method McpServerConfigDraft at($offset)
 */
class McpServerConfigDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerConfigDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerConfigDraft) {
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
        return function (?int $index): ?McpServerConfigDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = McpServerConfigDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
