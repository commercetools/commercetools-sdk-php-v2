<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyPaymentUpdate extends JsonObject
{

    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|MyPaymentUpdateActionCollection
     */
    public function getActions();

    public function setVersion(?int $version): void;

    public function setActions(?MyPaymentUpdateActionCollection $actions): void;
}
