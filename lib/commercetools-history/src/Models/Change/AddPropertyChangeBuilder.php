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
 * @implements Builder<AddPropertyChange>
 */
final class AddPropertyChangeBuilder implements Builder
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
    private $nextValue;

    /**
     * <p>Update action for <code>addProperty</code> on custom objects</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value path to the property that was added</p>
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
     * @param ?string $path
     * @return $this
     */
    public function withPath(?string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): AddPropertyChange
    {
        return new AddPropertyChangeModel(
            $this->change,
            $this->path,
            $this->nextValue
        );
    }

    public static function of(): AddPropertyChangeBuilder
    {
        return new self();
    }
}
