<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CounterDraftModel extends JsonObjectModel implements CounterDraft
{
    public const DISCRIMINATOR_VALUE = 'Counter';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $totalToSkip;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $totalToSkip = null,
        ?string $type = null
    ) {
        $this->totalToSkip = $totalToSkip;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Number of Orders that will be skipped.</p>
     *
     *
     * @return null|int
     */
    public function getTotalToSkip()
    {
        if (is_null($this->totalToSkip)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL_TO_SKIP);
            if (is_null($data)) {
                return null;
            }
            $this->totalToSkip = (int) $data;
        }

        return $this->totalToSkip;
    }


    /**
     * @param ?int $totalToSkip
     */
    public function setTotalToSkip(?int $totalToSkip): void
    {
        $this->totalToSkip = $totalToSkip;
    }
}
