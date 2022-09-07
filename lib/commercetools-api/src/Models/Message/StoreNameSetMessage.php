<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreNameSetMessage extends Message
{
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_ALL_LOCALES = 'nameAllLocales';

    /**
     * <p>Name of the <a href="ctp:api:type:Store">Store</a> set during the <a href="ctp:api:type:StoreSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Names set for the <a href="ctp:api:type:Store">Store</a> in different locales.</p>
     *

     * @return null|LocalizedStringCollection
     */
    public function getNameAllLocales();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedStringCollection $nameAllLocales
     */
    public function setNameAllLocales(?LocalizedStringCollection $nameAllLocales): void;
}
