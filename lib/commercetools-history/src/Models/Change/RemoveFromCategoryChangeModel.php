<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceCollection;
use Commercetools\History\Models\Common\ReferenceModel;

/**
 * @internal
 */
final class RemoveFromCategoryChangeModel extends JsonObjectModel implements RemoveFromCategoryChange
{

    public const DISCRIMINATOR_VALUE = 'RemoveFromCategoryChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?Reference
     */
    protected $category;

    /**
     *
     * @var ?ReferenceCollection
     */
    protected $previousValue;

    /**
     *
     * @var ?ReferenceCollection
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?Reference $category = null,
        ?ReferenceCollection $previousValue = null,
        ?ReferenceCollection $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->category = $category;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
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
     * <p>Update action for <code>addToCategory</code></p>
     *
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     *
     * @return null|Reference
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->category = ReferenceModel::of($data);
        }

        return $this->category;
    }

    /**
     *
     * @return null|ReferenceCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = ReferenceCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     *
     * @return null|ReferenceCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = ReferenceCollection::fromArray($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?Reference $category
     */
    public function setCategory(?Reference $category): void
    {
        $this->category = $category;
    }

    /**
     * @param ?ReferenceCollection $previousValue
     */
    public function setPreviousValue(?ReferenceCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ReferenceCollection $nextValue
     */
    public function setNextValue(?ReferenceCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
