<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ParcelChangeValue extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Date and time (UTC) the Parcel was created.</p>
     *

     * @return null|string
     */
    public function getCreatedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $createdAt
     */
    public function setCreatedAt(?string $createdAt): void;
}
