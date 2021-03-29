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
use Commercetools\History\Models\Common\ImageCollection;

/**
 * @internal
 */
final class RemoveImageChangeModel extends JsonObjectModel implements RemoveImageChange
{
    public const DISCRIMINATOR_VALUE = 'RemoveImageChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?string
     */
    protected $catalogData;

    /**
     * @var ?ImageCollection
     */
    protected $previousValue;

    /**
     * @var ?ImageCollection
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $catalogData = null,
        ?ImageCollection $previousValue = null,
        ?ImageCollection $nextValue = null
    ) {
        $this->change = $change;
        $this->catalogData = $catalogData;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update actions for removing images</p>
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
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCatalogData()
    {
        if (is_null($this->catalogData)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CATALOG_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->catalogData =  (string) $data;
        }

        return $this->catalogData;
    }

    /**
     * @return null|ImageCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  ImageCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     * @return null|ImageCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  ImageCollection::fromArray($data);
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
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void
    {
        $this->catalogData = $catalogData;
    }

    /**
     * @param ?ImageCollection $previousValue
     */
    public function setPreviousValue(?ImageCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ImageCollection $nextValue
     */
    public function setNextValue(?ImageCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
