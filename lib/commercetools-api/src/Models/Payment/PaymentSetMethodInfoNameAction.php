<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface PaymentSetMethodInfoNameAction extends PaymentUpdateAction
{

    public const FIELD_NAME = 'name';

    /**
     * <p>If not provided, the name is unset.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    public function setName(?LocalizedString $name): void;
}
