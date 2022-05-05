<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AddressDraft extends BaseAddress
{
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Custom Fields defined for the Address.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Unique identifier for the Address. Not recommended to set it manually since the Platform overwrites this ID when creating an Address for a <a href="ctp:api:type:Customer">Customer</a>. Use <code>key</code> instead and omit this field to let the Platform generate the ID for the Address.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier for the Address.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
