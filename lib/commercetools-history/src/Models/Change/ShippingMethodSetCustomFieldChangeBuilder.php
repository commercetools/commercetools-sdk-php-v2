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
 * @implements Builder<ShippingMethodSetCustomFieldChange>
 */
final class ShippingMethodSetCustomFieldChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $customTypeId;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**

     * @var null|mixed|mixed
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
     * <p>Name of the <a href="ctp:api:type:CustomFields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|string
     */
    public function getCustomTypeId()
    {
        return $this->customTypeId;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

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
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $customTypeId
     * @return $this
     */
    public function withCustomTypeId(?string $customTypeId)
    {
        $this->customTypeId = $customTypeId;

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

    /**
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): ShippingMethodSetCustomFieldChange
    {
        return new ShippingMethodSetCustomFieldChangeModel(
            $this->change,
            $this->name,
            $this->customTypeId,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ShippingMethodSetCustomFieldChangeBuilder
    {
        return new self();
    }
}
