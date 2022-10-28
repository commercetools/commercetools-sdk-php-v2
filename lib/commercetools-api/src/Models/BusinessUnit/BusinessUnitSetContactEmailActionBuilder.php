<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitSetContactEmailAction>
 */
final class BusinessUnitSetContactEmailActionBuilder implements Builder
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


    public function build(): BusinessUnitSetContactEmailAction
    {
        return new BusinessUnitSetContactEmailActionModel(
            $this->contactEmail
        );
    }

    public static function of(): BusinessUnitSetContactEmailActionBuilder
    {
        return new self();
    }
}
