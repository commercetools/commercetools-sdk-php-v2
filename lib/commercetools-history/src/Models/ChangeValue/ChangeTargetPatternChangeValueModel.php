<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\CartDiscount\PatternComponentCollection;

/**
 * @internal
 */
final class ChangeTargetPatternChangeValueModel extends JsonObjectModel implements ChangeTargetPatternChangeValue
{

    public const DISCRIMINATOR_VALUE = 'pattern';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?PatternComponentCollection
     */
    protected $triggerPattern;

    /**
     *
     * @var ?PatternComponentCollection
     */
    protected $targetPattern;

    /**
     *
     * @var ?int
     */
    protected $maxOccurrence;

    /**
     *
     * @var ?string
     */
    protected $selectionMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PatternComponentCollection $triggerPattern = null,
        ?PatternComponentCollection $targetPattern = null,
        ?int $maxOccurrence = null,
        ?string $selectionMode = null,
        ?string $type = null
    ) {
        $this->triggerPattern = $triggerPattern;
        $this->targetPattern = $targetPattern;
        $this->maxOccurrence = $maxOccurrence;
        $this->selectionMode = $selectionMode;
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
     * <p>Defines the set of units of (Custom) Line Items in a Cart that triggered the discount application.</p>
     *
     *
     * @return null|PatternComponentCollection
     */
    public function getTriggerPattern()
    {
        if (is_null($this->triggerPattern)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TRIGGER_PATTERN);
            if (is_null($data)) {
                return null;
            }
            $this->triggerPattern = PatternComponentCollection::fromArray($data);
        }

        return $this->triggerPattern;
    }

    /**
     * <p>Defines the set of units of (Custom) Line Items in a Cart on which the Discount is applied.</p>
     *
     *
     * @return null|PatternComponentCollection
     */
    public function getTargetPattern()
    {
        if (is_null($this->targetPattern)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TARGET_PATTERN);
            if (is_null($data)) {
                return null;
            }
            $this->targetPattern = PatternComponentCollection::fromArray($data);
        }

        return $this->targetPattern;
    }

    /**
     * <p>Maximum number of times the Discount applies on a Cart.</p>
     * <p>If empty, the Discount applies indefinitely.</p>
     *
     *
     * @return null|int
     */
    public function getMaxOccurrence()
    {
        if (is_null($this->maxOccurrence)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MAX_OCCURRENCE);
            if (is_null($data)) {
                return null;
            }
            $this->maxOccurrence = (int) $data;
        }

        return $this->maxOccurrence;
    }

    /**
     * <p>Indicates which of the matching units of (Custom) Line Items were discounted.</p>
     *
     *
     * @return null|string
     */
    public function getSelectionMode()
    {
        if (is_null($this->selectionMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SELECTION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->selectionMode = (string) $data;
        }

        return $this->selectionMode;
    }


    /**
     * @param ?PatternComponentCollection $triggerPattern
     */
    public function setTriggerPattern(?PatternComponentCollection $triggerPattern): void
    {
        $this->triggerPattern = $triggerPattern;
    }

    /**
     * @param ?PatternComponentCollection $targetPattern
     */
    public function setTargetPattern(?PatternComponentCollection $targetPattern): void
    {
        $this->targetPattern = $targetPattern;
    }

    /**
     * @param ?int $maxOccurrence
     */
    public function setMaxOccurrence(?int $maxOccurrence): void
    {
        $this->maxOccurrence = $maxOccurrence;
    }

    /**
     * @param ?string $selectionMode
     */
    public function setSelectionMode(?string $selectionMode): void
    {
        $this->selectionMode = $selectionMode;
    }



}
