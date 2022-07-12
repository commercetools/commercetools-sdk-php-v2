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
 * @implements Builder<RemovePropertyChange>
 */
final class RemovePropertyChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $path;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeProperty</code> on custom objects</p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value path to the property that was removed</p>
     *

     * @return null|string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**

     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?string $path
     * @return $this
     */
    public function withPath(?string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue( $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): RemovePropertyChange
    {
        return new RemovePropertyChangeModel(
            $this->change,
            $this->path,
            $this->previousValue
        );
    }

    public static function of(): RemovePropertyChangeBuilder
    {
        return new self();
    }
}
