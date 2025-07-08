<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandardScheduleDraftModel extends JsonObjectModel implements StandardScheduleDraft
{
    public const DISCRIMINATOR_VALUE = 'standard';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $value;

    /**
     *
     * @var ?string
     */
    protected $intervalUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $value = null,
        ?string $intervalUnit = null,
        ?string $type = null
    ) {
        $this->value = $value;
        $this->intervalUnit = $intervalUnit;
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
     * <p>Number of intervals between orders.</p>
     *
     *
     * @return null|int
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (int) $data;
        }

        return $this->value;
    }

    /**
     * <p>Interval for this schedule.</p>
     *
     *
     * @return null|string
     */
    public function getIntervalUnit()
    {
        if (is_null($this->intervalUnit)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERVAL_UNIT);
            if (is_null($data)) {
                return null;
            }
            $this->intervalUnit = (string) $data;
        }

        return $this->intervalUnit;
    }


    /**
     * @param ?int $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?string $intervalUnit
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }
}
