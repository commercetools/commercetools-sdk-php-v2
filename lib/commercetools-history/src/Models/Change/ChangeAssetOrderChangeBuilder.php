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
use Commercetools\History\Models\Common\LocalizedStringCollection;

/**
 * @implements Builder<ChangeAssetOrderChange>
 */
final class ChangeAssetOrderChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?LocalizedStringCollection
     */
    private $previousValue;

    /**

     * @var ?LocalizedStringCollection
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|LocalizedStringCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|LocalizedStringCollection
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
     * @param ?LocalizedStringCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedStringCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?LocalizedStringCollection $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedStringCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): ChangeAssetOrderChange
    {
        return new ChangeAssetOrderChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeAssetOrderChangeBuilder
    {
        return new self();
    }
}
