<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyBusinessUnitSetContactEmailAction>
 */
final class MyBusinessUnitSetContactEmailActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $contactEmail;

    /**
     * <p>Email to set.
     * If <code>contactEmail</code> is absent or <code>null</code>, the existing contact email, if any, will be removed.</p>
     *

     * @return null|string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param ?string $contactEmail
     * @return $this
     */
    public function withContactEmail(?string $contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }


    public function build(): MyBusinessUnitSetContactEmailAction
    {
        return new MyBusinessUnitSetContactEmailActionModel(
            $this->contactEmail
        );
    }

    public static function of(): MyBusinessUnitSetContactEmailActionBuilder
    {
        return new self();
    }
}
