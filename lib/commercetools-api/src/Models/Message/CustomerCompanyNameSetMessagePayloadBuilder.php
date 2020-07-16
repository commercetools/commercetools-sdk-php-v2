<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerCompanyNameSetMessagePayload>
 */
final class CustomerCompanyNameSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $companyName;

    /**
     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param ?string $companyName
     * @return $this
     */
    public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }


    public function build(): CustomerCompanyNameSetMessagePayload
    {
        return new CustomerCompanyNameSetMessagePayloadModel(
            $this->companyName
        );
    }

    public static function of(): CustomerCompanyNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
