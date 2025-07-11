<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface KeyReference extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'typeId';
    public const FIELD_KEY = 'key';
    public const FIELD_TYPE_ID = 'typeId';

    /**
     * <p>User-defined unique identifier of the referenced resource.
     * If the referenced resource does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced resource is created.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Type of referenced resource.</p>
     *

     * @return null|string
     */
    public function getTypeId();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
