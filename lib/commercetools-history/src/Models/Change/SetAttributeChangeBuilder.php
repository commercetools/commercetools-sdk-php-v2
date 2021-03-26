<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetAttributeChange>
 */
final class SetAttributeChangeBuilder implements Builder
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
     * @var ?JsonObject
     */
    private $previousValue;

    /**
     * @var ?JsonObject
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setAttribute</code></p>
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
     * @return null|JsonObject
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|JsonObject
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
     * @param ?JsonObject $previousValue
     * @return $this
     */
    public function withPreviousValue(?JsonObject $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?JsonObject $nextValue
     * @return $this
     */
    public function withNextValue(?JsonObject $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetAttributeChange
    {
        return new SetAttributeChangeModel(
            $this->change,
            $this->catalogData,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetAttributeChangeBuilder
    {
        return new self();
    }
}
