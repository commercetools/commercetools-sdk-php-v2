<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RemoveImageAction>
 */
final class RemoveImageActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $catalogData;

    /**
     * @var ?ImageCollection
     */
    private $previousValue;

    /**
     * @var ?ImageCollection
     */
    private $nextValue;

    /**
     * <p>Update actions for removing images</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * @return null|ImageCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|ImageCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?ImageCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ImageCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ImageCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ImageCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): RemoveImageAction
    {
        return new RemoveImageActionModel(
            $this->change,
            $this->catalogData,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): RemoveImageActionBuilder
    {
        return new self();
    }
}
