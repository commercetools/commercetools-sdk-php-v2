<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelChangeValue>
 */
final class ParcelChangeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $createdAt;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Date and time (UTC) the Parcel was created.</p>
     *

     * @return null|string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $createdAt
     * @return $this
     */
    public function withCreatedAt(?string $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }


    public function build(): ParcelChangeValue
    {
        return new ParcelChangeValueModel(
            $this->id,
            $this->createdAt
        );
    }

    public static function of(): ParcelChangeValueBuilder
    {
        return new self();
    }
}
