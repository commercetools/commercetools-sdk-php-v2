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
 * @implements Builder<RemoveStateRolesChange>
 */
final class RemoveStateRolesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?array
     */
    private $previousValue;

    /**

     * @var ?array
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

     * @return null|array
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**

     * @return null|array
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
     * @param ?array $previousValue
     * @return $this
     */
    public function withPreviousValue(?array $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?array $nextValue
     * @return $this
     */
    public function withNextValue(?array $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): RemoveStateRolesChange
    {
        return new RemoveStateRolesChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): RemoveStateRolesChangeBuilder
    {
        return new self();
    }
}
