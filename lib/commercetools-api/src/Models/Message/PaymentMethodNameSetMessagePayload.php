<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodNameSetMessagePayload extends MessagePayload
{
    public const FIELD_NAME = 'name';
    public const FIELD_OLD_NAME = 'oldName';

    /**
     * <p>Name of the Payment Method after the <a href="ctp:api:type:PaymentMethodSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Name of the Payment Method before the <a href="ctp:api:type:PaymentMethodSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getOldName();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $oldName
     */
    public function setOldName(?LocalizedString $oldName): void;
}
