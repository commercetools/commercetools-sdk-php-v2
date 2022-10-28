<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\LocalizedStringCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreNameSetMessagePayload>
 */
final class StoreNameSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?LocalizedStringCollection
     */
    private $nameAllLocales;

    /**
     * <p>Name of the <a href="ctp:api:type:Store">Store</a> set during the <a href="ctp:api:type:StoreSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Names set for the <a href="ctp:api:type:Store">Store</a> in different locales.</p>
     *

     * @return null|LocalizedStringCollection
     */
    public function getNameAllLocales()
    {
        return $this->nameAllLocales;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedStringCollection $nameAllLocales
     * @return $this
     */
    public function withNameAllLocales(?LocalizedStringCollection $nameAllLocales)
    {
        $this->nameAllLocales = $nameAllLocales;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): StoreNameSetMessagePayload
    {
        return new StoreNameSetMessagePayloadModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->nameAllLocales
        );
    }

    public static function of(): StoreNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
